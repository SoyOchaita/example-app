@component('mail::message')
# Nuevo Mensaje de Contacto

Has recibido un nuevo mensaje de contacto de la tienda.

**Nombre**: {{ $nombre }}  
**Correo Electrónico**: {{ $email }}  
**Desea recibir publicidad**: {{ $publicidad }}  

**Mensaje**:  
{{ $mensaje }}

Gracias,<br>
{{ config('app.name') }}
@endcomponent
