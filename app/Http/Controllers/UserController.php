<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function uploadImage(Request $request)
    {
        if($request->hasFile('image')){
            $filename= $request ->image->getClientOriginalName();
            $request ->image->storeAs('images', $filename, 'public');
            User::find(1)->update(['avatar'=>$filename]);
        }
        return redirect()->back();
    }
}
