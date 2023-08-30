<?php

namespace App\Http\Controllers;

use App\Models\Kataeb;
use App\Models\Plan;
use App\Models\PlanAttachments;
use App\Models\PlanKateaps;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlanController extends Controller
{
    use GeneralTrait;
    public function getPlansFunsctions()
    {
        return view('Plans-Functions');
    }

    public function weeklyTrafficFunctions()
    {
        return view('weekly-traffic-functions');
    }

    public function weeklyTraffic()
    {
        $kataebs = Kataeb::get();
        return view('Weekly-traffic')->with(['kataebs' => $kataebs]);
    }

    public function saveTrafficPlan(Request $request)
    {
        $keys = array_keys($request->all());
        $values = array_values($request->all());
        $satr = [];
        $sun = [];
        $mon = [];
        $tues = [];
        $wens = [];
        $thars = [];

        foreach ($keys as $index => $key) {
            if (str_contains($key, 'saturday')) {
                array_push($satr, $values[$index]);
            } else if (str_contains($key, 'sunday')) {
                array_push($sun, $values[$index]);
            } else if (str_contains($key, 'monday')) {
                array_push($mon, $values[$index]);
            } else if (str_contains($key, 'tuesday')) {
                array_push($tues, $values[$index]);
            } else if (str_contains($key, 'wednesday')) {
                array_push($wens, $values[$index]);
            } else if (str_contains($key, 'tharsday')) {
                array_push($thars, $values[$index]);
            }
        }
        $plan = Plan::create([
            'start_plan' => $request->start_week,
            'end_plan' => $request->end_week,
            'type_of_plan' => 'مخطط مرور القائد',
            'subject' => '',
            'desction' => '',
            'notes' => $request->notes
        ]);


        if (!empty($satr)) {
            foreach ($satr as $s)
                PlanKateaps::create([
                    'plan_id' => $plan->id,
                    'kateapa_id' => $s,
                    'day' => 1
                ]);
        }


        if (!empty($sun)) {
            foreach ($sun as $s)
                PlanKateaps::create([
                    'plan_id' => $plan->id,
                    'kateapa_id' => $s,
                    'day' => 2
                ]);
        }

        if (!empty($mon)) {
            foreach ($mon as $s)
                PlanKateaps::create([
                    'plan_id' => $plan->id,
                    'kateapa_id' => $s,
                    'day' => 3
                ]);
        }
        if (!empty($tues)) {
            foreach ($tues as $s)
                PlanKateaps::create([
                    'plan_id' => $plan->id,
                    'kateapa_id' => $s,
                    'day' => 4
                ]);
        }
        if (!empty($wens)) {
            foreach ($wens as $s)
                PlanKateaps::create([
                    'plan_id' => $plan->id,
                    'kateapa_id' => $s,
                    'day' => 5
                ]);
        }
        if (!empty($thars)) {
            foreach ($thars as $s)
                PlanKateaps::create([
                    'plan_id' => $plan->id,
                    'kateapa_id' => $s,
                    'day' => 6
                ]);
        }

        return redirect()->to('/plans-functions');
    }

    public function showWeeklyTraffics()
    {
        $traffics = Plan::where('type_of_plan', 'مخطط مرور القائد')->orderBy('created_at', 'desc')->get();
        return view('weekly-traffics')->with(['traffics' => $traffics]);
    }

    public function showWeeklyTraffic($traffic_id)
    {
        $plan = Plan::with('kataeabs.katepa')
            ->find($traffic_id);
        return view('show-weekly-traffics')->with(['plan' => $plan]);
    }

    public function deleteWeeklyTraffic($traffic_id)
    {
        $plan = Plan::find($traffic_id);
        $plan->kataeabs()->delete();
        $plan->delete();
        return redirect()->to('/plans-functions');
    }

    public function getPlans()
    {
        $plans = Plan::where('start_plan', '>=', today())
            ->with(['kataeabs.katepa', 'attachments'])
            ->orderBy('start_plan')
            ->get();
        return view('All-Plans')->with(['plans' => $plans]);
    }

    public function filterPlans(Request $request)
    {
        $plans = [];
        if ($request->end != null) {
            $plans = Plan::where('start_plan', '>=', $request->start)
                ->where('start_plan', '<=', $request->end)
                ->with(['kataeabs.katepa', 'attachments'])
                ->orderBy('start_plan')
                ->get();
        } else {
            $plans = Plan::where('start_plan', '>=', $request->start)
                ->with(['kataeabs.katepa', 'attachments'])
                ->orderBy('start_plan')
                ->get();
        }
        return view('All-Plans')->with(['plans' => $plans]);
    }

    public function addPlanPage()
    {
        $kataebs = Kataeb::get();
        // return view('Add-new-plan')->with(['kataebs' => $kataebs]);
        return view('Add-new-plan-with-tiny')->with(['kataebs' => $kataebs]);
    }
    public function addPlan(Request $request)
    {
        try {
            DB::beginTransaction();
            // return $request;
            $keys = array_keys($request->all());
            $values = array_values($request->all());
            $specials = [];
            foreach ($keys as $index => $key) {
                if (str_contains($key, 'special')) {
                    array_push($specials, $values[$index]);
                }
            }
            $plan = Plan::create([
                'start_plan' => $request->start_plan,
                'end_plan'  => $request->end_plan,
                'type_of_plan'  => $request->type_of_plan,
                'subject'  => $request->subject,
                'desction'  => '',
                'notes'  => $request->notes ?? ''
            ]);
            foreach ($specials as $special) {
                PlanKateaps::create([
                    'plan_id' => $plan->id,
                    'kateapa_id' => $special,
                    'day' => '-'
                ]);
            }
            if ($request->hasFile('attachs')) {
                $files = $request->file('attachs');
                $plan_attach = '';
                foreach ($files as $file) {
                    $plan_attach = $this->saveImage($file, 'planAttachments');
                    PlanAttachments::create([
                        'plan_id' => $plan->id,
                        'attach' => $plan_attach
                    ]);
                }
            }
            DB::commit();
            return redirect()->to('/get-plans');
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }

    public function kataepPlans()
    {
        $data = [];
        $l21 = PlanKateaps::where('kateapa_id', 1)
            ->with('plan.attachments')
            ->with('plan', function ($q) {
                $q->where('start_plan', '>=', today())->get();
            })
            ->get();
        $k41 = PlanKateaps::where('kateapa_id', 2)
            ->with('plan.attachments')
            ->with('plan', function ($q) {
                $q->where('start_plan', '>=', today())->get();
            })->get();
        $k43 = PlanKateaps::where('kateapa_id', 3)
            ->with('plan.attachments')
            ->with('plan', function ($q) {
                $q->where('start_plan', '>=', today())->get();
            })->get();
        $k44 = PlanKateaps::where('kateapa_id', 4)
            ->with('plan.attachments')
            ->with('plan', function ($q) {
                $q->where('start_plan', '>=', today())->get();
            })->get();
        $k68 = PlanKateaps::where('kateapa_id', 5)
            ->with('plan.attachments')
            ->with('plan', function ($q) {
                $q->where('start_plan', '>=', today())->get();
            })->get();
        $k69 = PlanKateaps::where('kateapa_id', 6)
            ->with('plan.attachments')
            ->with('plan', function ($q) {
                $q->where('start_plan', '>=', today())->get();
            })->get();
        $k74 = PlanKateaps::where('kateapa_id', 7)
            ->with('plan.attachments')
            ->with('plan', function ($q) {
                $q->where('start_plan', '>=', today())->get();
            })->get();
        $k79 = PlanKateaps::where('kateapa_id', 8)
            ->with('plan.attachments')
            ->with('plan', function ($q) {
                $q->where('start_plan', '>=', today())->get();
            })->get();
        array_push($data, $l21);
        array_push($data, $k41);
        array_push($data, $k43);
        array_push($data, $k44);
        array_push($data, $k68);
        array_push($data, $k69);
        array_push($data, $k74);
        array_push($data, $k79);
        // return $data;
        return view('kataeb-plans')->with(['data' => $data]);
    }

    public function updatePlan($plan_id)
    {
        $kataebs = Kataeb::get();
        $plan = Plan::find($plan_id);
        // return $plan;
        return view('update-plan-with-tiny')->with(['plan' => $plan, 'kataebs' => $kataebs]);
    }

    public function saveUpdatePlan(Request $request, $plan_id)
    {
        try {
            DB::beginTransaction();
            $plan = Plan::find($plan_id);
            $keys = array_keys($request->all());
            $values = array_values($request->all());
            $specials = [];
            foreach ($keys as $index => $key) {
                if (str_contains($key, 'special')) {
                    array_push($specials, $values[$index]);
                }
            }
            $plan->update([
                'start_plan' => $request->start_plan,
                'end_plan' => $request->end_plan ?? '',
                'type_of_plan' => $request->type_of_plan,
                'subject' => $request->subject ?? '',
                'desction' => '',
                'notes' => $request->notes ?? ''
            ]);
            $plan->kataeabs()->delete();
            foreach ($specials as $special) {
                PlanKateaps::create([
                    'plan_id' => $plan->id,
                    'kateapa_id' => $special,
                    'day' => '-'
                ]);
            }
            if ($request->hasFile('attachs')) {
                $files = $request->file('attachs');
                $plan_attach = '';
                foreach ($files as $file) {
                    $plan_attach = $this->saveImage($file, 'planAttachments');
                    PlanAttachments::create([
                        'plan_id' => $plan->id,
                        'attach' => $plan_attach
                    ]);
                }
            }
            DB::commit();
            return redirect()->to('/get-plans');
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }

    public function deletePlan($plan_id)
    {
        try {
            DB::beginTransaction();
            $plan = Plan::find($plan_id);
            $plan->kataeabs()->delete();
            $plan->attachments()->delete();
            $plan->delete();
            DB::commit();
            return redirect()->to('/kataep-plans');
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }

    public function deletePlanOne($plan_id)
    {
        try {
            DB::beginTransaction();
            $plan = Plan::find($plan_id);
            $plan->kataeabs()->delete();
            $plan->attachments()->delete();
            $plan->delete();
            DB::commit();
            return redirect()->to('/get-plans');
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }
}
