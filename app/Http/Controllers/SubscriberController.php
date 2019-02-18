<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function data(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string|email|max:255',
        ]);

        $subscriber = new Subscriber();
        $subscriber->email = $request->email;
        $subscriber->save();

        session()->flash('success', 'You Successfuly Subscribe H A K A');
        return redirect()->back();
    }

    public function subscribeBackend()
    {
        $subsribes = Subscriber::all();

        return view('admin.subscriber', compact('subsribes'));
    }
}
