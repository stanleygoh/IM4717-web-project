<?php  
session_start();
if (!isset($_SESSION['cart'])){
	$_SESSION['cart'] = array();
}

if (isset($_GET['empty'])) {
	unset($_SESSION['cart']);
	header('location: ' . $_SERVER['PHP_SELF']);
	exit();
}

?>
<html>
<head>
<title>Huat Zai</title>
</head>
<body>
<h1>Transaction Summary</h1>
<?php
      @ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');
      //check if connection to db is possible
        if (mysqli_connect_errno()) {
           echo "Error: Could not connect to database.  Please try again later.";
           exit;
        }
        $a =0;
        echo "<strong><center>Your booking has been confirmed. Thank you!<br>To collect your ticket, please screenshot this and present it to one of our ticket counters.</center></strong>";
        echo"<table style='margin-left: auto; margin-right: auto;'";
        echo "<tr><td><u>Your booking details: </u></td></tr>";
        echo "<tr><td>Booking ID : ".session_id()."</td></tr>";
        $message = "Your booking has been confirmed.\r\n    Your BookingId is :".session_id()."\r\n";
        $message .="\r\n";
        foreach($_SESSION["cart"] as $key => $value){
            $index = $key;
            $movie1 = "SELECT MovieAiringTime.Time,MovieAiringTime.Date, Movie.movieName,MovieAiringTime.theatreID from MovieAiringTime Inner Join Movie ON MovieAiringTime.movieID = Movie.movieID where MovieAiringTime.airingID =".$index.";";
            $movie1 = $db->query($movie1);
            if ($movie1 ->num_rows >0){
            while ($row = $movie1->fetch_assoc()){
                $name = $row["movieName"];
                $date = $row["Date"];
                $time = $row["Time"];
                $id = $row["theatreID"];
            }}

            $sit = $value;
            $seat = explode(',', $sit);
            $counter[] = count($seat);
            echo "<tr><td>Movie Name: ".$name ."</td></tr>";
            $message .="    Movie Name: ".$name ."\r\n";
            echo "<tr><td>Theater: ".$id."</td></tr>";
            $message .="    Theater: ".$id ."\r\n";
            echo "<tr><td>Seats: ".$sit."</td></tr>";
            $message .="    Seats: ".$sit ."\r\n";
            echo "<tr><td>Movie airing date: ".$date."</td></tr>";
            $message .="    Airing Date: ".$date ."\r\n";
            echo "<tr><td>Movie airing time: ".$time."</td></tr>";
            $message .="    Airing Time: ".$time ."\r\n";
            $message .="\r\n";
            echo"<tr><td>&nbsp;</td></tr>";
            $totalSeat += $counter[$a];
            date_default_timezone_set("Singapore");
            $datenow = date("Y-m-d");
            $timenow = date("H:i:s");
            $a+=1;
            $movie4 = "INSERT INTO Booking (SessionID, movieName, theatreID, seats, bookingDate, movieDate, bookingTime, movieTime) VALUES ('" .session_id(). "','" .$name. "','" .$id.  "','" .$sit. "','" .$datenow. "','" .$date.  "','" .$timenow.  "','".$time."');";
            $movie4 = $db->query($movie4);
            foreach($seat as $seat1){
            $movie2 = "SELECT availability from Threater where theatreID = " .$id. " and theatreDate = '".$date."' and theatreTime = '".$time."' and seats = '".$seat1."';";
            $movie2 = $db->query($movie2);
            if ($movie2 ->num_rows >0){
                while ($row = $movie2->fetch_assoc()){
                    $avail = $row["availability"];
                     if($avail == 1){
                         echo "It is already been booked! Please try again.";
                         session_unset();
                         session_destroy();                  
                     }
                     else{
                            
                         $movie3 = "UPDATE Threater SET availability = 1 where theatreID = " .$id. " and theatreDate = '".$date."' and theatreTime = '".$time."' and seats = '".$seat1."';";
                         $movie3 = $db->query($movie3);
                         

                     }
                }}
            }
        }
        echo "<tr><td>Total cost: <strong>$".(int)$totalSeat*5 ."</strong></td></tr><br>";
        echo"</table>"; 
        $message .="    Total cost: $".$totalSeat*5 ."\r\n";
        $to = 'f32ee@localhost';
        $subject ='Booking Confirmation';
        mail($to,$subject,$message);
        echo"<center>A confirmation mail has been send to your mail box.</center>";
        session_unset();
        session_destroy();
        $db->close();

?>
        <div align="center" ;style="padding-bottom: 10px;">
        <input type="submit" value="Done" ;
        onclick="location.href = 'index.php';">
</body> 
</html>