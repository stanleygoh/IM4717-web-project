<!DOCTYPE html>
<html lang="en">

<head>
	<title>Huat Zai</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
</head>
<body>
    Genre<br>
    <?php
	@ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');
		  //check if connection to db is possible
			if (mysqli_connect_errno()) {
			   echo "Error: Could not connect to database.  Please try again later.";
			   exit;
			}
            $genre = $_GET['genre'];
            $name = array();
            $rating =  array();
            $stars =  array();
            $details =  array();
            $duration = array();
            $movie = 'select Movie.movieName, Movie.movieRating, Movie.movieStars, Movie.movieDetails, Movie.movieDuration from Movie inner join Movie_genre on Movie.movieID = Movie_genre.movieID inner join Genre on Movie_genre.genreID = Genre.genreID where Genre.genreID ='.$genre.';';
            $movie = $db->query($movie);   
            if ($movie ->num_rows >0){
            while ($row = $movie->fetch_assoc()){
            $name[] = $row["movieName"];
            $rating[] = $row["movieRating"];
            $stars[] = $row["movieStars"];
            $details[] = $row["movieDetails"];
            $duration[] = $row["movieDuration"];
            }}
            else{
                echo"No match found";
                exit();
            }        
            echo '<pre>'; print_r($name); echo'</pre>';
            echo '<pre>'; print_r($rating); echo'</pre>';
            echo '<pre>'; print_r($stars); echo'</pre>';
            echo '<pre>'; print_r($details); echo'</pre>';
            echo '<pre>'; print_r($duration); echo'</pre>';
            $db->close();
                ?>
</body>
</html>