<!DOCTYPE html>
<html lang="en">

<head>
	<title>Huat Zai</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
</head>
<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  grid-gap: 10px;
  background-color: #2196F3;
  padding: 10px;
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}

.item1 {
  grid-column-start: 1;
  grid-column-end: 10;
}
.item2 {
  grid-column-start: 1;
  grid-column-end: 3;
}
.item3 {
  grid-column-start: 8;
  grid-column-end: 10;
}   
</style>
<body>
    <h1>Seat Selection</h1><br>
    <?php
      @ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');
      //check if connection to db is possible
        if (mysqli_connect_errno()) {
           echo "Error: Could not connect to database.  Please try again later.";
           exit;
        }
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
             $b+=1;
        }
    }
    if($a >= 1 && $b>=1){
    echo "<h2>Movie Title: ".$movie2[0]."</h2>";
    echo "<h2>Threatre ".$threater[0]."</h2>";
    echo "<h2>Date: ".$date1[0]."</h2>";
    $time5 = new DateTime($time);
    $time6 = $time5->format('H.i');
    echo "<h2>Time: ".$time6."</h2>";
    $a=0;
    $seat[] = array();
    }
    else{
        echo "No match found!";
        $a=0;
        exit;
    }
    $avail1 = array();
    $avail2 = array();
    $date3 = array();
    $time3 = array();
    $date7 = new DateTime($date);
    $date = $date7->format('Y-m-d');
    $time7 = new DateTime($time);
    $time = $time7->format('H:i:s');
    $avail = "select availability from Threater where theatreID =".$threater[0]." and theatreDate = '".$date."' and theatreTime ='".$time."';";
    $avail = $db->query($avail);
    if ($avail ->num_rows >0){
    while ($row = $avail->fetch_assoc()){
        $avail1[] = $row["availability"];
    }}
    ?>
<div class="grid-container" style="margin-bottom: 50px;">
  <div class="item1">Screen</div>
  <div class="grid-item"style="visibility: hidden;">2</div>
  <div class="grid-item"style="visibility: hidden;">3</div>  
  <div class="grid-item"style="visibility: hidden;">4</div>
  <div class="grid-item"style="visibility: hidden;">5</div>
  <div class="grid-item"style="visibility: hidden;">6</div>  
  <div class="grid-item"style="visibility: hidden;">7</div>
  <div class="grid-item"style="visibility: hidden;">8</div>
  <div class="grid-item"style="visibility: hidden;">9</div>
  <div class="grid-item"style="visibility: hidden;">2</div>
  <div class="grid-item"style="visibility: hidden;">3</div>  
  <div class="grid-item"style="visibility: hidden;">4</div>
  <div class="grid-item"style="visibility: hidden;">5</div>
  <div class="grid-item"style="visibility: hidden;">6</div>  
  <div class="grid-item"style="visibility: hidden;">7</div>
  <div class="grid-item"style="visibility: hidden;">8</div>
  <div class="grid-item"style="visibility: hidden;">9</div>  
  <div class="grid-item"style="visibility: hidden;">2</div>
  <div class="grid-item"style="visibility: hidden;">3</div>  
  <div class="grid-item"style="visibility: hidden;">4</div>
  <div class="grid-item"style="visibility: hidden;">5</div>
  <div class="grid-item"style="visibility: hidden;">6</div>  
  <?php if($avail1[0] == 1){
      echo '<div class="grid-item" id="A1" style="background-color:red" >A1</div>';
  }else{
    echo '<div class="grid-item" id="A1" onclick="selectA1()">A1</div>';
  }
  if($avail1[1] == 1){
    echo '<div class="grid-item" id="A2" style="background-color:red" >A2</div>';
}else{
  echo '<div class="grid-item" id="A2" onclick="selectA2()">A2</div>';
}
if($avail1[2] == 1){
    echo '<div class="grid-item" id="A3" style="background-color:red" >A3</div>';
}else{
  echo '<div class="grid-item" id="A3" onclick="selectA3()">A3</div>';
}
  ?> 
  <div class="grid-item"style="visibility: hidden;">2</div>
  <div class="grid-item"style="visibility: hidden;">3</div>  
  <div class="grid-item"style="visibility: hidden;">4</div>
  <?php if($avail1[3] == 1){
      echo '<div class="grid-item" id="B1" style="background-color:red" >B1</div>';
  }else{
    echo '<div class="grid-item" id="B1" onclick="selectB1()">B1</div>';
  }
  if($avail1[4] == 1){
    echo '<div class="grid-item" id="B2" style="background-color:red" >B2</div>';
}else{
  echo '<div class="grid-item" id="B2" onclick="selectB2()">B2</div>';
}
?>
  <div class="grid-item"style="visibility: hidden;">9</div> 
  <?php if($avail1[5] == 1){
      echo '<div class="grid-item" id="B3" style="background-color:red" >B3</div>';
  }else{
    echo '<div class="grid-item" id="B3" onclick="selectB3()">B3</div>';
  }
  if($avail1[6] == 1){
    echo '<div class="grid-item" id="B4" style="background-color:red" >B4</div>';
}else{
  echo '<div class="grid-item" id="B4" onclick="selectB4()">B4</div>';
}
if($avail1[7] == 1){
    echo '<div class="grid-item" id="B5" style="background-color:red" >B5</div>';
}else{
  echo '<div class="grid-item" id="B5" onclick="selectB5()">B5</div>';
}
  ?>  
  <div class="grid-item"style="visibility: hidden;">9</div> 
  <?php if($avail1[8] == 1){
      echo '<div class="grid-item" id="B6" style="background-color:red" >B6</div>';
  }else{
    echo '<div class="grid-item" id="B6" onclick="selectB6()">B6</div>';
  }
  if($avail1[9] == 1){
        echo '<div class="grid-item" id="B7" style="background-color:red" >B7</div>';
    }else{
    echo '<div class="grid-item" id="B7" onclick="selectB7()">B7</div>';
    }
    if($avail1[10] == 1){
        echo '<div class="grid-item" id="C1" style="background-color:red" >C1</div>';
    }else{
    echo '<div class="grid-item" id="C1" onclick="selectC1()">C1</div>';
    }
    if($avail1[11] == 1){
        echo '<div class="grid-item" id="C2" style="background-color:red" >C2</div>';
    }else{
    echo '<div class="grid-item" id="C2" onclick="selectC2()">C2</div>';
    }
  ?>   
  <div class="grid-item"style="visibility: hidden;">9</div>  
  <?php if($avail1[12] == 1){
      echo '<div class="grid-item" id="C3" style="background-color:red" >C3</div>';
  }else{
    echo '<div class="grid-item" id="C3" onclick="selectC3()">C3</div>';
  }
  if($avail1[13] == 1){
    echo '<div class="grid-item" id="C4" style="background-color:red" >C4</div>';
}else{
  echo '<div class="grid-item" id="C4" onclick="selectC4()">C4</div>';
}
if($avail1[14] == 1){
    echo '<div class="grid-item" id="C5" style="background-color:red"  >C5</div>';
}else{
  echo '<div class="grid-item" id="C5" onclick="selectC5()">C5</div>';
}
  ?>  
  <div class="grid-item"style="visibility: hidden;">9</div> 
  <?php if($avail1[15] == 1){
      echo '<div class="grid-item" id="C6" style="background-color:red" >C6</div>';
  }else{
    echo '<div class="grid-item" id="C6" onclick="selectC6()">C6</div>';
  }
  if($avail1[16] == 1){
    echo '<div class="grid-item" id="C7" style="background-color:red" >C7</div>';
}else{
  echo '<div class="grid-item" id="C7" onclick="selectC7()">C7</div>';
}
?> 
  <div class="grid-item"style="visibility: hidden;">6</div>  
  <div class="grid-item"style="visibility: hidden;">7</div>
  <div class="grid-item"style="visibility: hidden;">8</div>
  <div class="grid-item"style="visibility: hidden;">9</div>
  <div class="grid-item"style="visibility: hidden;">6</div>  
  <div class="grid-item"style="visibility: hidden;">7</div>
  <div class="item2">Entrance</div>
  <div class="item3">EXIT</div> 
            
</div>
<div>
You have selected : <strong><p id='seatid'style="display:inline"></p></strong>
<script type = "text/javascript"  src = "seatselect.js" ></script> 
<span style="float:right;">
Total Cost : $<strong><p id='totalcost'style="display:inline">0</p></strong>
</span>
</div>
<button type="button" onClick="onClickReset()">Reset</button>

</body>
</html>