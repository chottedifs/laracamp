@component('mail::message')
# Your transaction has been confirmed !

Hi, {{ $checkout->User->name }}
<br>
your transaction has been confirmed, now you can enjoys benefits of <b>{{ $checkout->Camp->title }}</b> camp.

@component('mail::button', ['url' => route('user.dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
