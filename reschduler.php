<?php
$servername = "localhost";
$username = "root";
$password = "9966836226";
$dbname = "reschduler";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">

<head> 


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Charts</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
<style>
button.btn:hover {
     -webkit-transform: scale(1.1);
     -moz-transform: scale(1.1);
     -o-transform: scale(1.1);
 }
 button.btn {
     -webkit-transform: scale(0.8);
     -moz-transform: scale(0.8);
     -o-transform: scale(0.8);
     -webkit-transition-duration: 0.5s;
     -moz-transition-duration: 0.5s;
     -o-transition-duration: 0.5s;
 }
body {font-family: Arial, Helvetica, sans-serif;}
table { width: 100%; } /* Make table wider */  
td, th { 
color:white;
background:grey;
border: 3px solid blue; 
text-align:center;
}
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.inp {
    border:none;
    border-bottom: 1px solid #1890ff;
    padding: 5px 10px;
    outline: none;
    width :60%;
 }

[placeholder]:focus::-webkit-input-placeholder {
    transition: text-indent 0.4s 0.4s ease; 
    text-indent: -100%;
    opacity: 1;
 }
#but_g{
    border: 1px solid #1890ff;
    border-radius: 10px;
    padding:2%;
    width:30%;  
}
#panel {
    display: none;
    border-color: black;
    border-style: outset;
    border-width: 20;
    border-radius: 20px;
    padding : 2% 2% 2% 2%;
}
.city {display:none}
</style>
<script>
function open_f() {
  document.getElementById("panel").style.display = "block";
}
function close_f() {
  document.getElementById("panel").style.display = "none";
}
</script>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/s.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER MOBILE-->
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/s.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="timetables.php">
                                <i class="fas fa-table"> </i>Timetables</a>
                        </li>
			             <li class="active">
                            <a href="reschduler.php">
                                <i class="fa fa-calendar-times-o" aria-hidden="true"></i>Reschdules</a>
                        </li>
                        <li>
                            <a href="faculty.php">
                                <i class="fa fa-graduation-cap"></i>Faculty</a>
                        </li>
                        <li>
                            <div id="panel">
  <p  onclick="close_f()" style="text-align: right; margin:2% 2% 2% 2%;"><i class="zmdi zmdi-close">
  </i>
  </p>
  <form action=reschduler.php method="POST">
    Branch :    <select id=sel_style name=branch>
        <option>CSE</option>
        <option>IT</option>
        <option>ECE</option>
        <option>EEE</option>
        <option>MECH</option>
        <option>CIVIL</option>
        <option>CHEM</option>
        </select><br>
    Semister :  <select id=sel_style name=semister>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        </select><br>
    Section :   <select id=sel_style name=section>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        </select><br>
    <label>
        Date : 
    </label>
     <input class="inp" name=date placeholder="enter date"/>   
    <label>
        Month : 
    </label>
     <input class="inp" name=month placeholder="enter month"/>
    <label>
        Year : 
    </label>
   <input class="inp" name=year placeholder="enter Year"/><br><br>
    <center><button type=submit id=but_g name=get_d>Submit</button>&nbsp&nbsp <button type=reset id=but_g>Reset</button></center>
  </form>



</div>


                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->


<script>
document.getElementsByClassName("tablink")[0].click();
document.getElementById('id01').style.display='block'
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].classList.remove("w3-light-grey");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.classList.add("w3-light-grey");
}
</script>
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="header-button">
                                <div class="noti-wrap">
				
                                    <div class="noti__item js-item-menu">
                                        <p class="flip" onclick="open_f()">
                                        <button class="au-btn au-btn-icon au-btn--blue" id="myBtn" ><i class="zmdi zmdi-refresh"></i>Get By Date</button>
                                    </p>


                                    </div>
                                    <div class="noti__item js-item-menu">
                                    </div>

                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->

            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">

<?php
if(isset($_POST['view'])){
$code=$_POST['code'];
echo '
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
<center><table border=1 id=table_sty>
';
$dt = date("d-m-Y");
$count_mon = 0;
$current_date = date('D');
if($current_date == "Mon"){
$sql = "SELECT * FROM modulator where code='$code' and day='Mon' and date='$dt'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	
		echo "<tr id=tr_style><td>MONDAY</td>";
		while($row = $result->fetch_assoc()) {
				$st=$row['start-time'];
				$et=$row['end-time'];
				$sub=$row['subject'];
				$ssub=$row['faculty'];
        if($row['rechedule'] == 1)
            echo "<td title='$ssub'><font color=blue>$sub<br>($st - $et)</font></td>";
        else if($row['rechedule'] == 2){
            echo "<td title='$ssub' ><font color=red>$sub<br>($st - $et)</font></td>";
        }
        else
            echo "<td title='$ssub'>$sub<br>($st - $et)</td>";
		}
		echo "</tr>";
	}
}

$count_tue = 0;
$current_date = date('D');
if($current_date == "Tue"){
$sql = "SELECT * FROM modulator where code='$code' and day='Tue' and date='$dt'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	echo "<tr id=tr_style><td>TUESDAY</td>";
	while($row = $result->fetch_assoc()) {
		$st=$row['start-time'];
		$et=$row['end-time'];
		$sub=$row['subject'];
		$ssub=$row['faculty'];
		if($row['rechedule'] == 1)
            echo "<td title='$ssub'><font color=blue>$sub<br>($st - $et)</font></td>";
        else if($row['rechedule'] == 2){
            echo "<td title='$ssub' ><font color=red>$sub<br>($st - $et)</font></td>";
        }
        else
            echo "<td title='$ssub'>$sub<br>($st - $et)</td>";
	}
	echo "</tr>";
}}


$count_wed = 0;
$current_date = date('D');
if($current_date == "Wed"){
$sql = "SELECT * FROM modulator where code='$code' and day='Wed' and date='$dt'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	echo "<tr id=tr_style><td>WEDNESDAY</td>";
	while($row = $result->fetch_assoc()) {
		$st=$row['start-time'];
		$et=$row['end-time'];
		$sub=$row['subject'];
		$ssub=$row['faculty'];
		if($row['rechedule'] == 1)
            echo "<td title='$ssub'><font color=blue>$sub<br>($st - $et)</font></td>";
        else if($row['rechedule'] == 2){
            echo "<td title='$ssub' ><font color=red>$sub<br>($st - $et)</font></td>";
        }
        else
            echo "<td title='$ssub'>$sub<br>($st - $et)</td>";
	}
	echo "</tr>";
}
}

$count_thu = 0;
$current_date = date('D');
if($current_date == "Thu"){
$sql = "SELECT * FROM modulator where code='$code' and day='Thu' and date='$dt'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	echo "<tr><td>THURSDAY</td>";
	while($row = $result->fetch_assoc()) {
		$st=$row['start-time'];
		$et=$row['end-time'];
		$sub=$row['subject'];
		$ssub=$row['faculty'];
        
        if($row['rechedule'] == 1)
            echo "<td title='$ssub'><font color=blue>$sub<br>($st - $et)</font></td>";
        else if($row['rechedule'] == 2){
            echo "<td title='$ssub' ><font color=red>$sub<br>($st - $et)</font></td>";
        }
        else
            echo "<td title='$ssub'>$sub<br>($st - $et)</td>";

	}
	echo "</tr>";
}
}


$count_fri = 0;
$current_date = date('D');
if($current_date == "Fri"){
$sql = "SELECT * FROM modulator where code='$code' and day='Fri' and date='$dt'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	echo "<tr id=tr_style><td>FRIDAY</td>";
	while($row = $result->fetch_assoc()) {
		$st=$row['start-time'];
		$et=$row['end-time'];
		$sub=$row['subject'];
		$ssub=$row['faculty'];
		if($row['rechedule'] == 1)
            echo "<td title='$ssub'><font color=blue>$sub<br>($st - $et)</font></td>";
        else if($row['rechedule'] == 2){
            echo "<td title='$ssub' ><font color=red>$sub<br>($st - $et)</font></td>";
        }
        else
            echo "<td title='$ssub'>$sub<br>($st - $et)</td>";
	}
	echo "</tr>";
}
}

$count_sat = 0;
$current_date = date('D');
if($current_date == "Sat"){
$sql = "SELECT * FROM modulator where code='$code' and day='Sat' and date='$dt'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	echo "<tr id=tr_style><td>SATURDAY</td>";
	while($row = $result->fetch_assoc()) {
		
		$st=$row['start-time'];
		$et=$row['end-time'];
		$sub=$row['subject'];
		$ssub=$row['faculty'];
		if($row['rechedule'] == 1)
            echo "<td title='$ssub'><font color=blue>$sub<br>($st - $et)</font></td>";
        else if($row['rechedule'] == 2){
            echo "<td title='$ssub' ><font color=red>$sub<br>($st - $et)</font></td>";
        }
        else
            echo "<td title='$ssub'>$sub<br>($st - $et)</td>";
	}
	echo "</tr>";
}
}
$count_sun = 0;
$current_date = date('D');
if($current_date == "Sun"){
$sql = "SELECT * FROM modulator where code='$code' and day='Sun' and date='$dt'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	echo "<tr id=tr_style><td>SUNDAY</td>";
	while($row = $result->fetch_assoc()) {
		$count_sun += 1;
		$st=$row['start-time'];
		$et=$row['end-time'];
		$sub=$row['subject'];
		$ssub=$row['faculty'];
		  
        if($row['rechedule'] == 1)
            echo "<td title='$ssub'><font color=blue>$sub<br>($st - $et)</font></td>";
        else if($row['rechedule'] == 2){
            echo "<td title='$ssub' ><font color=red>$sub<br>($st - $et)</font></td>";
        }
        else
            echo "<td title='$ssub'>$sub<br>($st - $et)</td>";

	}
	echo "</tr>";
}
}

echo '
</table><center>
  </div>
</div>
';
}

?>


<?php
if(isset($_POST['delete'])){
$code=$_POST['code'];
$sql = "DELETE FROM timetables WHERE code='$code'";
if ($conn->query($sql) === TRUE) {
	$sql = "DELETE FROM subjects WHERE code='$code'";
	if ($conn->query($sql) === TRUE) {
		$sql = "DELETE FROM modulator WHERE code='$code'";
		if ($conn->query($sql) === TRUE) {
			echo "<script>alert('TimeTable Deleted Successfully')</script>";
		}
	}
}
}
?>
<?php
$sql = "SELECT * FROM timetables";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {

$b=$row['branch'];
$sem=$row['semister'];
$sec=$row['section'];
$code=$row['code'];
echo '

                            <div class="col-lg-6">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40">'.$sem.' - SEMISTER</h3>
                                        <h5>'.$b.' -'. $sec.'</h5>

<div class="container">
	<div class="row"><form action=reschduler.php method=POST>
<input type=text name=code value='.$code.' hidden>
    <button type=submit class="btn btn-primary a-btn-slide-text" name=view>
        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
        <span><strong>View</strong></span>            
</button>
</form>
	</div>
</div>


                                    </div>
                                </div>
                            </div>
';
}
}
?>
         

                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




<?php
if(isset($_POST['get_d'])){
    $a = $_POST['date'];
    $b = $_POST['month'];
    $c = $_POST['year'];
    $dt = $a.'-'.$b.'-'.$c;
    $a1 = $_POST['branch'];
    $a2 = $_POST['semister'];
    $a3 = $_POST['section'];
    $code = $a1.''.$a2.''.$a3;
    echo '
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
<center>
';
$sql = "SELECT * FROM modulator where code='$code' and date='$dt'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $sql_op = "SELECT * FROM modulator where code='$code' and date='$dt'";
    $result_op = $conn->query($sql_op);
    $row_op = $result->fetch_assoc();
    $day = $row_op['day'];
    if($day == "Mon")
        $day = "MONDAY";
    if($day == "Tue")
        $day = "TUESDAY";
    if($day == "Wed")
        $day = "WEDNESDAY";
    if($day == "Thu")
        $day = "THURSDAY";
    if($day == "Fri")
        $day = "FRIDAY";
    if($day == "Sat")
        $day = "SATURDAY";
    if($day == "Sun")
        $day = "SUNDAY";
    echo "<table border=1 id=table_sty><tr id=tr_style><td>".$day."</td>";
    while($row = $result->fetch_assoc()) {
        $st=$row['start-time'];
        $et=$row['end-time'];
        $sub=$row['subject'];
        $ssub=$row['faculty'];
        echo "<td title='$ssub'>$sub<br>($st - $et)</td>";
    }
    echo "</tr></table><center>";
}
else{
    echo "No Records of found on ".$dt;
}
echo '

  </div>
</div>
';
}
?>


            <!-- END MAIN CONTENT-->
        </div>
        <!-- END PAGE CONTAINER-->

    </div>
<script>
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
  modal.style.display = "block";
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>
<?php
$sql = "SELECT * FROM faculty";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {      
date_default_timezone_set('Asia/Kolkata');
$date=date('d-m-Y');
$time=date('H:i');
$name=$row['name'];
$email=$row['email'];
$sql1 = "SELECT * FROM attendence where name='$name' and date='$date'";
$result1 = $conn->query($sql1);
if ($result1->num_rows == 0) {
$sql = "INSERT INTO attendence values('$name','$email',0,'$date','-')";
if ($conn->query($sql) === TRUE) {
}
else{
}
}		
}
}
?>
</html>
<!-- end document-->
