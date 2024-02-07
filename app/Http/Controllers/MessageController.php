<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Models\Message;

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

    public function store(MessageRequest $request)
    {
        $this->message->create($request->all());

        return redirect()->back();
    }
}
