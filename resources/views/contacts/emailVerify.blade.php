<x-mail::message>
# Welcome,{{$user->name}}

Please, click on the link below for email verification .

@component('mail::button', ['url' => url('/user/verify/' .$user->verifyUser->token) ])
Verify Email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
