<!DOCTYPE html>
<html>
<head>
	<title>My WEbsight</title>
	<meta charset="UTF-8">
  <link type="text/css" rel="stylesheet" href="fonts/font-awesome.min.css">
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
	<link href="ad.css" rel="stylesheet" type="text/css">
	<link href="normalize.css" rel="stylesheet" type="text/css">
   <script type="text/javascript">
   </script>
	</head>

<body id="main_body">
    <nav class="nav">
        <ul class="links">

            <li><a href="index.php">Home</a></li>
            <li><a href="Services.php">Services</a></li>
            <li><a href="roomtype.php">Consultants</a></li>
            <li><a href="forms.php">Forms&print</a></li>
            <li><a href="Contact.php">Contact Us</a></li>
        </ul>
    </nav>
    <div class="container">
        <form class="form" method="post" action="traveler.php">
            <h3 class="main-head">Traveler Information Form</h3><br>
            User Name:
            <input type="text" name="usern">
            First name:
             <input type="text" name="firstname">
            Middle name:
              <input type="text" name="middlename">
            Last name:
             <input type="text" name="lastname"><br>
            Date Of Birth:
             <input type="date" name="birthdate">
            Mobile No:
            <input type="text" name="mobileno"><br>
            PassWord:
            <input type="text" name="password">
            Email :
            <input type="text" name="email">
            Gender:
            <input type="text" name="gender">
            <div class ="location">
              <h4>Address</h4>
              House No:
              <input type="text" name="house">
              Street No:
              <input type="text" name="street">
              Area :
              <input type="text" name="area">
              Police Station :
              <input type="text" name="thana">
              District:
              <input type="text" name="district">
              <button type='submit' name='submit'>Sign Up</button>
            </form>
           </div>
         </div>

				 
    <!-- javascripts -->
    <script type="text/javascript" src="javascripts/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="javascripts/popper.min.js"></script>
    <script type="text/javascript" src="javascripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="selector.js"></script>
</body>

</html>
