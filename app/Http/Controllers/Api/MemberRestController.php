<?php

namespace App\Http\Controllers\Api;

use App\Services\MemberService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberRestController extends Controller
{
    protected $service;

    public function __construct(MemberService $service)
    {
        $this->service = $service;
    }

    // GET /api/members
    public function index()
    {
        return response()->json($this->service->getAll());
    }

    // GET /api/members/{id}
    public function show($id)
    {
        $member = $this->service->getById($id);
        return $member ? response()->json($member) : response()->json(['error' => 'Member not found'], 404);
    }

    // POST /api/members
    public function store(Request $request)
    {
        $member = $this->service->create($request->all());
        return response()->json($member, 201);
    }

    // PUT /api/members/{id}
    public function update(Request $request, $id)
    {
        $member = $this->service->update($id, $request->all());
        return $member ? response()->json($member) : response()->json(['error' => 'Member not found or not updated'], 404);
    }

    // DELETE /api/members/{id}
    public function destroy($id)
    {
        return $this->service->delete($id)
            ? response()->json(['message' => 'Member deleted'])
            : response()->json(['error' => 'Member not found'], 404);
    }
}
