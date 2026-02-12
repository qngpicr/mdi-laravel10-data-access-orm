<?php

namespace App\Http\Controllers\Ssr;

use App\Http\Controllers\Controller;
use App\Services\CpuService;

class CpuSsrController extends Controller
{
    protected $service;

    public function __construct(CpuService $service)
    {
        $this->service = $service;
    }

    // GET /ssr/cpus
    public function ssrCpus()
    {
        $data['cpuList'] = $this->service->getAll();
        return view('ssr.ssr_cpu_total', $data);
    }
}
