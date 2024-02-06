<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    protected $message;

    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    public function index()
    {
        $messages = $this->message->all()->sortByDesc('id');

        return view('message.index', [
            'messages' => $messages,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:30',
            'email' => 'required|email|max:255',
            'text' => 'required|string|max:255'
        ]);

        $this->message->create($request->all());

        return redirect()->back();
    }
}
