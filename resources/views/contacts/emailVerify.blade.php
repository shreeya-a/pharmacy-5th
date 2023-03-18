<x-mail::message>
# Welcome,{{$user->name}}

Please, click on the link below for email verification .

{{-- <x-mail::button :url="$url">
$slot
</x-mail::button> --}}
{{-- @component('mail::button', ['url' => '{{ $user->verifyUser->url')
Visit Our Website
@endcomponent --}}
@component('mail::button', ['url' => url('/user/verify/' .$user->verifyUser->token) ])
Verify Email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
