<!DOCTYPE html>
<html lang="en">

<head>
	<title>Huat Zai</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
</head>
<body>
    Movie Details<br>
    <?php
    	@ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');
        //check if connection to db is possible
          if (mysqli_connect_errno()) {
             echo "Error: Could not connect to database.  Please try again later.";
             exit;
          }
    $name = array();
    $rating =  array();
    $stars =  array();
    $details =  array();
    $duration = array();
    $movie1 = $_GET['movie'];
    $movie = 'select movieName, movieRating, movieStars, movieDetails, movieDuration from Movie where movieID = '.$movie1.";";
    $movie = $db->query($movie);   
    if ($movie ->num_rows >0){
    while ($row = $movie->fetch_assoc()){
    $name[] = $row["movieName"];
    $rating[] = $row["movieRating"];
    $stars[] = $row["movieStars"];
    $details[] = $row["movieDetails"];
    $duration[] = $row["movieDuration"];
    }}
    echo $name[0]."<br>";
    echo $rating[0]."<br>";
    echo $stars[0]."<br>";
    echo $details[0]."<br>";
    echo $duration[0]."<br>";

    $count =0;
	$movie2 = array();
	$date1 = array();
	$movie ='select MovieAiringTime.Date, Movie.movieName from MovieAiringTime inner join Movie on MovieAiringTime.movieId = Movie.movieId  where Movie.movieId = '.$movie1.';';
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
		$movie ='select MovieAiringTime.Time,MovieAiringTime.Date from MovieAiringTime inner join Movie on MovieAiringTime.movieId = Movie.movieId  where Movie.movieId = '.$movie1.';';
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
		echo"</table>";
		$count=0;
		$db->close();
    ?>
</body>
</html>