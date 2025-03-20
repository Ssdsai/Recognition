<?php
     //if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']))
     


    $conn= new mysqli('localhost', 'root', '', 'recognition_db');

    if(isset($_POST['submit']))
    {
        $email= $_POST['email'];
        $concert= $_POST['concert'];

        if(filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $qy ="select * from bookings where email='$email' concert='$concert'";
            $result = mysqli_connect($conn,$qy);
            $num = mysqli_num_rows($result);
            if($num >=1)
            {
                echo "Email Already Sent";
            }
            else
            {
                $q = "insert into email(email,concert) value ($email,$concert)";
                $add = mysqli_query($conn,$q);

                if($add)
                {
                    require 'PHPMailer/'
                }
            }
        }
        else
        {
            echo "Invalid Email Entered";
        }
    }
?>