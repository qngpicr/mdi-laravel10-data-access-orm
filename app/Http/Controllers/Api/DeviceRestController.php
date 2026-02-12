<?php

namespace App\Http\Controllers\Api;

use App\Services\DeviceService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeviceRestController extends Controller
{
    protected $service;

    public function __construct(DeviceService $service)
    {
        $this->service = $service;
    }

    // GET /api/devices
    public function index()
    {
        return response()->json($this->service->getAll());
    }

    // GET /api/devices/{id}
    public function show($id)
    {
        $device = $this->service->getById($id);
        return $device ? response()->json($device) : response()->json(['error' => 'Device not found'], 404);
    }

    // POST /api/devices
    public function store(Request $request)
    {
        $device = $this->service->create($request->all());
        return response()->json($device, 201);
    }

    // PUT /api/devices/{id}
    public function update(Request $request, $id)
    {
        $device = $this->service->update($id, $request->all());
        return $device ? response()->json($device) : response()->json(['error' => 'Device not found or not updated'], 404);
    }

    // DELETE /api/devices/{id}
    public function destroy($id)
    {
        return $this->service->delete($id)
            ? response()->json(['message' => 'Device deleted'])
            : response()->json(['error' => 'Device not found'], 404);
    }
}
