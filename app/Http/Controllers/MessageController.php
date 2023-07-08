<?php

namespace App\Http\Controllers;
use App\Models\Message;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Message::all();
        return view('message.index', compact("messages"));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    // return view('message.create');
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "username"=>"required|string|max:100"
        ]);
    $message = new Message();
    $message->username = $request->username;
    $message->senderId = $request->senderId;
    $message->text = $request->text;
    $message->phone= $request->phone;
    $message->email = $request->email;
    $message->recipientId = $request->recipientId;
    $message->senderId =request()->user()->id;
    $message->created_by =request()->user()->id;
    $message->save();

    // return redirect('message')->with('message', 'Message Sent Successfuly');
        return redirect()->back()->with('message', 'Message Sent Successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
