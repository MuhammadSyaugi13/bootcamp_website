@component('mail::message')
# Register Camp: {{$checkout->Camp->title}}

Hi, {{$checkout->User->name}}
<br>
Thank you for your register on <b>{{$checkout->Camp->title}}</b>, please see payment instruction the button below.


@component('mail::button', ['url' => route('dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
