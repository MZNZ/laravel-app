@component('mail::message')
# Thank you for you message
<div><strong>Your Name is: </strong>{{$data['name']}}</div>
<div><strong>Your Email is: </strong>{{$data['email']}}</div>
<div><strong>Your Message is: </strong>{{$data['message']}}</div>
@endcomponent
