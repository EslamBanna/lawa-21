<?php

namespace App\Http\Controllers;

use App\Models\Guns;
use App\Models\Kataeb;
use App\Models\Officer;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class OfficerController extends Controller
{
    use GeneralTrait;
    public function officerDatabase()
    {
        $kataebs  = Kataeb::get();
        $guns = Guns::get();
        $officers = Officer::with('kateba', 'Gun')
            ->orderBy('kateba_id')
            ->get();
        return view('officer-database')->with([
            'kataebs' => $kataebs,
            'guns' => $guns,
            'officers' => $officers
        ]);
    }
    public function filterOfficers(Request $request)
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
        if ($request->officer_type != '') {
            $filter['officer_type'] = $request->officer_type;
        }
        $filteration = Officer::with(['kateba', 'Gun'])->where($filter)->get();
        $kataebs  = Kataeb::get();
        $guns = Guns::get();
        return view('officer-database')->with(['kataebs' => $kataebs, 'guns' => $guns, 'officers' => $filteration]);
    }
    public function getOfficer(Request $request)
    {
        $filteration = '';
        if ($request->officer_name != null) {
            $filteration = Officer::where('name', 'like', '%' . $request->officer_name . '%')
                ->orderBy('kateba_id')
                ->get();
        }
        if ($request->militray_id != null) {
            $filteration = Officer::where('militray_id', 'like', '%' . $request->militray_id . '%')->get();
        }
        if ($request->old_id != null) {
            $filteration = Officer::where('old_id', 'like', '%' . $request->old_id . '%')->get();
        }
        $kataebs  = Kataeb::get();
        $guns = Guns::get();
        return view('officer-database')->with(['kataebs' => $kataebs, 'guns' => $guns, 'officers' => $filteration]);
    }

    public function addNewOfficer()
    {
        $kataebs  = Kataeb::get();
        $guns = Guns::get();
        return view('Add-new-officer')->with(['kataebs' => $kataebs, 'guns' => $guns]);
    }

    public function addOfficer(Request $request)
    {
        $image = '';
        $id_image = '';
        $militray_image = '';
        if ($request->hasFile('image')) {
            $image = $this->saveImage($request->image, 'officers');
        }
        if ($request->hasFile('id_image')) {
            $id_image = $this->saveImage($request->id_image, 'officers_id_images');
        }
        if ($request->hasFile('militray_image')) {
            $militray_image = $this->saveImage($request->militray_image, 'officers_militray_images');
        }
        $new_officer = Officer::create($request->except(['_token', 'image', 'id_image', 'militray_image']));
        $new_officer->update([
            'image' => $image,
            'id_image' => $id_image,
            'militray_image' => $militray_image
        ]);
        $kataebs  = Kataeb::get();
        $guns = Guns::get();
        $officers = Officer::with('kateba', 'Gun')->get();
        return redirect()->to('/officer-database');
    }

    public function showOfficer($officer_id)
    {
        $officer = Officer::with('Gun')->find($officer_id);
        return view('Show-officer')->with(['officer' => $officer]);
    }

    public function updateOfficer($officer_id)
    {
        $kataebs  = Kataeb::get();
        $guns = Guns::get();
        $officer = Officer::with('Gun')->find($officer_id);
        return view('update-officer')->with(['officer' => $officer, 'kataebs' => $kataebs, 'guns' => $guns]);
    }

    public function updateOfficerData(Request $request, $officer_id)
    {
        $officer = Officer::find($officer_id);
        $kataebs  = Kataeb::get();
        $guns = Guns::get();
        $officers = Officer::with('kateba', 'Gun')->get();
        $officer->update($request->all());
        return redirect()->to('/officer-database');
        // return view('officer-database')->with(['kataebs' => $kataebs, 'guns' => $guns, 'officers' => $officers]);
    }

    public function deleteOfficer($officer_id)
    {
        $officer = Officer::find($officer_id);
        $officer->delete();
        $kataebs  = Kataeb::get();
        $guns = Guns::get();
        $officers = Officer::with('kateba', 'Gun')->get();
        return redirect()->to('/officer-database');
        // return view('officer-database')->with(['kataebs' => $kataebs, 'guns' => $guns, 'officers' => $officers]);
    }
}
