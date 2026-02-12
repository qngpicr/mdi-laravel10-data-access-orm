<?php

namespace App\Http\Controllers\Ssr;

use App\Http\Controllers\Controller;
use App\Services\MemberService;

class MemberSsrController extends Controller
{
    protected $service;

    public function __construct(MemberService $service)
    {
        $this->service = $service;
    }

    // GET /ssr/members
    public function ssrMembers()
    {
        $data['memberList'] = $this->service->getAll();
        return view('ssr.ssr_member_total', $data);
    }
}
