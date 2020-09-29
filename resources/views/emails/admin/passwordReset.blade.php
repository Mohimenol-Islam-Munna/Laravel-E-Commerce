@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
	<a href="{{ route('admin.password.reset') }}">Rest Admin Password</a>
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
