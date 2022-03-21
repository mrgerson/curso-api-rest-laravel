<!DOCTYPE html>
<html lang="es">

<head>
    <style type="text/css">
        #body {
            background: #fff;
            color: #444;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            margin: 10px auto 25px;
            padding: 20px 20px 10px 20px;
            max-width: 824px;
            -webkit-font-smoothing: subpixel-antialiased;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.13);
        }

        hr {
            border-top: 1px solid rgb(214, 214, 214);
        }

         table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        table.separado {
            border-collapse: separate;
        }
    </style>

</head>

<body>
    <h2>información del correo</h2>
    {{-- <ul>
        @foreach ($infoUsuario as $user)
            <li>{{ $user->name }}</li>
            <li>{{ $user->email }}</li>
            <li>{{ $user->email_verified_at }}</li>
        @endforeach
    </ul> --}}

    <table class="separado" border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Fecha verificación</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($infoUsuario as $user)
            <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->email_verified_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>


</body>

</html>
