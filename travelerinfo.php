
<?php
 include('traveler.php');
 $user = 'root';
 $pass = '';
 $db = 'informationsystem';
 $con = mysqli_connect('localhost', $user, $pass, $db) or die('unable to connect');
if(isset($_POST['submit'])){
 $username =mysqli_real_escape_string($conn, $_POST['usern']);
 $fname =mysqli_real_escape_string($conn, $_POST['firstname']);
 $mname =mysqli_real_escape_string($conn, $_POST['middlename']);
 $lname = mysqli_real_escape_string($conn,$_POST['lastname']);
 $mobileno =mysqli_real_escape_string($conn, $_POST['mobileno']);
 $house = mysqli_real_escape_string($conn,$_POST['house']);
 $street =mysqli_real_escape_string($conn, $_POST['street']);
 $area =mysqli_real_escape_string($conn, $_POST['area']);
 $thana =mysqli_real_escape_string($conn, $_POST['thana']);
 $district =mysqli_real_escape_string($conn, $_POST['district']);
 $email = mysqli_real_escape_string($conn,$_POST['email']);
 $birthdate =mysqli_real_escape_string($conn, $_POST['birthdate']);
 $gender = mysqli_real_escape_string($conn,$_POST['gender']);
 $password =mysqli_real_escape_string($conn, $_POST['Password']);
 //Error handelers
 //check for empty fields
 //if(empty($user)||empty($firstname)||empty($middlename)||empty($lastname)||empty($house)||empty($street)||empty($area)||empty($thana)||empty($district)||empty($email)||empty($birthdate)||empty($gender)||empty($password))
   //{header("Location:../form.php?form=empty");
   //exit();
 //}else{
   //chceck input charecter are valid
   //if(!preg_match("/^[a-zA-Z]",$firstname) ||!preg_match("/^[a-zA-Z]",$lastname)|| !preg_match("/^[a-zA-Z]",$middlename)){
     //header("Location:../form.php?form=invalid");
     //exit();
   //}else{
     //check if email is valid
     //if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    //{
       //header("Location:../form.php?form=invalid email");
       //exit();
     //}else {
       //$sql = "SELECT * FROM travelerlogin WHERE user_name=$username";
       //$result= mysqli_query($conn,$sql);
       //$resultCheck=mysqli_num_rows($conn,$result);
       //if($resultCheck >0)
       //{
        // header("Location:../form.php?form=userstaken");
        // exit();
      // }else{
         //hashing the password
         //$hashesPwd = password_hash($password,PASSWORD_DEFAULT);
         //insert the user into database
         $sql = "INSERT INTO  travelerinfo() values('$username', '$firstname','$middlename','$lastname','$house','$street','$area','$thana','$district','$email','$birthdate','$gender','$password','$mobileno');";
         mysqli_query($conn,$sql);
         if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
      } else {
          echo "Error: " . $sql . "<br>" . $con->error;
      }

        //if ($con->query($sql2) === TRUE) {
        //  echo "New record created successfully";
    //  } else {
        //  echo "Error: " . $sql . "<br>" . $con->error;
      //}

      $con->close();
         header("Location:../form.php?form=userstaken");
         exit();
       }
     }
   }
 }

}else{
 header("Location:../form.php");
 exit();
}

?>
