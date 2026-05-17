<!DOCTYPE html>
<html lang="en">
<?php

   $connection = mysqli_connect('localhost','root','', 'book_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $leaving = $_POST['leaving'];
      $arrivals = $_POST['arrivals'];

      $request = " insert into book_form(name, email, phone, address, location, guests,leaving, arrivals) values('$name','$email','$phone','$address','$location','$guests',,'$leaving','$arrivals') ";
      mysqli_query($connection, $request);
      session_start();
      $_SESSION['success_message'] = "room booked successfully.";
      header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>
</html>
