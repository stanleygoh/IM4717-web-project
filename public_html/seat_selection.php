<!DOCTYPE html>
<html lang="en">

<head>
	<title>Huat Zai</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
</head>
<body>
    Seat Selection<br>
    <?php
      @ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');
      //check if connection to db is possible
        if (mysqli_connect_errno()) {
           echo "Error: Could not connect to database.  Please try again later.";
           exit;
        }
    $a='0';
    $movie = $_GET['movie'];
    $movie2 = array();
    $date1 = array();
    $time1 = array();
    $threater = array();
    $movie1 = "SELECT MovieAiringTime.Time,MovieAiringTime.Date, Movie.movieName,MovieAiringTime.theatreID from MovieAiringTime Inner Join Movie ON MovieAiringTime.movieID = Movie.movieID where Movie.movieID =".$movie.";";
    $movie1 = $db->query($movie1);
    if ($movie1 ->num_rows >0){
    while ($row = $movie1->fetch_assoc()){
    $movie2[] = $row["movieName"];
    $date2 = new DateTime($row["Date"]);
    $date1[] = $date2->format('Y-m-d');
    $time2 = new DateTime($row["Time"]);
    $time1[] = $time2->format('H.i');
    $threater = $row["theatreID"];
    }}
    $date = $_GET['date'];
    $time = $_GET['time'];

    foreach ($time1 as $time3){
        if($time3 == $time){
            $a+=1;
        }
    }
    foreach ($date1 as $date3){
        if($date3 == $date){
             $a+=1;
        }
    }
    if($a >= 2){
    echo $movie2[0]."<br>";
    echo $threater[0]."<br>";
    echo $date1[0]."<br>";
    echo $time1[1]."<br>";
    $a=0;
    }
    else{
        echo "No match found!";
        $a=0;
    }
    ?>
</body>
</html>