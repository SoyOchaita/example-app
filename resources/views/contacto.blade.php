<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('messages.subject', ['name' => 'Contacto']) }}</title>
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
        textarea,
        select {
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
        .btn-secondary {
            background-color: #dc3545;
        }
        .btn-secondary:hover {
            background-color: #c82333;
        }
        .success-message {
            color: green;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ __('messages.subject', ['name' => 'Contacto']) }}</h1>

        @if (session('success'))
            <p class="success-message">{{ __('messages.success_message') }}</p>
        @endif

        <form action="{{ route('contacto.store') }}" method="POST">
            @csrf

            <label for="nombre">{{ __('messages.name_label') }}:</label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}">
            @error('nombre')
                <div style="color: red;">{{ $message }}</div>
            @enderror

            <label for="email">{{ __('messages.email_label') }}:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}">
            @error('email')
                <div style="color: red;">{{ $message }}</div>
            @enderror

            <label>{{ __('messages.advertising_label') }}</label><br>
            <input type="radio" id="publicidad_si" name="publicidad" value="1" {{ old('publicidad') == '1' ? 'checked' : '' }}>
            <label for="publicidad_si">Sí</label>
            <input type="radio" id="publicidad_no" name="publicidad" value="0" {{ old('publicidad') == '0' ? 'checked' : '' }}>
            <label for="publicidad_no">No</label>
            @error('publicidad')
                <div style="color: red;">{{ $message }}</div>
            @enderror

            <br><br>

            <label for="mensaje">{{ __('messages.message_label') }}:</label>
            <textarea id="mensaje" name="mensaje" rows="4">{{ old('mensaje') }}</textarea>
            @error('mensaje')
                <div style="color: red;">{{ $message }}</div>
            @enderror

            <br><br>

            <button type="submit">{{ __('messages.submit_button') }}</button>
            <a href="{{ route('contactos.show') }}" class="btn-secondary" style="padding: 10px 15px; text-decoration: none; color: white; border-radius: 5px;">Ver Contactos</a>
            <a href="{{ url()->previous() }}" class="btn-secondary" style="padding: 10px 15px; text-decoration: none; color: white; border-radius: 5px;">Regresar</a>
        </form>
    </div>
</body>
</html>
