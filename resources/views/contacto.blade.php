<!-- resources/views/contacto.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 50px auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px #0000001f;
        }
        h1 {
            color: #333;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .success-message {
            color: green;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Formulario de Contacto</h1>

        <!-- Mensaje de éxito al enviar el formulario -->
        @if (session('success'))
            <p class="success-message">{{ session('success') }}</p>
        @endif

        <!-- Formulario de contacto principal -->
        <form action="{{ route('contacto.store') }}" method="POST">
            @csrf

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}">
            @if ($errors->has('nombre'))
                <div style="color: red;">{{ $errors->first('nombre') }}</div>
            @endif

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}">
            @if ($errors->has('email'))
                <div style="color: red;">{{ $errors->first('email') }}</div>
            @endif

            <label for="publicidad">¿Desea recibir publicidad?</label><br>
            <input type="radio" id="publicidad_si" name="publicidad" value="1" {{ old('publicidad') == '1' ? 'checked' : '' }}>
            <label for="publicidad_si">Sí</label>
            
            <input type="radio" id="publicidad_no" name="publicidad" value="0" {{ old('publicidad') == '0' ? 'checked' : '' }}>
            <label for="publicidad_no">No</label>
            @if ($errors->has('publicidad'))
                <div style="color: red;">{{ $errors->first('publicidad') }}</div>
            @endif

            <br><br>

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="4">{{ old('mensaje') }}</textarea>
            @if ($errors->has('mensaje'))
                <div style="color: red;">{{ $errors->first('mensaje') }}</div>
            @endif

            <br><br>

            <button type="submit">Enviar Mensaje</button>
        </form>
    </div>
</body>
</html>
