<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sign UP</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Ubuntu&display=swap" rel="stylesheet">
    </head>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
      $email=$_POST['mail'];
      $pass=$_POST['pass'];
      $username=$_POST['username'];



       $servername = "localhost";
       $username1 = "root";
       $password = "";
       $dbname = "shimt";
       
       // Create connection
       $conn = mysqli_connect($servername, $username1, $password,$dbname);
       // Check connection
       /*if (!$conn) {
         die("Connection failed: " . mysqli_connect_error());
       }
       else{
        echo "success <br>";
       }
       */
      /*

      //Create table
       $sql = /*"CREATE TABLE MyGuests (
        email varchar(40) not null,
        pass varchar(10) not null
        */
        /*
        "INSERT INTO MyGuests
        VALUES ('john@example.com','kkkkkk')";

       if ($conn->query($sql) === TRUE) {
         echo "New record created successfully";
       } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
       }
       $conn->close();
      */
    
      /*if ($conn->query($sql) === TRUE) {
        echo "Table MyGuest created successfully";
      } else {
        echo "Error creating table: " . $conn->error;
      }
      */
       
       //Create database
       /*
       $sql = "CREATE DATABASE shimt";
       if (mysqli_query($conn, $sql)) {
         echo "Database created successfully";
       } else {
         echo "Error creating database: " . mysqli_error($conn);
       }
      */



      $sql= "INSERT INTO MyGuests
        VALUES ('$email','$pass','$username')";

      if ($conn->query($sql) === TRUE) {
       /*  echo "New record created successfully";
       } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
       }
       $conn->close();*/
   
      echo '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
      </svg>
      <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <div>
        "Thank You!!!! Your Username: '.$username.' ,email: '.$email.' and password have been saved "
        </div>
      </div>' ;
    }
    else {
        if($conn->error===("Duplicate entry '$username' for key 'PRIMARY'"))
        {
            $hell = "Username not available. try another!!!!";
        }
        echo '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
      </symbol>
    </svg>
        <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
          "Oops!!!Error:'.$hell.'" 
        </div>
      </div>';
    }
    }
      ?>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
         
        <div class="container" style="padding-top:2%;">
        <center><h1>Sign UP</h1> </center>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

            <div class="mb-3 row" style="margin-left:2%; margin-right:2%;">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="text" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
       
            <div class="mb-3 row" style="margin-left:2%; margin-right:2%;">
              <label for="exampleInputEmail1" class="form-label">Username</label>
              <input type="text" name="username" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" required>
            </div>
            
        
            <div class="mb-3 row" style="margin-left:2%; margin-right:2%;">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="pass" class="form-control" id="exampleInputPassword1" required>
            </div>


            <div class="input-group mb-3 col-sm" style="margin-left:2%; margin-right:2%;">
  <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Terms and conditions</button>
  <ul class="dropdown-menu">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </ul>
</div>

            <div class="mb-3 form-check g-3" style="margin-left:2%; margin-top:5%">
              <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
              <label class="form-check-label" for="exampleCheck1">I agree to terms n conditions</label>
            </div>
            
           <center> <button type="submit" class="btn btn-primary">Submit</button></center>
          </form>
         
        </div>
        <script src="" async defer></script>
    </body>
</html>