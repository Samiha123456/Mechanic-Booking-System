<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
<meta name="viewport" content="width=device-width, initial-scale=1"/>

<title>Assignment3_16301076</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet"/>
    <style>
        .Header
  {
      color: white;
      text-align: center;
      
      width: 100%;
      height:35px;
      background-color:rgb(27, 12, 12);
      background-repeat:round;
      margin: 0px;
      padding-top: 50px;
      font-size: 15px;
    
     
                  
  }
        </style>

</head>
<body>
    <div class="nav">
    
        <ul>
        <li><a href="index.php" title="Click">Home</a> </li>
                <li><a href="user.php"title="Click">Book a Mechanic</a> </li>
                
                <li><a href="admin.php"title="Click">Admin Login</a> </li>
                <li><a href="contacts.php" title="Click">Contacts</a> </li>
        </ul>
        
    </div>
    <div class="Header">

		

    </div>
    <div class="banner">

    </div>
              
<div class="conc">
    <h1>Mobile Number: 01989*******</h1>
    <h1>Email Address: <a id="linkgoogle7"href="mailto:samihasultana100@gmail.com"> samihasultana100@gmail.com</a> </h1>
    
</div>

<div class="footer">

    <div>
        <h2>Page's Location</h2>
        <p id="path"></p>
        <script type="text/javascript">
            document.getElementById("path").innerHTML =
                "Page path is: " + window.location.pathname;
        </script>

        <p id="loc"></p>
        <script type="text/javascript">
            document.getElementById("loc").innerHTML =
                "The full URL of this page is:" + window.location.href;
        </script>
    </div>
    
    <div>
        <h2>Last modified</h2>

        <p id="demo"></p>
        <script type="text/javascript">
            var x = document.lastModified;
            document.getElementById("demo").innerHTML = x;
        </script>

    </div>
    <img src="logo.png" alt=""style="width:48px;height:48px;"/>
    <center>&copy;Samiha Sultana</center>

</div>



</body>
</html>