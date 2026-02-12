<?php

namespace App\Services;

use App\Models\Member;

class MemberService
{
    // 전체 조회
    public function getAll()
    {
        return Member::all();
    }

    // 단일 조회
    public function getById($id)
    {
        return Member::find($id);
    }

    // 생성
    public function create(array $data)
    {
        return Member::create($data);
    }

    // 수정
    public function update($id, array $data)
    {
        $member = Member::find($id);
        if (!$member) return false;
        $member->update($data);
        return $member;
    }

    // 삭제
    public function delete($id)
    {
        $member = Member::find($id);
        return $member ? $member->delete() : false;
    }
}
