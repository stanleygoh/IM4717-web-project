<!DOCTYPE html>
<html lang="en">

<head>
	<title>Huat Zai</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
</head>
<body>
    ShowTime<br>
	<?php
	@ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');
		  //check if connection to db is possible
			if (mysqli_connect_errno()) {
			   echo "Error: Could not connect to database.  Please try again later.";
			   exit;
			}
	$count =0;
	$movie1 = $_GET['movie'];
	$date = $_GET['date'];
    $date7 = new DateTime($date);
    $date = $date7->format('Y-m-d');
	$movie2 = array();
	$date1 = array();
	$movie ="select MovieAiringTime.Date, Movie.movieName from MovieAiringTime inner join Movie on MovieAiringTime.movieId = Movie.movieId  where MovieAiringTime.Date = '".$date."' and Movie.movieId = ".$movie1.";";
	$movie = $db->query($movie);
	if ($movie ->num_rows >0){
	while ($row = $movie->fetch_assoc()){
	$movie2[] = $row["movieName"];
	$date2 = new DateTime($row["Date"]);
	$date1[] = $date2->format('Y-m-d');
	}}
	else{
        echo"No match found";
        exit();
    }
		echo $movie2[0];
		echo "<table border ='1'>
		<tr>
		<th>Date</th>
		<th>Time</th>";
		$movie ="select MovieAiringTime.Time,MovieAiringTime.Date from MovieAiringTime inner join Movie on MovieAiringTime.movieId = Movie.movieId  where MovieAiringTime.Date = '".$date."' and Movie.movieId = ".$movie1.";";
		$movie = $db->query($movie);
		if ($movie ->num_rows >0){
		while ($row = $movie->fetch_assoc()){
		echo"<tr>";
		$date2 = new DateTime($row["Date"]);
		$date4 = $date2->format('Y-m-d');
		echo"<td>".$date4."</td>";
		$time2 = new DateTime($row["Time"]);
		$time1 = $time2->format('H.i');
		echo"<td>".$time1."</td>";
		echo"</tr>";
		}}
		else{
			echo"No match found";
			exit();
		}
		echo"</table>";
		$count=0;
	$db->close();
	?>
</body>
</html>