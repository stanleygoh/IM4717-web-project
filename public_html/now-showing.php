<!DOCTYPE html>
<html lang="en">

<head>
	<title>Huat Zai</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
</head>
<body>
    Now Showing<br>
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
    $movie = 'select movieName, movieRating, movieStars, movieDetails, movieDuration from Movie;';
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
    echo $duration[0]."<br><br><br>";
    
    echo $name[1]."<br>";
    echo $rating[1]."<br>";
    echo $stars[1]."<br>";
    echo $details[1]."<br>";
    echo $duration[1]."<br><br><br>";

    echo $name[2]."<br>";
    echo $rating[2]."<br>";
    echo $stars[2]."<br>";
    echo $details[2]."<br>";
    echo $duration[2]."<br><br><br>";
    
    echo $name[3]."<br>";
    echo $rating[3]."<br>";
    echo $stars[3]."<br>";
    echo $details[3]."<br>";
    echo $duration[3]."<br><br><br>";

    echo $name[4]."<br>";
    echo $rating[4]."<br>";
    echo $stars[4]."<br>";
    echo $details[4]."<br>";
    echo $duration[4]."<br><br><br>";

    echo $name[5]."<br>";
    echo $rating[5]."<br>";
    echo $stars[5]."<br>";
    echo $details[5]."<br>";
    echo $duration[5]."<br><br><br>";
    ?>
</body>
</html>