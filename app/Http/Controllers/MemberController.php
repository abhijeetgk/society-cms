<?php

namespace App\Http\Controllers;
use App\Http\Requests\AddMemberRequestValidate;
use App\MemberModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
// use Illuminate\Support\Facades\Session;
use Session;

class MemberController extends Controller
{
    public function index()
    {
        $society_id = Session::get('society_id');
        $member_list = \App\MemberModel::with('society')->where('soc_id',$society_id)->paginate(10);
        return view('member.list', ['member_list' => $member_list]);
    }

    public function create(AddMemberRequestValidate $request)
    {
        if ($request->isMethod('post')) {
            $data = [];
            $data = Input::except('_token');
            $society_id = Session::get('society_id');
            // echo $society_id." <br>";
            // exit;
            $validated = $request->validated();
            \App\MemberModel::updateOrCreate(
                [
                    'name' => $data['name'], 
                    'soc_id' => $society_id,
                    'co_owner_name' => $data['co_owner_name'], 
                    'flat_no' => $data['flat_no'], 
                    'floor_no' => $data['floor_no']
                ],
                [
                    'soc_id' => $society_id,
                    'name' => $data['name'],
                    'co_owner_name' => $data['co_owner_name'],
                    'flat_no' => $data['flat_no'],
                    'floor_no' => $data['floor_no']
                ]
            );
            return redirect()->route('memberIndex')->with('status', 'Member Added Successfully');
        }
        return view('member.create');
    }
    public function insert()
    {
        return view('member.create');
    }
}
