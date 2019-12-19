@component('mail::message')
 Hi **{{ $user->name}}**  
 <h3>We are happy to see you at Boilerplate,</h3><br>
 To log in when visiting our site just click Login or My Account at the top of every page, and
then enter your email address and password.
@component('mail::button', ['url' => 'www.google.com'])
Login
@endcomponent

@component('mail::panel')
<p>When you log in to your account, you will be able to do the following:</p>
<ul>
 <li>Proceed through checkout faster when making a purchase Check the status of orders</li>
<li>View past orders Make changes to your account information</li>
<li>Change your password </li>
</ul>

@endcomponent
Thanks,<br>
Laravel Boilerplate<br><br>
@component('mail::subcopy')
If you have any questions, please feel free to contact us at info@boilerplate.com or by phone at +91 9763362750
@endcomponent

@endcomponent
