<!-- resources/views/contacto.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
</head>
<body>
    <h1>Formulario de Contacto</h1>

    <form action="{{ route('contacto.enviar') }}" method="POST">
        @csrf

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}">
        @if ($errors->has('nombre'))
            <div>{{ $errors->first('nombre') }}</div>
        @endif
        <br>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}">
        @if ($errors->has('email'))
            <div>{{ $errors->first('email') }}</div>
        @endif
        <br>

        <label>¿Desea recibir publicidad?</label><br>
        <input type="radio" id="publicidad_si" name="publicidad" value="1" {{ old('publicidad') == '1' ? 'checked' : '' }}>
        <label for="publicidad_si">Sí</label>
        
        <input type="radio" id="publicidad_no" name="publicidad" value="0" {{ old('publicidad') == '0' ? 'checked' : '' }}>
        <label for="publicidad_no">No</label>
        
        @if ($errors->has('publicidad'))
            <div>{{ $errors->first('publicidad') }}</div>
        @endif
        <br>

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje">{{ old('mensaje') }}</textarea>
        @if ($errors->has('mensaje'))
            <div>{{ $errors->first('mensaje') }}</div>
        @endif
        <br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
