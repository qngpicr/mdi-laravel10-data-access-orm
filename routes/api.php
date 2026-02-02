<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CpuRestController;

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
