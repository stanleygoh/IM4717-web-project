<!DOCTYPE html>
<html lang="en">

<head>
	<title>Huat Zai</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
</head>
<body>
    ShowTime_genre<br>
	<?php
	@ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');
		  //check if connection to db is possible
			if (mysqli_connect_errno()) {
			   echo "Error: Could not connect to database.  Please try again later.";
			   exit;
			}
	$count =0;
	$genre = $_GET['genre'];
	$genre1 = array();
	$movie ='select Genre.genre, MovieAiringTime.Date from MovieAiringTime inner join Movie on MovieAiringTime.movieID = Movie.movieID inner join Movie_genre on Movie.movieID = Movie_genre.movieID inner join Genre on Movie_genre.genreID = Genre.genreID where Genre.genreID ='.$genre.';';
	$movie = $db->query($movie);
	if ($movie ->num_rows >0){
	while ($row = $movie->fetch_assoc()){
	$genre1 = $row["genre"];
	$date2 = new DateTime($row["Date"]);
	$date1[] = $date2->format('Y-m-d');
	
	}}
	$date = $_GET['date'];
	foreach ($date1 as $date3){
        if($date3 == $date){
			$count+=1;
		}
	}
	if($count>=1){
		echo $genre1;
		echo "<table border ='1'>
		<tr>
		<th>Movie Name</th>
		<th>Time</th>";
		$movie ='select Movie.movieName, MovieAiringTime.Time from MovieAiringTime inner join Movie on MovieAiringTime.movieID = Movie.movieID inner join Movie_genre on Movie.movieID = Movie_genre.movieID inner join Genre on Movie_genre.genreID = Genre.genreID where Genre.genreID ='.$genre.';';
		$movie = $db->query($movie);
		if ($movie ->num_rows >0){
		while ($row = $movie->fetch_assoc()){
		$movie1 = $row["movieName"];
		echo"<tr>";
		echo"<td>".$movie1."</td>";
		$time2 = new DateTime($row["Time"]);
		$time1 = $time2->format('H.i');
		echo"<td>".$time1."</td>";
		echo"</tr>";
		}}
		echo"</table>";
		$count=0;
	}
	else{
		echo "No match found!";
        $count=0;
	}
	?>
</body>
</html>