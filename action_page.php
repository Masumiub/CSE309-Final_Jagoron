<?php
//var setting
$subject = $_POST['subject'];
$email = $_POST['email'];
$message = $_POST['message'];

//check input fields
if (empty($subject) || empty($email) || empty($message) ){
    echo "Please fill all the fields";
}
else{
    mail("oic_opscr@police.gov.bd", "Jogoron BD", $message, "From: <$email>");
    echo "<script type='text/javascript'>alert('Your Message sent Successfully');
    window.history.go(-1);
    </script>";
};
?>