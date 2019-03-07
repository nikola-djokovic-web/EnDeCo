@component('mail::message')
From: {{$contact->email}}

{{$contact->comment}}



Sent by: {{$contact->name}}<br>
Phone: {{$contact->phone}}<br><br>


{{ config('app.name') }}
@endcomponent
