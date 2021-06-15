<?php
   if (isset($_POST['submit'])) {
$name= trim($_POST['name']);
$name= trim($_POST['email']);
$name= trim($_POST['subject']);
$name= trim($_POST['message']);
   

$myMail= "4deesproperties@gmail.com ";
$  = "from"/$email;
$message2 = "You have recieved a mail from". $name . ".\n\n" . $message;


mail($myMail,$subject,$messag2);
section("Location:index.html?mail.php");


   }

?>

<!-- registration/ validate email -->
<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];
if ($name === ''){
echo "Name cannot be empty.";
die();
}
if ($email === ''){
echo "Email cannot be empty.";
die();
} else {
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Email format invalid.";
die();
}
}
if ($subject === ''){
echo "Subject cannot be empty.";
die();
}
if ($message === ''){
echo "Message cannot be empty.";
die();
}
$content="From: $name \nEmail: $email \nMessage: $message";
$recipient = "youremail@here.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>
 <?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
header('Content-Type: application/json');
if ($name === ''){
print json_encode(array('message' => 'Name cannot be empty', 'code' => 0));
exit();
}
if ($email === ''){
print json_encode(array('message' => 'Email cannot be empty', 'code' => 0));
exit();
} else {
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
print json_encode(array('message' => 'Email format invalid.', 'code' => 0));
exit();
}
}
if ($subject === ''){
print json_encode(array('message' => 'Subject cannot be empty', 'code' => 0));
exit();
}
if ($message === ''){
print json_encode(array('message' => 'Message cannot be empty', 'code' => 0));
exit();
}
$content="From: $name \nEmail: $email \nMessage: $message";
$recipient = "youremail@here.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
print json_encode(array('message' => 'Email successfully sent!', 'code' => 1));
exit();
if(isset( $_POST['updates']))
$updates = $_POST['updates'];
?> 
<!-- registion form -->
<?php
if(isset( $_POST['Frist name']))
$name = $_POST['name'];
if(isset( $_POST['Last name']))
$name = $_POST['name'];
if(isset( $_POST['Occupation']))
$name = $_POST['occupation'];
if(isset( $_POST['Type of Apartment']))
$name = $_POST['type of apartment'];
if(isset( $_POST['Next of Kins']))
$name = $_POST['next of kins'];
if(isset( $_POST['Next of Kins Location']))
$name = $_POST['next of kins location'];
if(isset( $_POST['Next od Kins Phone Number']))
$name = $_POST['next of kins phonenumber'];
// contact detail for registration
if(isset( $_POST['Present Location']))
$message = $_POST['present location'];
if(isset( $_POST['
Location for house or land']))
$subject = $_POST['
Location For House or Land'];
if(isset( $_POST['
Country']))
$email = $_POST['
Country'];
if(isset( $_POST['
Code +']))
$email = $_POST['
Code +'];
if(isset( $_POST['Phone Number']))
$email = $_POST[' Phone Number'];
if(isset( $_POST['email']))
$email = $_POST['email'];


$content="From: $name \n Email: $email \n Message: $message";
$recipient = "youremail@here.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>
<?php
if(isset( $_POST['Frist name']))
$name = $_POST['name'];
if(isset( $_POST['Last name']))
$name = $_POST['name'];
if(isset( $_POST['Occupation']))
$name = $_POST['occupation'];
if(isset( $_POST['Type of Apartment']))
$name = $_POST['type of apartment'];
if(isset( $_POST['Next of Kins']))
$name = $_POST['next of kins'];
if(isset( $_POST['Next of Kins Location']))
$name = $_POST['next of kins location'];
if(isset( $_POST['Next od Kins Phone Number']))
$name = $_POST['next of kins phonenumber'];
// contact detail for registration
if(isset( $_POST['Present Location']))
$location = $_POST['present location'];
if(isset( $_POST['
Location for house or land']))
$location = $_POST['
Location For House or Land'];
if(isset( $_POST['
Country']))
$country = $_POST['
Country'];
if(isset( $_POST['
Code +']))
$code+ = $_POST['
Code +'];
if(isset( $_POST['Phone Number']))
$phonenumber = $_POST[' Phone Number'];
if(isset( $_POST['email']))
$email = $_POST['email'];


$if ($fristname === ''){
    echo "Name cannot be empty.";
    die();
    }
    if ($lastname === ''){
        echo "Name cannot be empty.";
        die();
        }
    if ($email === ''){
    echo "Email cannot be empty.";
    die();
    } else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Email format invalid.";
    die();
    }
    }
    if ($occupation === ''){
    echo "Occupation cannot be empty.";
    die();
    }
    if ($Apartment === ''){
    echo "Apartment cannot be empty.";
    die();
    }
    if ($ Next of Kins === ''){
        echo " Next of Kins cannot be empty.";
        die();
        }
        if ($NextofKinsLocation === ''){
            echo "Next of Kins Location cannot be empty.";
            die();
            }
            if ($Nextofkinsphonenumber === ''){
                echo " Next of Kins Phone Number cannot be empty.";
                die();
                }
                if ($PresentLocation === ''){
                    echo " 
                    Present Location cannot be empty.";
                    die();
                    }
                    if ($Locationforhouseorland === ''){
                        echo "Location For House or Land cannot be empty.";
                        die();
                        }
                        if ($Country === ''){
                            echo " Country cannot be empty.";
                            die();
                            }
                            if ($Code+ === ''){
                                echo " Code + cannot be empty.";
                                die();
                                }
                                if ($PhoneNumber === ''){
                                    echo "  Phone Number cannot be empty.";
                                    die();
                                    }
    $content="From: $name \nEmail: $email \nMessage: $message";
    $recipient = "youremail@here.com";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $content, $mailheader) or die("Error!");
    echo "Email sent!";
    if(isset( $_POST['term and condition']))
$updates = $_POST['term and condition'];
    ?>
