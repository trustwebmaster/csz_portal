@component('mail::message')
# Please verify Your Email To Continue The Registration Processs
 

Your email

@component('mail::button', ['url' => route('custom-verify') ])
Click Here To Verify Email
@endcomponent

Thanks,<br>
CSZ Membership 
@endcomponent
