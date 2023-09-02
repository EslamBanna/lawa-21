<?php

namespace App\Http\Controllers;

use App\Models\Guns;
use App\Models\Kataeb;
use App\Models\SemiOfficer;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class SemiOfficerController extends Controller
{
    use GeneralTrait;
    public function semiOfficerDatabase()
    {
        $kataebs  = Kataeb::get();
        $guns = Guns::get();
        $officers = SemiOfficer::with('kateba', 'Gun')->get();
        return view('semi-officer-database')->with(['kataebs' => $kataebs, 'guns' => $guns, 'officers' => $officers]);
    }
    public function filterSemiOfficers(Request $request)
    {
        $filter = [];
        if ($request->kateaba != '') {
            $filter['kateba_id'] = $request->kateaba;
        }
        if ($request->gun_id != '') {
            $filter['gun_id'] = $request->gun_id;
        }
        if ($request->gun_number != '') {
            $filter['gun_number'] = $request->gun_number;
        }
        $filteration = SemiOfficer::with(['kateba', 'Gun'])->where($filter)->get();
        $kataebs  = Kataeb::get();
        $guns = Guns::get();
        return view('semi-officer-database')->with(['kataebs' => $kataebs, 'guns' => $guns, 'officers' => $filteration]);
    }
    public function getSemiOfficer(Request $request)
    {
        $filteration = '';
        if ($request->officer_name != null) {
            $filteration = SemiOfficer::with(['kateba', 'Gun'])->where('name', 'like', '%' . $request->officer_name . '%')->get();
        }
        if ($request->militray_id != null) {
            $filteration = SemiOfficer::with(['kateba', 'Gun'])->where('militray_id', 'like', '%' . $request->militray_id . '%')->get();
        }
        $kataebs  = Kataeb::get();
        $guns = Guns::get();
        return view('semi-officer-database')->with(['kataebs' => $kataebs, 'guns' => $guns, 'officers' => $filteration]);
    }

    public function addNewSemiOfficer()
    {
        $kataebs  = Kataeb::get();
        $guns = Guns::get();
        return view('Add-new-semi-officer')->with(['kataebs' => $kataebs, 'guns' => $guns]);
    }

    public function addSemiOfficer(Request $request)
    {
        $image = '';
        $id_image = '';
        $militray_image = '';
        if ($request->hasFile('image')) {
            $image = $this->saveImage($request->image, 'semi_officers');
        }
        if ($request->hasFile('id_image')) {
            $id_image = $this->saveImage($request->id_image, 'semi_officers_id_images');
        }
        if ($request->hasFile('militray_image')) {
            $militray_image = $this->saveImage($request->militray_image, 'semi_officers_militray_images');
        }
        $new_officer = SemiOfficer::create($request->except(['_token', 'image', 'id_image', 'militray_image']));
        $new_officer->update([
            'image' => $image,
            'id_image' => $id_image,
            'militray_image' => $militray_image
        ]);
        return redirect()->to('/semi-officer-database');
    }

    public function showSemiOfficer($officer_id)
    {
        $officer = SemiOfficer::with('Gun')->find($officer_id);
        return view('Show-semi-officer')->with(['officer' => $officer]);
    }

    public function updateSemiOfficer($officer_id)
    {
        $kataebs  = Kataeb::get();
        $guns = Guns::get();
        $officer = SemiOfficer::with('Gun')->find($officer_id);
        return view('update-semi-officer')->with(['officer' => $officer, 'kataebs' => $kataebs, 'guns' => $guns]);
    }

    public function updateSemiOfficerData(Request $request, $officer_id)
    {
        $officer = SemiOfficer::find($officer_id);
        $officer->update($request->except('_token'));
        return redirect()->to('/semi-officer-database');
    }

    public function deleteSemiOfficer($officer_id)
    {
        $officer = SemiOfficer::find($officer_id);
        $officer->delete();
        return redirect()->to('/semi-officer-database');
    }
}
