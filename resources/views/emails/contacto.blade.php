@component('mail::message')
# {{ __('messages.subject') }}

{{ __('messages.contact_received') }}

**{{ __('messages.name') }}**: {{ $nombre }}  
**{{ __('messages.email') }}**: {{ $email }}  
**{{ __('messages.advertising') }}**: {{ $publicidad }}  

**{{ __('messages.message') }}**:  
{{ $mensaje }}

{{ __('messages.thanks') }},  
{{ config('app.name') }}
@endcomponent
