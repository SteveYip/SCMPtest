<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
class DataController extends Controller
{
    //

    public function submit(Request $request){
        Log::info('submit');
        $this->validate($request, [
            'email' => 'required',
            'name' => 'required',
            'phone' => 'required',
        ]);

        $user = new User();
        $user->fill([
            'name' => encrypt($request->name),
            'email' => encrypt($request->email),
            'phone' => $request->phone,
            'type' => 'customer',
        ])->save();
        return response()->json(200);
        
    }
}
