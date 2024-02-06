<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Andersen php technical task</title>

        <style>
            .center {
                width: fit-content;
                margin: 50vh auto 0;
                transform: translateY(-50%);
            }

            .error {
                color: #ef4444;
            }
        </style>
    </head>
    <body>
        <form class="center" method="POST" action={{ route('message.store') }}>
            @csrf

            <table>
                <tr>
                    <td>
                        <label for="name">Имя</label>
                    </td>
                    <td>
                        <input type="text" name="name" id="name">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Почта</label>
                    </td>
                    <td>
                        <input type="text" name="email" id="email">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="text">Текст</label>
                    </td>
                    <td>
                        <input type="text" name="text" id="text">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="submit-button" type="submit" value="Сохранить"/>
                    </td>
                </tr>
            </table>

            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="error">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            @foreach($messages as $message)
                <tr>
                    <td>{{ $message->name }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->text }}</td>
                </tr>

                <br>
            @endforeach
        </form>
    </body>
</html>
