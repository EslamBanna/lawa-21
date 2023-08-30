<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\SemiOfficerController;
use App\Http\Controllers\SoliderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// $eastern_arabic = array('٠','١','٢','٣','٤','٥','٦','٧','٨','٩');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/functions', [Controller::class, 'functions']);
####################### officer ######################################################
Route::get('/officer-database', [OfficerController::class, 'officerDatabase']);
Route::post('/filter-officer', [OfficerController::class, 'filterOfficers']);
Route::post('/get-officer', [OfficerController::class, 'getOfficer']);
Route::get('/add-new-officer', [OfficerController::class, 'addNewOfficer']);
Route::post('/add-officer', [OfficerController::class, 'addOfficer']);
Route::get('/show-officer/{id}', [OfficerController::class, 'showOfficer']);
Route::get('/update-officer/{id}', [OfficerController::class, 'updateOfficer']);
Route::post('/update-officer-data/{id}', [OfficerController::class, 'updateOfficerData']);
Route::get('/delete-officer/{id}', [OfficerController::class, 'deleteOfficer']);
####################### Semi officer ######################################################
Route::get('/semi-officer-database', [SemiOfficerController::class, 'semiOfficerDatabase']);
Route::post('/filter-semi-officer', [SemiOfficerController::class, 'filterSemiOfficers']);
Route::post('/get-semi-officer', [SemiOfficerController::class, 'getSemiOfficer']);
Route::get('/add-new-semi-officer', [SemiOfficerController::class, 'addNewSemiOfficer']);
Route::post('/add-semi-officer', [SemiOfficerController::class, 'addSemiOfficer']);
Route::get('/show-semi-officer/{id}', [SemiOfficerController::class, 'showSemiOfficer']);
Route::get('/update-semi-officer/{id}', [SemiOfficerController::class, 'updateSemiOfficer']);
Route::post('/update-semi-officer-data/{id}', [SemiOfficerController::class, 'updateSemiOfficerData']);
Route::get('/delete-semi-officer/{id}', [SemiOfficerController::class, 'deleteSemiOfficer']);
####################### Solider ######################################################
Route::get('/soliders-database', [SoliderController::class, 'solidersDatabase']);
Route::post('/filter-soliders', [SoliderController::class, 'filterSolider']);
Route::post('/get-solider', [SoliderController::class, 'getSolider']);
Route::get('/add-new-solider', [SoliderController::class, 'addNewSolider']);
Route::post('/add-solider', [SoliderController::class, 'addSolider']);
Route::get('/show-solider/{id}', [SoliderController::class, 'showSolider']);
Route::get('/update-solider/{id}', [SoliderController::class, 'updateSolider']);
Route::post('/update-solider-data/{id}', [SoliderController::class, 'updateSoliderData']);
Route::get('/delete-solider/{id}', [SoliderController::class, 'deleteSolider']);
####################### plans ######################################################
Route::get('/plans-functions', [PlanController::class, 'getPlansFunsctions']);
Route::get('/weekly-traffic-functions', [PlanController::class, 'weeklyTrafficFunctions']);
Route::get('/weekly-traffic', [PlanController::class, 'weeklyTraffic']);
Route::post('/save-traffic-plan', [PlanController::class, 'saveTrafficPlan']);
Route::get('/show-weekly-traffics', [PlanController::class, 'showWeeklyTraffics']);
Route::get('/show-weekly-traffic/{id}', [PlanController::class, 'showWeeklyTraffic']);
Route::get('/delete-weekly-traffic/{id}', [PlanController::class, 'deleteWeeklyTraffic']);
Route::get('/get-plans',[PlanController::class,'getPlans']);
Route::post('/filter-plans',[PlanController::class,'filterPlans']);
Route::get('/add-plan-page',[PlanController::class,'addPlanPage']);
Route::post('/add-plan',[PlanController::class,'addPlan']);
Route::get('/kataep-plans', [PlanController::class, 'kataepPlans']);
Route::get('/update-plan/{plan_id}', [PlanController::class, 'updatePlan']);
Route::post('/save-update-plan/{plan_id}', [PlanController::class, 'saveUpdatePlan']);
Route::get('/delete-plan-one/{plan_id}', [PlanController::class, 'deletePlanOne']);
Route::get('/delete-plan/{plan_id}', [PlanController::class, 'deletePlan']);
####################### Export PDF ######################################################
Route::get('/export-officers', [PDFController::class, 'exportPdf']);



Route::get('create-pdf-file', [PDFController::class, 'index']);
Route::get('/test', [Controller::class, 'test']);