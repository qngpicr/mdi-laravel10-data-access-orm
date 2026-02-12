<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CpuRestController;
use App\Http\Controllers\Api\DeviceRestController;
use App\Http\Controllers\Api\MemberRestController;

// 기본 Sanctum 사용자 인증 라우트
// 실제 엔드포인트: GET /api/user
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// CPU REST API
// 실제 엔드포인트: GET    /api/cpus
Route::get('/cpus', [CpuRestController::class, 'index']);

// 실제 엔드포인트: GET    /api/cpus/{id}
Route::get('/cpus/{id}', [CpuRestController::class, 'show']);

// 실제 엔드포인트: POST   /api/cpus
Route::post('/cpus', [CpuRestController::class, 'store']);

// 실제 엔드포인트: PUT    /api/cpus/{id}
Route::put('/cpus/{id}', [CpuRestController::class, 'update']);

// 실제 엔드포인트: DELETE /api/cpus/{id}
Route::delete('/cpus/{id}', [CpuRestController::class, 'destroy']);

// Device REST API
// 실제 엔드포인트: GET    /api/devices
Route::get('/devices', [DeviceRestController::class, 'index']);

// 실제 엔드포인트: GET    /api/devices/{id}
Route::get('/devices/{id}', [DeviceRestController::class, 'show']);

// 실제 엔드포인트: POST   /api/devices
Route::post('/devices', [DeviceRestController::class, 'store']);

// 실제 엔드포인트: PUT    /api/devices/{id}
Route::put('/devices/{id}', [DeviceRestController::class, 'update']);

// 실제 엔드포인트: DELETE /api/devices/{id}
Route::delete('/devices/{id}', [DeviceRestController::class, 'destroy']);

// Member REST API
// 실제 엔드포인트: GET    /api/members
Route::get('/members', [MemberRestController::class, 'index']);

// 실제 엔드포인트: GET    /api/members/{id}
Route::get('/members/{id}', [MemberRestController::class, 'show']);

// 실제 엔드포인트: POST   /api/members
Route::post('/members', [MemberRestController::class, 'store']);

// 실제 엔드포인트: PUT    /api/members/{id}
Route::put('/members/{id}', [MemberRestController::class, 'update']);

// 실제 엔드포인트: DELETE /api/members/{id}
Route::delete('/members/{id}', [MemberRestController::class, 'destroy']);
