@component('mail::message')
# Your prod-use account confirmation

Hi {{ $user->name }},

Firstly, we would like to welcome you to prod-use. Your account is ready to use straight away with no waiting what so ever!

If you have any problems or questions, feel free to ask our amazing support team who are happy to help as much as they can.

@component('mail::button', ['url' => route('dashboard')])
Use Prod-use
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
