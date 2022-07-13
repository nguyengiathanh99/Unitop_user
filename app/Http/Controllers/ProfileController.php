<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit($id)
    {
        $profiles = Auth::user()->courses()->get();
        $user = Auth::user();
        return view('profile.profile', compact('profiles', 'user'));
    }

    public function update(ProfileRequest $request, $id)
    {
        $data = [
            'name' => $request->name,
            'date_of_birth' => $request->dob,
            'description' => $request->description,
            'phone' => $request->phone,
            'address' => $request->address,
        ];
        if (isset($request->myFile)) {
            $path = Helper::uploadFile($request->myFile);
            $data['image'] = $path;
        }
        // if($request->file('myFile')){
        //     $file= $request->file('myFile');
        //     $filename= date('YmdHi').$file->getClientOriginalName();
        //     $file-> move(public_path('member/image'), $filename);
        //     $data['image'] = 'member/image/'.$filename;
        // }
        $user = Auth::user()->update($data);
        if ($user) {
            return redirect()->back()->with('message', 'Cập nhật thành công');
        }
    }
}
