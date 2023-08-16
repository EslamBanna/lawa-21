<?php

namespace App\Http\Controllers;

use App\Models\Kataeb;
use App\Models\Plan;
use App\Models\PlanKateaps;
use Illuminate\Http\Request;

class PlanController extends Controller
{
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
        $plan->delete();
        return redirect()->to('/plans-functions');
    }

    public function getPlans()
    {
        $plans = Plan::where('start_plan', '>=', today())
            ->with(['kataeabs.katepa'])
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
                ->get();
        } else {
            $plans = Plan::where('start_plan', '>=', $request->start)->get();
        }
        return view('All-Plans')->with(['plans' => $plans]);
    }

    public function addPlanPage(){
        $kataebs = Kataeb::get();
        return view('Add-new-plan')->with(['kataebs' => $kataebs]);
    }
    public function addPlan(Request $request)
    {
        return $request;
        $plan = Plan::create([
            'start_plan' => $request->start_plan,
            'end_plan'  => $request->end_plan,
            'type_of_plan'  => $request->type_of_plan,
            'subject'  => $request->subject,
            'desction'  => '',
            'notes'  => $request->notes
        ]);

    }
}
