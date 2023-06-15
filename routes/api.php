<?php

use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\CommentController;
use App\Http\Controllers\api\DossierController;
use App\Http\Controllers\api\FicheController;
use App\Http\Controllers\api\LikeController;
use App\Http\Controllers\api\MedicController;
use App\Http\Controllers\api\PostController;
use App\Http\Controllers\api\QuestionController;
use App\Http\Controllers\api\RDVController;
use App\Http\Controllers\api\RendvousController;
use App\Http\Controllers\api\ResponseController;
use App\Http\Controllers\api\SpecialiteController;
use App\Http\Controllers\PatientController;
use App\Models\Fiche;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->group(function () {

    Route::post('/auth/logout', [AuthController::class, 'Logout']);
});
Route::get('users', [AuthController::class, 'Index']);

Route::resource('/post', PostController::class);
Route::post('/post/search', [PostController::class, 'search']);

Route::get('/patient/user/{user_id}', [PatientController::class, 'findByUserId']);
Route::resource('/patient', PatientController::class);
Route::post('/patient/search', [PatientController::class, 'search']);

Route::resource('/dossier', DossierController::class);
Route::post('/dossier/search', [DossierController::class, 'search']);

Route::resource('/fiche', FicheController::class);

Route::resource('/rendvous', RendvousController::class);
Route::post('/rendevous/search', [RendvousController::class, 'search']);

Route::resource('/comment', CommentController::class);
Route::post('/comment/search', [CommentController::class, 'search']);

Route::resource('/like', LikeController::class);

Route::resource('/medic', MedicController::class);
Route::get('/medic/user/{user_id}', [MedicController::class, 'findByUserId']);
Route::post('/medic/search', [MedicController::class, 'search']);


Route::resource('/question', QuestionController::class);
Route::post('/question/search', [QuestionController::class, 'search']);

Route::resource('/response', ResponseController::class);
Route::post('/response/search', [ResponseController::class, 'search']);

Route::resource('/specialite', SpecialiteController::class);
Route::post('/specialite/search', [SpecialiteController::class, 'search']);

Route::post('/auth/register', [AuthController::class, 'Register']);
Route::post('/auth/login', [AuthController::class, 'Login']);
Route::get('/user', [AuthController::class, 'Index']);
Route::put('/user/{id}', [AuthController::class, 'update']);

Route::get('/connected', [AuthController::class, 'user']);

Route::post('/auth/verify', [AuthController::class, 'Validate_Mail']);
Route::post('/auth/verify_code', [AuthController::class, 'Verif_code']);
Route::post('/auth/update_pass', [AuthController::class, 'Update_password']);

Route::get('/sendNotif', function () {


    // $SERVER_API_KEY = 'API SERVER KEY';
    $SERVER_API_KEY = 'AAAAdy1M1ms:APA91bGCThUl74aOlkxYWqmt1L1X72Y98Y-ONKGc84qdqXPKtRTl5oARCFCHipRbPdlPUL-MbxTSy8_jSiL_HbHC6eAACcSoAOtdbP1T9RNa64R2DACrVuP6SSNj2tyaHsz7Ptth-kwi';

    $token_1 = 'Test Token';

    $data = [

        "registration_ids" => [
            $token_1
        ],

        "notification" => [

            "title" => 'Welcome',

            "body" => 'Description',

            "sound" => "default" // required for sound on ios

        ],

    ];

    $dataString = json_encode($data);

    $headers = [

        'Authorization: key=' . $SERVER_API_KEY,

        'Content-Type: application/json',

    ];

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');

    curl_setopt($ch, CURLOPT_POST, true);

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

    $response = curl_exec($ch);
    return response(["result" => $response], 200);
    //dd($response);
});
