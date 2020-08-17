@component('mail::message')
# New Event Created

Hello {{$user["name"]}}.
New event has been created from your account..
Please visit the events website to see the post

@component('mail::button', ['url' => 'http://localhost:8000'])
Visit website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
