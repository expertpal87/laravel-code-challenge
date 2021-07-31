<!DOCTYPE html>
<html>
<head>
    <title>starzly.com</title>
</head>
<body>
    <h1><?php echo e($details['title']); ?></h1>
    <p><?php echo e($details['body']); ?></p>
    <?php $email = encrypt($details['email']) ?>
   <br><a href="<?php echo e(url('contact-email-varified/'.$email)); ?>">Activate</a>
    <p>Thank you</p>
	

</body>
</html><?php /**PATH /opt/lampp/htdocs/l-test/resources/views/emails/emailvarifiedmail.blade.php ENDPATH**/ ?>