@component('mail::message')
# Hello!

You are receiving this email because we received a password reset request for your account.

Your Password Reset code is : {{$activationCode}}

@component('mail::button', ['url' => ''])
Reset Password
@endcomponent

This password reset link will expire in 60 minutes.

If you did not request a password reset, no further action is required.

Regards,<br>
{{ config('app.name') }}

<hr>
<font size="2">If you’re having trouble clicking the "Reset Password" button, copy and paste the URL below into your web browser: <a href=""></a></font>
@endcomponent
