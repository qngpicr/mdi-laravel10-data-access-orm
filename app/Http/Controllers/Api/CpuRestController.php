<?php

namespace App\Http\Controllers\Api;

use App\Services\CpuService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CpuRestController extends Controller
{
    protected $service;

    public function __construct(CpuService $service)
    {
        $this->service = $service;
    }

    // GET /api/cpus
    public function index()
    {
        return response()->json($this->service->getAll());
    }

    // GET /api/cpus/{id}
    public function show($id)
    {
        $cpu = $this->service->getById($id);
        return $cpu ? response()->json($cpu) : response()->json(['error' => 'CPU not found'], 404);
    }

    // POST /api/cpus
    public function store(Request $request)
    {
        $cpu = $this->service->create($request->all());
        return response()->json($cpu, 201);
    }

    // PUT /api/cpus/{id}
    public function update(Request $request, $id)
    {
        $cpu = $this->service->update($id, $request->all());
        return $cpu ? response()->json($cpu) : response()->json(['error' => 'CPU not found or not updated'], 404);
    }

    // DELETE /api/cpus/{id}
    public function destroy($id)
    {
        return $this->service->delete($id)
            ? response()->json(['message' => 'CPU deleted'])
            : response()->json(['error' => 'CPU not found'], 404);
    }
}
