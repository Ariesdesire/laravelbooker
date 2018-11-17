@component('mail::message')
# new Website Message

The main Selling point is HTML email marketing.

@component('mail::panel')
{{ $message}}
@endcomponent

@component('mail::panel')
{{ $phone}} {{$email}}
@endcomponent

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
