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
<h1>Your Shopping Cart </h1>
<?php
      @ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');
      //check if connection to db is possible
        if (mysqli_connect_errno()) {
           echo "Error: Could not connect to database.  Please try again later.";
           exit;
        }
    $counter = array();
    $a=0;
    $totalSeat = 0;
    echo "<table border ='1'>
    <tr>
    <th>Movie Name</th>
    <th>Date</th>
    <th>Time</th>
    <th>Seat</th>
    <th>Quantity</th>";
    foreach($_SESSION["cart"] as $key => $value){
        $index = $key;
        $movie1 = "SELECT MovieAiringTime.Time,MovieAiringTime.Date, Movie.movieName from MovieAiringTime Inner Join Movie ON MovieAiringTime.movieID = Movie.movieID where MovieAiringTime.airingID =".$index.";";
        $movie1 = $db->query($movie1);
        if ($movie1 ->num_rows >0){
        while ($row = $movie1->fetch_assoc()){
        $movie2 = $row["movieName"];
        echo "<tr>";
        echo "<td>" .$movie2."</td>";
        $date2 = new DateTime($row["Date"]);
        $date1 = $date2->format('Y-m-d');
        echo "<td>" .$date1."</td>";
        $time2 = new DateTime($row["Time"]);
        $time1 = $time2->format('H.i');
        echo "<td>" .$time1."</td>";
        echo "<td>" .$value."</td>";
        $sit = $value;
        $seat = explode(',', $sit);
        $counter[] = count($seat);
        echo "<td style='text-align: center;'>" .$counter[$a]."</td>";
        $totalSeat += $counter[$a];
        $a+=1;
    }}}
    echo"<tr>
    <td></td>
    <td></td>
    <td></td>
    <td>Total Cost: </td>
    <td style='text-align: center;'>$".(int)$totalSeat*5 ."</td></tr>";
    echo"</table>";

$db->close();
?>
<br><a href="index.php">Back to Home</a>
 <a href="<?php echo $_SERVER['PHP_SELF']; ?>?empty=1">Empty your cart</a>
 <center><button type="button">Check out</button></center>
</body> 
</html>