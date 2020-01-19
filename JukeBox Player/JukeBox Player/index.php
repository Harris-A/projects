
<?php

$servername="localhost";
$username="root";
$password="";
$dbnam="music_tbl";

//creates connection
$conn = mysqli_connect($servername,$username,$password, $dbnam);

//checks connection
	if (!$conn) {
			die("connection failed:".mysqli_connect_error());
	}
	
	//Selects all data from 'SQL' database music_tbl
	$sql="SELECT * FROM music_tbl";
	//shows the results gathered to the user on their page/screen
	$result=mysqli_query($conn, $sql);

    
?>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!--This is a title -->
	<title>HARRIS'S JUKEBOX</title>
	<!-- 'HARRIS'S JUKEBOX' gts displayed onto the browser -->

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
		background-image: url("Images/music.jpg");
		background-color: white;
}
    
    </style>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
                <a class="navbar-brand" href="index.php">HARRIS'S JUKEBOX</a>
    </nav>

    <!-- 'container' is just a container within the body tag, in which all the page Content will go into -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <!--Header-->
				<h1>HARRIS'S JUKEBOX</h1>
                <h1 class="lead">Click the 'Play' Link to play a song</p>
				
    <?php if (mysqli_num_rows($result) > 0) {
        // output data of each row
		//table style 
		echo "<table border='5' style='width:80%; margin:120;'>";
		//echos out the table headers to the browser according to how they are named.
		echo "<th>ID</th><th>album</th> <th>track Title</th> <th>Artist(s)</th> <th>album_cover</th> <th>Song_Link</th>";
		
			//Returns an associative array of string data within each row of the sql database
			//GETS song trackID to know what song gets played into the music player and for it to be displayed into the browser URL
			while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" .$row["trackID"] . "</td><td>" 
		. $row["album_name"]. "</td><td>" .$row ["track_name"] . "</td><td>" 
		. $row["singers"] . "</td><td><img src='Album_Covers/" .$row["album_cover_url"] .
		"' style='width:100px'></td><td>" .
		'<a href="play.php?' . $row['trackID']  . '">Play Track</a></td><td>';
		
		
		
		
		}
	   //closes table connection
	   echo"</table>";
    
	} else {
		//performs no results, if no results can be fetched by the sql query
        echo "0 results";
    }
	
	//closes sql connection if no results can be fetch by the sql query.
	mysqli_close($conn);
?>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- end of cotainer div -->
 

</body>

</html>
