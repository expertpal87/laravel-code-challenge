<!DOCTYPE html>
<html>
<head>
    <title>starzly.com</title>
</head>
<body>
    <h1>{{ $details['title'] }}</h1>
    <p>{{ $details['body'] }}</p>
    <?php $email = encrypt($details['email']) ?>
   <br><a href="{{ url('contact-email-varified/'.$email) }}">Activate</a>
    <p>Thank you</p>
	

</body>
</html>