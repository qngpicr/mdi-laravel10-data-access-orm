<?php

namespace App\Services;

use App\Models\Device;

class DeviceService
{
    // 전체 조회
    public function getAll()
    {
        return Device::all();
    }

    // 단일 조회
    public function getById($id)
    {
        return Device::find($id);
    }

    // 생성
    public function create(array $data)
    {
        return Device::create($data);
    }

    // 수정
    public function update($id, array $data)
    {
        $device = Device::find($id);
        if (!$device) return false;
        $device->update($data);
        return $device;
    }

    // 삭제
    public function delete($id)
    {
        $device = Device::find($id);
        return $device ? $device->delete() : false;
    }
}
