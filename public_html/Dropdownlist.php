<!DOCTYPE html>
<html lang="en">

<head>
	<title>Huat Zai</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
</head>
<?php
  @ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');
  //check if connection to db is possible
    if (mysqli_connect_errno()) {
       echo "Error: Could not connect to database.  Please try again later.";
       exit;
    }
    $movieName = array();
    $moviegenre = array();
    $movie = "SELECT movieName FROM Movie;";
    $movie = $db->query($movie);
    if ($movie ->num_rows >0){
      while ($row = $movie->fetch_assoc()){
      $movieName[] = $row["movieName"];
      }
    }
    $movie = "SELECT genre FROM Genre;";
    $movie = $db->query($movie);
    if ($movie ->num_rows >0){
      while ($row = $movie->fetch_assoc()){
      $moviegenre[] = $row["genre"];
      }
    }
    

    ?>
<body>
<div>
    <form method ="post">
        <select name="movies" id = "movies">
        <option value="" disabled selected>Select a Movie</option>
        <option value="1"><?php echo $movieName[0]?></option>
        <option value="2"><?php echo $movieName[1]?></option>
        <option value="3"><?php echo $movieName[2]?></option>
        <option value="4"><?php echo $movieName[3]?></option>
        <option value="5"><?php echo $movieName[4]?></option>
        <option value="6"><?php echo $movieName[5]?></option>
  </select>
  <select name="genre" id = "genre">
        <option value="" disabled selected>Select a Genre</option>
        <option value="1"><?php echo $moviegenre[0]?></option>
        <option value="2"><?php echo $moviegenre[1]?></option>
        <option value="3"><?php echo $moviegenre[2]?></option>
        <option value="4"><?php echo $moviegenre[3]?></option>
        <option value="5"><?php echo $moviegenre[4]?></option>
        <option value="6"><?php echo $moviegenre[5]?></option>
        <option value="7"><?php echo $moviegenre[6]?></option>
  </select>
    <td>
   <label for="Date">Date:</label>
   <input type="date" name="Date" id="Date">
        <select name="time" id = "time">
        <option value="" disabled selected>Select a Time</option>
        <option value="1">11.30</option>
        <option value="2">14.30</option>
        <option value="3">17.30</option>
        <option value="4">20.30</option>
  </select>
      <input type="reset" value="Search" id="search" onclick="myFunction()"><br>
  <script type="text/javascript">
      function myFunction()
      {
        var m_index = document.getElementById("movies");
        var g_index = document.getElementById("genre");
        var t_index = document.getElementById("time");
        var d_index = document.getElementById("Date").value;
        //possible to amend for alert "No match found."
        if (!(isNaN(parseInt(m_index.value)))&&(!(isNaN(Date.parse(d_index))))&&!(isNaN(parseInt(t_index.value))))
        {
          var m_index = parseInt(m_index.value);
          t_index = t_index.options[t_index.selectedIndex].text;
          location.href = "seat_selection.php?movie="+m_index+"&date="+d_index+"&time="+t_index;
          
        }
         else if (!(isNaN(parseInt(g_index.value)))&&(!(isNaN(Date.parse(d_index)))))
         {
          var g_index = parseInt(g_index.value);
          location.href = "showtime_genre.php?genre="+g_index+"&date="+d_index;
         }
         
         else if (!(isNaN(parseInt(m_index.value)))&&(!(isNaN(Date.parse(d_index)))))
         {
          var m_index = parseInt(m_index.value);
          location.href = "showtime.php?movie="+m_index+"&date="+d_index;
         }
         else if (!(isNaN(parseInt(m_index.value)))&&((isNaN(Date.parse(d_index))))&&(isNaN(parseInt(t_index.value))))
         {
          var m_index = parseInt(m_index.value);
          location.href = "movieDetails.php?movie="+m_index;
         }
          else if (!(isNaN(parseInt(g_index.value)))&&((isNaN(Date.parse(d_index))))&&(isNaN(parseInt(t_index.value))))
         {
          var g_index = parseInt(g_index.value);
          location.href = "genre.php?genre="+g_index;
          }
        else{ 
        alert("Invalid option please try again!");
        location.reload();
        }
      }
      </script>
      <script type = "text/javascript"  src = "validation.js" ></script> 
  </form>
  </div>
</body>
</html>