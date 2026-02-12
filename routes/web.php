<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RouteInfoController;
use App\Http\Controllers\Ssr\CpuSsrController;
use App\Http\Controllers\Ssr\DeviceSsrController;
use App\Http\Controllers\Ssr\MemberSsrController;
use App\Http\Controllers\Csr\CpuCsrController;
use App\Http\Controllers\Csr\DeviceCsrController;
use App\Http\Controllers\Csr\MemberCsrController;

// 메인 페이지
Route::get('/', [MainController::class, 'index']);

// 라우트 정보 JSON
Route::get('/routes', [RouteInfoController::class, 'index']);

// SSR CPU 페이지
Route::get('/ssr/cpus', [CpuSsrController::class, 'ssrCpus']);

// CSR CPU 페이지
Route::get('/csr/cpus', [CpuCsrController::class, 'csrCpus']);

// SSR Device 페이지
Route::get('/ssr/devices', [DeviceSsrController::class, 'ssrDevices']);

// CSR Device 페이지
Route::get('/csr/devices', [DeviceCsrController::class, 'csrDevices']);

// SSR Member 페이지
Route::get('/ssr/members', [MemberSsrController::class, 'ssrMembers']);

// CSR Member 페이지
Route::get('/csr/members', [MemberCsrController::class, 'csrMembers']);
