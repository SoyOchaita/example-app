@component('mail::message')
# {{ __('messages.subject', ['name' => $nombre]) }}

{{ __('messages.contact_received') }}

**{{ __('messages.name_label') }}**: {{ $nombre }}  
**{{ __('messages.email_label') }}**: {{ $email }}  
**{{ __('messages.advertising_label') }}**: {{ $publicidad }}  

**{{ __('messages.message_label') }}**:  
{{ $mensaje }}

{{ __('messages.thank_you', ['name' => $nombre]) }},  
{{ config('app.name') }}
@endcomponent
