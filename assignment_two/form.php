!DOCTYPE html>
<html lang="en">
<head>
<!-- official website designed  by kubwimana aimee diane_222002776-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friends Company Ltd - About us</title>
    <style>
        /* Basic styling for demonstration purposes */
        body {
            font-family: Arial, sans-serif;
            margin: 10;
            padding: 10;
        }
.navigation a:link{
    color: white;
    background-color:none;
    padding: 5px;
    margin: 5px;
      border-radius: 15px;

}
.navigation a:visited{
    color: white;
    background-color:none;
     padding: 5px;
     margin: 5px;
       border-radius: 15px;
}
.navigation a:hover{
    color: white;
    background-color: none;
     padding: 5px;
     margin: 5px;
     border-radius: 15px;
}
 .navigation a:active{
    color: white;
    background-color: none;
     padding: 5px;
     margin: 5px;
       border-radius: 15px;
}

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: black;
            border-bottom: 1px solid red;
        }
        .logo {
            width: 60px; /* Adjust logo size */
            height: auto;
        }
        .navigation {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align:none;
            flex-grow: 2; 
        }
        .navigation li {
            display: inline-block;
            margin-right: 5px;
            padding: 5px;
        }
        .navigation li:last-child {
            margin-right: 0;
        }
        .navigation li a {
            text-decoration: none;
            color: #333;
        }
        .p1{
            font-size: 20px;
            color: black;
            text-align: center;

        }
        .container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
      }
    </style>
     <link rel="stylesheet" type="text/css" href="2style.css">
</head>
<body>
<div class="header">
    <img class="logo" src="log.png" alt="Logo">
    <ul class="navigation">
      <li><a href="home page.html">Home</a></li>
        <li><a href="aboutus.html">About Us</a></li>
        <li><a href="contactus.html">Contact</a></li>
        <li><a href="form.php">Form</a></li>
        <li><a href="table.php">table</a></li>
        <li><a href="list.html">Lists</a></li>
        <li><a href="image1.html">Image</a></li>
        <li><a href="video.html">Video</a></li>
        <li><a href="audio.html">Audio</a></li>
        <li><a href="articles.html">Article</a></li>
        <li class="dropdown">
    <a href="#">Setting</a>
    <div class="dropdown-contents">
        <a href="logout.php">Logout</a>
        <a href="profileform.php">Profile</a>   
    </div>
</li>
</ul>
 <div><form action="search.php" method="GET">
        <input type="text" name="query" placeholder="search here!!">&nbsp;<button style="background-color:white;border-radius: 15px;">search</button>
    </form></div> </div>   
</div>
<center><h2><i>choose better form you prefer to fill</i></h2>
<div style="margin-top: 100px;color: white;"><button><a href="profileform.php">Profile</a></button>
	<button><a href="likeform.php">Like</a></button>
	<button><a href="unlikeform.php">Unlike</a></button>
	<button><a href="commentform.php">Comment</a></button>
	<button><a href="roleform.php">Role</a></button>
	<button><a href="friendform.php">Friend</a></button>
	<button><a href="multimedia.php">Multimedia</a></button>
	<button><a href="articleform.php">Article</a></button>
</div></center>
<div><footer style="background-color:black;text-align: center;width:100%;height:auto; color: white;font-size: 25px;margin-top: 100px;"><p>&copy Designed by Group 8  YEAR TWO BIT GROUP A &reg 2024</p></footer></div>
</body>
</html>