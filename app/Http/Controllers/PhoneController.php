<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phone;

class PhoneController extends Controller
{
    
    public function create()
    {
        return view('eloquent.phone');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'phone' => 'required',
            'phone_id' => 'required',
        ],[
            'phone.required' => 'Phone number must be needed!',
            'phone_id.required' => 'Phone ID must be needed!',
        ]);

        try {

            $value = new Phone;
            $value->phone = $request->phone;
            $value->phone_id = $request->phone_id;
            $value->save();

            session()->flash('message', 'Successfully created!');
            session()->flash('type', 'success');

            return redirect()->back();

        }catch(Exception $e)
        {
            session()->flash('message', $e->getMessage());
            session()->flash('type', 'danger');

            return redirect()->back();
        }
    }

    public function show()
    {
        $phone = Phone::all();
        return view('eloquent.phoneshow', compact('phone'));
    }


}
