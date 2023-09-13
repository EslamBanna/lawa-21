<?php

namespace App\Http\Controllers;

use App\Models\Guns;
use App\Models\Kataeb;
use App\Models\Solider;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class SoliderController extends Controller
{

    use GeneralTrait;
    public function solidersDatabase()
    {
        try {
            $kataebs  = Kataeb::get();
            $guns = Guns::get();
            $officers = Solider::with('kateba', 'Gun')
                ->orderBy('kateba_id')
                ->get();
            return view('soliders-database')->with(['kataebs' => $kataebs, 'guns' => $guns, 'officers' => $officers]);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
    public function filterSolider(Request $request)
    {
        try {
            $filter = [];
            if ($request->kateaba != '') {
                $filter['kateba_id'] = $request->kateaba;
            }
            if ($request->gun_id != '') {
                $filter['gun_id'] = $request->gun_id;
            }
            $filteration = Solider::with(['kateba', 'Gun'])
                ->orderBy('kateba_id')
                ->where($filter)->get();
            $kataebs  = Kataeb::get();
            $guns = Guns::get();
            return view('soliders-database')->with(['kataebs' => $kataebs, 'guns' => $guns, 'officers' => $filteration]);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
    public function getSolider(Request $request)
    {
        try {
            $filteration = '';
            if ($request->officer_name != null) {
                $filteration = Solider::with(['kateba', 'Gun'])->where('name', 'like', '%' . $request->officer_name . '%')
                    ->orderBy('kateba_id')
                    ->get();
            }
            if ($request->militray_id != null) {
                $filteration = Solider::with(['kateba', 'Gun'])->where('militray_id', 'like', '%' . $request->militray_id . '%')->get();
            }
            $kataebs  = Kataeb::get();
            $guns = Guns::get();
            return view('soliders-database')->with(['kataebs' => $kataebs, 'guns' => $guns, 'officers' => $filteration]);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function addNewSolider()
    {
        try {
            $kataebs  = Kataeb::get();
            $guns = Guns::get();
            return view('Add-new-solider')->with(['kataebs' => $kataebs, 'guns' => $guns]);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function addSolider(Request $request)
    {
        try {
            $image = '';
            $id_image = '';
            $militray_image = '';
            if ($request->hasFile('image')) {
                $image = $this->saveImage($request->image, 'soliders');
            }
            if ($request->hasFile('id_image')) {
                $id_image = $this->saveImage($request->id_image, 'soliders_id_images');
            }
            if ($request->hasFile('militray_image')) {
                $militray_image = $this->saveImage($request->militray_image, 'soliders_militray_images');
            }
            $new_officer = Solider::create($request->except(['_token', 'image', 'id_image', 'militray_image']));
            $new_officer->update([
                'image' => $image,
                'id_image' => $id_image,
                'militray_image' => $militray_image
            ]);
            return redirect()->to('/soliders-database');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function showSolider($officer_id)
    {
        try {
            $officer = Solider::with('kateba')->find($officer_id);
            return view('Show-solider')->with(['officer' => $officer]);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function updateSolider($officer_id)
    {
        try {
            $kataebs  = Kataeb::get();
            $guns = Guns::get();
            $officer = Solider::find($officer_id);
            return view('update-solider')->with(['officer' => $officer, 'kataebs' => $kataebs, 'guns' => $guns]);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function updateSoliderData(Request $request, $officer_id)
    {
        try {
            $officer = Solider::find($officer_id);
            $officer->update($request->except('_token'));
            return redirect()->to('/soliders-database');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function deleteSolider($officer_id)
    {
        try {
            $officer = Solider::find($officer_id);
            $officer->delete();
            return redirect()->to('/soliders-database');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
}
