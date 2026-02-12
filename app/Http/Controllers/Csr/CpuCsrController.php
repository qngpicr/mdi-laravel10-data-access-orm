<?php

namespace App\Http\Controllers\Csr;

use App\Http\Controllers\Controller;

class CpuCsrController extends Controller
{
    // GET /csr/cpus
    public function csrCpus()
    {
        // 단순히 뷰만 반환 (데이터는 JS에서 REST API 호출)
        return view('csr.csr_cpu_total');
    }
}
