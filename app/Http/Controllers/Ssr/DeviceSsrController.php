<?php

namespace App\Http\Controllers\Ssr;

use App\Http\Controllers\Controller;
use App\Services\DeviceService;

class DeviceSsrController extends Controller
{
    protected $service;

    public function __construct(DeviceService $service)
    {
        $this->service = $service;
    }

    // GET /ssr/devices
    public function ssrDevices()
    {
        $data['deviceList'] = $this->service->getAll();
        return view('ssr.ssr_device_total', $data);
    }
}
