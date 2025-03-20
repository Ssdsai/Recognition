<?php
     //if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']))
     
    $name= $_POST['name'];
    $age= $_POST['age'];
    $gender= $_POST['gender'];
    $phone= $_POST['phone'];
    $email= $_POST['email'];
    $concert= $_POST['concert'];

    $conn= new mysqli('localhost:3307', 'root', '', 'concerts.recognition_db');

    if($conn->connect_error)
    {
        die('Connection Failed: '.$conn->connect_error);
    }
    else
    {
        $stmt = $conn->prepare("insert into bookings (name, age, gender, phone, email, concert)
        values (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sissss",$name, $age, $gender, $phone, $email, $concert);
        $stmt->execute();
        //echo "Booking Successfully....";
        include('Images/booking_successful.php');
        $stmt->close();
        $conn->close();
    }
?>