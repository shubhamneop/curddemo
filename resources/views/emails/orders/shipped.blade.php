@component('mail::message')
 <p> Hi Rahul </p>
 <p> Your order number #15689 </p>
 <p>We would like to thank you for your purchase today.</p>
 <p> Please click on the link below to download your purchase</p>
 @component('mail::button', ['url' => 'localhost'])
View Order
@endcomponent
@component('mail::panel')
 The information contained in this website is for general information purposes only. The information is provided by Gamesstation, while we endeavour to keep the information up to date and correct, we make no representations or warranties of any kind. Any reliance you place on such information is strictly at your own risk.
@endcomponent
 Thanks </br> {{ config('app.name') }}
@endcomponent