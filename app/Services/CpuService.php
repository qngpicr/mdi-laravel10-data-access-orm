<?php

namespace App\Services;

use App\Models\Cpu;

class CpuService
{
    // 전체 조회
    public function getAll()
    {
        return Cpu::all();
    }

    // 단일 조회
    public function getById($id)
    {
        return Cpu::find($id);
    }

    // 생성
    public function create(array $data)
    {
        return Cpu::create($data);
    }

    // 수정
    public function update($id, array $data)
    {
        $cpu = Cpu::find($id);
        if (!$cpu) return false;
        $cpu->update($data);
        return $cpu;
    }

    // 삭제
    public function delete($id)
    {
        $cpu = Cpu::find($id);
        return $cpu ? $cpu->delete() : false;
    }
}
