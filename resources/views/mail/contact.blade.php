<h3>Simple Energy Contact Form</h3>
<p>name: {{ $name ?? '' }}</p>
<p>email: {{ $email ?? '' }}</p>
<p>subject: {{ $subject ?? '' }}</p>
<p>message: {!! $contact_message ?? '' !!}</p>
