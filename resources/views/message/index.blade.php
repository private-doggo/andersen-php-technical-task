<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ asset('styles/message/index.css') }}" rel="stylesheet">
        <title>Andersen php technical task</title>
    </head>
    <body>
        <div class="container">
            <form
                style="width: fit-content; margin: 100px auto 0"
                method="POST"
                action={{ route('message.store') }}
            >
                @csrf

                <label for="name">Name</label>
                <input type="text" name="name" id="name">

                <label for="email">Email</label>
                <input type="text" name="email" id="email">

                <label for="text">Message</label>
                <input type="text" name="text" id="text">

                <input
                    onclick="this.form.submit(); this.disabled = true"
                    type="submit"
                    value="Save"
                />

                <div class="errors">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            </form>

            @if(count($messages) > 0)
                <table id="saves">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Creation date</th>
                    </tr>

                    @foreach($messages as $message)
                        <tr>
                            <td>{{ $message->name }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->text }}</td>
                            <td>{{ $message->created_at }}</td>
                        </tr>
                    @endforeach
                </table>
            @endif
        </div>
    </body>
</html>
