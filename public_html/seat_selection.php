<?php
        session_start();
        if(!(isset($_SESSION['cart']))){
            $_SESSION['cart'] = array();
        }
        if (isset($_GET['seat'])) {
          //[] is index 0 and it will auto increament
          $seat=$_GET['seat'];
          $id = $_GET['id'];
          $_SESSION['cart'][$id] = $_GET['seat'];
          header('location: ViewCart.php?id='.$id);
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Required meta tags always come first -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="style.php">
   <!-- endbuild -->

   <title>Huat Zai Ya Theatres</title>
</head>

<!-- <style>
items moved to style.php
</style> -->
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
      }}
    ?>
<body style="margin:0px;">

      <div class="cart-button" onclick="window.location.href='ViewCart.php'">
         <div class="cart-icon"><img src="assets/cart.png"
               style="align-items: center; vertical-align: middle; justify-content: center;" width="90%"></div>
         <button class="cart-text">View Cart</button>
      </div>

      <!-- MAIN BODY CONTAINER -->
      <div id="container">

         <!-- ! custom make own navbar -->
         <div id="header" style="position:unset;">
            <div id="navbar" style="border-bottom:solid 1px #C4B480;">
               <ul class="top-navbar">
                  <div class="navbar-links">
                     <li style="margin-right: 0;"><button class="cta-button"
                           onclick="location.href='now-showing.php'">NOW SHOWING</button>
                     </li>
                     <li><a href="coming-soon.php">COMING SOON</a></li>
                     <li><a href="promotions.php">PROMOTIONS</a></li>
                     <li><a href="index.php">HOME</a></li>
                  </div>
                  <img class="logo-img" src="./assets/logo.png" width="10%" onclick="window.location.href='index.php'">
               </ul>


            </div>

         
         <!-- NOW SHOWING SECTION -->
         <div id="content-section">
    <h1>Seat Selection</h1><br>
    <?php
      @ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');
      //check if connection to db is possible
        if (mysqli_connect_errno()) {
           echo "Error: Could not connect to database.  Please try again later.";
           exit;
        }
    $movie = $_GET['movie'];
    $date = $_GET['date'];
    $time = $_GET['time'];
    $id = array();
    $movie2 = array();
    $date1 = array();
    $time1 = array();
    $threater = array();
    $date7 = new DateTime($date);
    $date = $date7->format('Y-m-d');
    $time7 = new DateTime($time);
    $time = $time7->format('H:i:s');
    $movie1 = "SELECT MovieAiringTime.airingID, MovieAiringTime.Time,MovieAiringTime.Date, Movie.movieName,MovieAiringTime.theatreID from MovieAiringTime Inner Join Movie ON MovieAiringTime.movieID = Movie.movieID where Movie.movieID =".$movie." and MovieAiringTime.Date = '".$date."' and MovieAiringTime.Time ='".$time."';";
    $movie1 = $db->query($movie1);
    if ($movie1 ->num_rows >0){
    while ($row = $movie1->fetch_assoc()){
    $id[] = $row["airingID"];
    $movie2[] = $row["movieName"];
    $date2 = new DateTime($row["Date"]);
    $date1[] = $date2->format('Y-m-d');
    $time2 = new DateTime($row["Time"]);
    $time1[] = $time2->format('H.i');
    $threater = $row["theatreID"];
    }}
    else{
      echo '<script>
      alert("No Match Found. Please refer to the movie showtime.");
      window.location.href="index.php";
      </script>';
    }
    echo "<h3>Movie Title: ".$movie2[0]."</h3>";
    echo "<h3>Theatre ".$threater[0]."</h3>";
    echo "<h3>Date: ".$date1[0]."</h3>";
    $time5 = new DateTime($time);
    $time6 = $time5->format('H.i');
    echo "<h3>Time: ".$time6."</h3>";
    echo "<br><p>Please select your preferred seat(s), by clicking on the available seats below:";
    $avail1 = array();
    $avail2 = array();
    $date3 = array();
    $time3 = array();
    $avail = "select availability from Threater where theatreID =".$threater[0]." and theatreDate = '".$date."' and theatreTime ='".$time."';";
    $avail = $db->query($avail);
    if ($avail ->num_rows >0){
    while ($row = $avail->fetch_assoc()){
        $avail1[] = $row["availability"];
    }}  else{
      echo '<script>
      alert("No Match Found. Please refer to the movie showtime.");
      window.location.href="index.php";
      </script>';
    }
    $db->close();
    ?>
<form method="post" action="" id ="seatForm">
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
      echo '<div class="grid-item" id="A1" style="background-color:red;" >A1</div>';
  }else{
    echo '<div class="grid-item" style="cursor: pointer;" id="A1" onclick="selectA1()">A1</div>';
  }
  if($avail1[1] == 1){
    echo '<div class="grid-item" id="A2" style="background-color:red;" >A2</div>';
}else{
  echo '<div class="grid-item" style="cursor: pointer;" id="A2" onclick="selectA2()">A2</div>';
}
if($avail1[2] == 1){
    echo '<div class="grid-item" id="A3" style="background-color:red" >A3</div>';
}else{
  echo '<div class="grid-item" style="cursor: pointer;" id="A3" onclick="selectA3()">A3</div>';
}
  ?> 
  <div class="grid-item"style="visibility: hidden;">2</div>
  <div class="grid-item"style="visibility: hidden;">3</div>  
  <div class="grid-item"style="visibility: hidden;">4</div>
  <?php if($avail1[3] == 1){
      echo '<div class="grid-item" id="B1" style="background-color:red" >B1</div>';
  }else{
    echo '<div class="grid-item" style="cursor: pointer;" id="B1" onclick="selectB1()">B1</div>';
  }
  if($avail1[4] == 1){
    echo '<div class="grid-item" id="B2" style="background-color:red" >B2</div>';
}else{
  echo '<div class="grid-item" style="cursor: pointer;" id="B2" onclick="selectB2()">B2</div>';
}
?>
  <div class="grid-item"style="visibility: hidden;">9</div> 
  <?php if($avail1[5] == 1){
      echo '<div class="grid-item" id="B3" style="background-color:red" >B3</div>';
  }else{
    echo '<div class="grid-item" style="cursor: pointer;" id="B3" onclick="selectB3()">B3</div>';
  }
  if($avail1[6] == 1){
    echo '<div class="grid-item" id="B4" style="background-color:red" >B4</div>';
}else{
  echo '<div class="grid-item" style="cursor: pointer;" id="B4" onclick="selectB4()">B4</div>';
}
if($avail1[7] == 1){
    echo '<div class="grid-item" id="B5" style="background-color:red" >B5</div>';
}else{
  echo '<div class="grid-item" style="cursor: pointer;" id="B5" onclick="selectB5()">B5</div>';
}
  ?>  
  <div class="grid-item"style="visibility: hidden;">9</div> 
  <?php if($avail1[8] == 1){
      echo '<div class="grid-item" id="B6" style="background-color:red" >B6</div>';
  }else{
    echo '<div class="grid-item" style="cursor: pointer;" id="B6" onclick="selectB6()">B6</div>';
  }
  if($avail1[9] == 1){
        echo '<div class="grid-item" id="B7" style="background-color:red" >B7</div>';
    }else{
    echo '<div class="grid-item" style="cursor: pointer;" id="B7" onclick="selectB7()">B7</div>';
    }
    if($avail1[10] == 1){
        echo '<div class="grid-item" id="C1" style="background-color:red" >C1</div>';
    }else{
    echo '<div class="grid-item" style="cursor: pointer;" id="C1" onclick="selectC1()">C1</div>';
    }
    if($avail1[11] == 1){
        echo '<div class="grid-item" id="C2" style="background-color:red" >C2</div>';
    }else{
    echo '<div class="grid-item" style="cursor: pointer;" id="C2" onclick="selectC2()">C2</div>';
    }
  ?>   
  <div class="grid-item"style="visibility: hidden;">9</div>  
  <?php if($avail1[12] == 1){
      echo '<div class="grid-item" id="C3" style="background-color:red" >C3</div>';
  }else{
    echo '<div class="grid-item" style="cursor: pointer;" id="C3" onclick="selectC3()">C3</div>';
  }
  if($avail1[13] == 1){
    echo '<div class="grid-item" id="C4" style="background-color:red" >C4</div>';
}else{
  echo '<div class="grid-item" style="cursor: pointer;" id="C4" onclick="selectC4()">C4</div>';
}
if($avail1[14] == 1){
    echo '<div class="grid-item" id="C5" style="background-color:red"  >C5</div>';
}else{
  echo '<div class="grid-item" style="cursor: pointer;" id="C5" onclick="selectC5()">C5</div>';
}
  ?>  
  <div class="grid-item"style="visibility: hidden;">9</div> 
  <?php if($avail1[15] == 1){
      echo '<div class="grid-item" id="C6" style="background-color:red" >C6</div>';
  }else{
    echo '<div class="grid-item" style="cursor: pointer;" id="C6" onclick="selectC6()">C6</div>';
  }
  if($avail1[16] == 1){
    echo '<div class="grid-item" id="C7" style="background-color:red" >C7</div>';
}else{
  echo '<div class="grid-item" style="cursor: pointer;" id="C7" onclick="selectC7()">C7</div>';
}
?> 
  <div class="grid-item"style="visibility: hidden;">6</div>  
  <div class="grid-item"style="visibility: hidden;">7</div>
  <div class="grid-item"style="visibility: hidden;">8</div>
  <div class="grid-item"style="visibility: hidden;">9</div>
  <div class="grid-item"style="visibility: hidden;">6</div>  
  <div class="grid-item"style="visibility: hidden;">7</div>
  <div class="item2">Entrance</div>
  <div class="item3">Exit</div> 
</div>

    <h3 style="margin-left: 15%;">Legend:</h3>
<div class="grid-container2">

    <div style="display: flex; align-items: center;">
      <div class="legend-square" style="background-color: #CCE6E6"></div>Available
    </div>
        <div style="display: flex;     align-items: center;">
      <div class="legend-square" style="background-color: red"></div>Taken
    </div>
        <div style="display: flex;     align-items: center;">
      <div class="legend-square" style="background-color: grey"></div>Your Selection
    </div>
</div>
<div  style="margin: 0 auto;width: 80%;">
<div>
You have selected the following seat(s): <strong><p name='seatid' id='seatid'style="display:inline"></p></strong>
<script type = "text/javascript"  src = "seatselect.js" ></script> 
<span style="float:right;">
Total Cost : $<strong><p id='totalcost'style="display:inline">0</p></strong>
</span>
</div>
<br>
<button type="button" onClick="onClickReset()">Reset selection</button>
<input type="submit" value="Add to Cart" name="submit" id ="submit" style="float:right;"onclick="myFunction()"></button><br>
<script type="text/javascript">
    function myFunction()
    {
      if(seat == ""){
      alert("Please select a seat.");
      location.reload();
      }
      else{
        var url = window.location.href+"&seat="+seat+"&id="+<?php echo $id[0]; ?>;
        document.getElementById("seatForm").action = url;
      }
      
    }
    </script>
</form>
<p>Your shopping cart contains <?php
  echo count($_SESSION['cart']); ?> items.</p>
  </div>

 </div>
         <footer id="footer">
            <div style="display: flex;">
               <img src=" assets/logo.png" height="120px">

               <div style="width: 100%; display: flex;justify-content: space-evenly;">
                  <div style="flex-direction: column;">
                     <h4>
                        About us
                     </h4>
                     <p style="width: 200px;">Started in 2021, we came into the industry to deliver your most
                        beloved
                        retro films.
                     </p>
                  </div>

                  <div style="flex-direction: column;">
                     <h4>
                        Location
                     </h4>
                     <p>
                        50 Nanyang Ave,<br>Singapore 639798
                     </p>
                  </div>
                  <img src=" assets/location.jpg" height="120px" style="transform: translate(-40px,15px);">

                  <div style="flex-direction: column;">
                     <h4>
                        Follow us
                     </h4>
                     <ul>
                        <li>
                           <a href="www.facebook.com">Facebook</a>
                        </li>
                        <li>
                           <a href="www.twitter.com">Twitter</a>
                        </li>
                        <li>
                           <a href="www.instagram.com">Instagram</a>
                        </li>
                     </ul>
                  </div>

               </div>
            </div>
            <p>?? 2021 Huat Zai Ya Pte. Ltd. All Rights
               Reserved 2021
            </p>
         </footer>
      </div>

</html>