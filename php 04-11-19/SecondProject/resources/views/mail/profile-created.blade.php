@component('mail::message')
# Introduction
# New Profile!: {{  $profile->name }}
{{ $profile->description }}

The body of your message.

@component('mail::button', ['url' => url('/projects/'.$profile->id)])
view Profile
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
