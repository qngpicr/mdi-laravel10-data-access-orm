<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RouteInfoController;
use App\Http\Controllers\CpuSsrController;
use App\Http\Controllers\CpuCsrController;

// 메인 페이지
Route::get('/', [MainController::class, 'index']);

// 라우트 정보 JSON
Route::get('/routes', [RouteInfoController::class, 'index']);

// SSR CPU 페이지
Route::get('/ssr/cpus', [CpuSsrController::class, 'ssrCpus']);

// CSR CPU 페이지
Route::get('/csr/cpus', [CpuCsrController::class, 'csrCpus']);
