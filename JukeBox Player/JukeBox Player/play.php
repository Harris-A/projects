<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HARRIS'S JUKEBOX</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
		background-image: url("Images/music.jpg");
		background-color: white;
    }
    </style>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <!--creates a link for the user to click on in order to get access to the homepage-->
				<a class="navbar-brand" href="index.php">HARRIS'S JUKEBOX</a>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <!--creates header-->
				<h1>HARRIS'S JUKEBOX</h1>
				</div>
	<div>
<?php

$servername="localhost";
$username="root";
$password="";
$dbnam="music_tbl";

//creates connection
$conn = mysqli_connect($servername,$username,$password, $dbnam);

//checks connection, If connection is invalid then the connection fails 
	if (!$conn) {
			die("connection failed:".mysqli_connect_error());
	}

	//setting '$track' as the variable
	$track = key($_GET);
	
		//SQL query to select all from databse, but the track id has to be equal to the particular track in which the user has clicked onto
		$sql = "SELECT * FROM music_tbl WHERE trackID='$track'";
		$result = mysqli_query($conn, $sql);
		
		while($row = mysqli_fetch_assoc($result)) {
		echo
		
		//Returns 'Album cover'
		//tells the user what track they are listening to by fetching track name from database
		//displays audio controls onto page whilse using the GET method in order to get the song file from the database in order for the song to be played onto the audio player
		
		
		
		"<div id='cover'><img src='Album_Covers/" . $row["album_cover_url"].
		"' style='width:100px'></div><br></br>
		<p>You are listening to " . $row['track_name']  . "</p><br></br>
		<audio controls autoplay src='Music/" . $row['song_file_link']  .   "'type='audio/mpeg''>Your browser does not support the audio element</audio></div>"; 
		}
		
		
	
	
	
?>
</div>
<div id="playlist">
	<!-- creates a html button with a link to go back to the jukebox homepage-->
	<a href="index.php"><button type="button">Go Back To Playlist</button></a>
	</div>
 

</body>
</html>