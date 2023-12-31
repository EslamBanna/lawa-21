<?php

namespace App\Http\Controllers;

use App\Models\Degree;
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
        try {
            $kataebs  = Kataeb::get();
            $guns = Guns::get();
            $officers = Officer::with('kateba', 'Gun', 'degree')
                ->orderBy('kateba_id')
                ->orderBy('degree_id')
                ->get();
            return view('officer-database')->with([
                'kataebs' => $kataebs,
                'guns' => $guns,
                'officers' => $officers
            ]);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
    public function filterOfficers(Request $request)
    {
        try {
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
            if ($request->university != '') {
                $filter['university'] = $request->university;
            }
            $filteration = Officer::with(['kateba', 'Gun', 'degree'])
                ->orderBy('kateba_id')
                ->orderBy('degree_id')
                ->where($filter)->get();
            $kataebs  = Kataeb::get();
            $guns = Guns::get();
            return view('officer-database')->with(['kataebs' => $kataebs, 'guns' => $guns, 'officers' => $filteration]);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
    public function getOfficer(Request $request)
    {
        try {
            $filteration = '';
            if ($request->officer_name != null) {
                $filteration = Officer::with(['kateba', 'Gun', 'degree'])->where('name', 'like', '%' . $request->officer_name . '%')
                    ->orderBy('kateba_id')
                    ->orderBy('degree_id')
                    ->get();
            }
            if ($request->militray_id != null) {
                $filteration = Officer::with(['kateba', 'Gun', 'degree'])->where('militray_id', 'like', '%' . $request->militray_id . '%')->get();
            }
            if ($request->old_id != null) {
                $filteration = Officer::with(['kateba', 'Gun', 'degree'])->where('old_id', 'like', '%' . $request->old_id . '%')->get();
            }
            $kataebs  = Kataeb::get();
            $guns = Guns::get();
            return view('officer-database')->with(['kataebs' => $kataebs, 'guns' => $guns, 'officers' => $filteration]);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function addNewOfficer()
    {
        try {
            $kataebs  = Kataeb::get();
            $guns = Guns::get();
            $degrees = Degree::get();
            return view('Add-new-officer')->with(['kataebs' => $kataebs, 'guns' => $guns, 'degrees' => $degrees]);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function addOfficer(Request $request)
    {
        try {
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
            // $kataebs  = Kataeb::get();
            // $guns = Guns::get();
            // $officers = Officer::with('kateba', 'Gun')->get();
            return redirect()->to('/officer-database');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function showOfficer($officer_id)
    {
        try {
            $officer = Officer::with('Gun')->find($officer_id);
            return view('Show-officer')->with(['officer' => $officer]);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function updateOfficer($officer_id)
    {
        try {
            $kataebs  = Kataeb::get();
            $guns = Guns::get();
            $degrees = Degree::get();
            $officer = Officer::with('Gun')->find($officer_id);
            return view('update-officer')->with(
                [
                    'officer' => $officer,
                    'kataebs' => $kataebs,
                    'guns' => $guns,
                    'degrees' => $degrees
                ]
            );
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function updateOfficerData(Request $request, $officer_id)
    {
        try {
            $officer = Officer::find($officer_id);
            // $kataebs  = Kataeb::get();
            // $guns = Guns::get();
            // $officers = Officer::with('kateba', 'Gun')->get();
            $officer->update($request->all());
            return redirect()->to('/officer-database');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function deleteOfficer($officer_id)
    {
        try {
            $officer = Officer::find($officer_id);
            $officer->delete();
            // $kataebs  = Kataeb::get();
            // $guns = Guns::get();
            // $officers = Officer::with('kateba', 'Gun')->get();
            return redirect()->to('/officer-database');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
}
