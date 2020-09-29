@component('mail::message')
# Introduction

This mail is send by mailtrap.<br>

<h1>Hah ha this mail is send by my way!!<h1>
<h1>This mail goes to mailtrap<h1>


@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
