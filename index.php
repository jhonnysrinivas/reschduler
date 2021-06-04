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
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

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

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
<script>
var room = 1;
function education_fields() {
    room++;
    var objTo = document.getElementById('education_fields')
    var divtest = document.createElement("div");
	divtest.setAttribute("class", "form-group removeclass"+room);
	var rdiv = 'removeclass'+room;
    divtest.innerHTML = '<input type="text" id="tb_style" name="subjects[]" value="" placeholder="Enter Subject"> <input type="text" id="tb_style" name="faculty[]" value="" placeholder="Enter Faculty Name"> <input type="text" id="tb_style" name="time_start[]" value="" placeholder="Start TIme(HH:MM)"> <input type="text" id="tb_style" name="time_end[]" value="" placeholder="End Time (HH:MM)">';
	objTo.appendChild(divtest)
}
   function remove_education_fields(rid) {
	   $('.removeclass'+rid).remove();
   }
</script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
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

#sel_style{
width:20%;
margin : 1% 1% 1% 1%;
border-radius:20px;
}
#but_style{
width:20%;
height:100%;
border-radius :30px;
}
</style>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
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
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="timetables.php">
                                <i class="fas fa-chart-bar"></i>TimeTables</a>
                        </li>
                        <li>
                            <a href="faculty.php">
                                <i class="fa fa-graduation-cap"></i>Faculty</a>
                        </li>
                    </ul>
                </div>
            </nav>
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
                        <li class="active has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="timetables.php">
                                <i class="fas fa-table"></i>Timetables</a>
                        </li>
			<li>
                            <a href="reschduler.php">
                                <i class="fa fa-calendar-times-o" aria-hidden="true"></i>Reschdules</a>
                        </li>
                        <li>
                            <a href="faculty.php">
                                <i class="fa fa-graduation-cap"></i>Faculty</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Quick View</h2>
<?php
//creating attendence log
$dt = date("d-m-Y");
$attendence_log = array();
$classes_count = array();
$fac_que = "select * from attendence where date = '$dt'";
$fac_res = $conn->query($fac_que);
while($row = $fac_res->fetch_assoc()){
    $fac_name = "".$row['name'];
    $attendence_log[$fac_name] = $row['status'];
    $classes_count[$fac_name] = 0;
}

//checking for availability
function is_available($fac,$stime,$etime,$conn){
    $day = date('D');
    $fac_avai_q = "select * from subjects where day='$day'";
    $fac_avai_res = $conn->query($fac_avai_q);
    while($fac_avai_row = $fac_avai_res->fetch_assoc()){
        if($fac_avai_row['faculty'] == $fac){
            $st = (explode(":",$stime));
            $et = (explode(":",$etime));
            $p_st = (explode(":",$fac_avai_row['start-time']));
            $p_et = (explode(":",$fac_avai_row['end-time']));
            $qs = (int)($st[0].$st[1]);
            $qe = (int)($et[0].$et[1]);
            $ms = (int)($p_st[0].$p_st[1]);
            $me = (int)($p_et[0].$p_et[1]);
            if($qs == $ms){
                    {
                    return  false;}
            }
            else if($qs<$ms){
                if($qe <= $ms){}
                else
                    { return false;}
            }
            else{
                if($qs >= $me){}
                    else
                        {return false;}
            }

        }
    }
    $dt = date('d-m-Y');
    $fac_avai_q = "select * from modulator where date='$dt'";
    $fac_avai_res = $conn->query($fac_avai_q);
    while($fac_avai_row = $fac_avai_res->fetch_assoc()){
        if($fac_avai_row['faculty'] == $fac){
            $st = (explode(":",$stime));
            $et = (explode(":",$etime));
            $p_st = (explode(":",$fac_avai_row['start-time']));
            $p_et = (explode(":" ,$fac_avai_row['end-time']));
            $qs = (int)($st[0].$st[1]);
            $qe = (int)($et[0].$et[1]);
            $ms = (int)($p_st[0].$p_st[1]);
            $me = (int)($p_et[0].$p_et[1]);
            if($qs == $ms ){
                    {
                    return  false;
                }
            }
            else if($qs<$ms){
                if($qe <= $ms){}
                else
                    { return false;}
            }
            else{
                if($qs >= $me){}
                    else
                        {return false;}
            }

        }
    }
    return true; 
}
//checking for exchange 
function is_exchange($fac,$stime,$etime,$conn,$attendence_log){
    $chk_ex_q = "select * from exchange where class_to='$fac'";
    $chk_ex_res = $conn->query($chk_ex_q);
    while($ex_row = $chk_ex_res->fetch_assoc()){
        if(is_available($ex_row['class_from'],$stime,$etime,$conn) && $attendence_log[$ex_row['class_from']] == 1){
            return $ex_row['auto-code'];
        }
    }
    return 0;
}
//freshing up the modulator
$dt= date("d-m-Y");
$del_mod_q = "delete from modulator where date='$dt'";
if($conn->query($del_mod_q)){} 
//rescheduler program
$day = date('D');
$subs_q = "select * from subjects where day = '$day'";
$subs_res = $conn->query($subs_q);
while($subs_row = $subs_res->fetch_assoc()){
        $t_scode=$subs_row['code'];
        $t_speriod=$subs_row['period-no'];
        $t_ssub=$subs_row['subject'];
        $t_sfac=$subs_row['faculty'];
        $t_sstime=$subs_row['start-time'];
        $t_setime=$subs_row['end-time'];
        $t_sday=$subs_row['day'];
        #echo $t_ssub;
       // echo $t_ssub."<br>";
    if(array_key_exists($t_sfac,$attendence_log) && $attendence_log[$t_sfac] == 0){
        $ex_fac = is_exchange($t_sfac,$t_sstime,$t_setime,$conn,$attendence_log);
        if($ex_fac == 0){
            $fami_q = "select * from faculty where sp1='$t_ssub' or sp2='$t_ssub' or sp3='$t_ssub' or sp4='$t_ssub' or sp5='$t_ssub' or sp6='$t_ssub' or sp7='$t_ssub' or sp8='$t_ssub' or sp9='$t_ssub' or s10='$t_ssub'";
            $fami_res = $conn->query($fami_q);
            $fami_flag = 0;
            while($fami_row = $fami_res->fetch_assoc()){
               if(array_key_exists($fami_row['name'],$attendence_log) && $attendence_log[$fami_row['name']] == 1 && is_available($fami_row['name'],$t_sstime,$t_setime,$conn)){
                if($classes_count[$fami_row['name']] <= 3){
                    $classes_count[$fami_row['name']]++;
                    $ex_n_fac = $fami_row['name'];
                    $mos_ins = "insert into modulator values('$t_scode',$t_speriod,'$t_ssub','$ex_n_fac','$t_sstime','$t_setime','$t_sday',1,'$dt')";
                    if($conn->query($mos_ins)){
                        if(array_key_exists($ex_n_fac,$classes_count))
                                $classes_count[$ex_n_fac]++;
                        $fami_flag = 1;
                        break;
                    }
                    else{echo $conn -> error;}
                    }
                    else{
                    }
                }
            }
            if($fami_flag == 1){}
            else{
                //echo "fami-flag  = ".$fami_flag."<br>";
                //echo $
                $last_flag = 0;
                $last_q = "select * from faculty";
                $last_res = $conn->query($last_q);
                while($last_row = $last_res->fetch_assoc()){
                    if($attendence_log[$last_row['name']] == 1 && $classes_count[$last_row['name']] <=3 && is_available($last_row['name'],$t_sstime,$t_setime,$conn)){
                        $ex_n_fac = $last_row['name'];
                          $mos_ins = "insert into modulator values('$t_scode',$t_speriod,'$t_ssub','$ex_n_fac','$t_sstime','$t_setime','$t_sday',1,'$dt')";

                        if($conn->query($mos_ins)){
                            if(array_key_exists($ex_n_fac,$classes_count))
                                $classes_count[$ex_n_fac]++;
                            $last_flag = 1;
                            break;
                        }
                        else{echo $conn -> error;}
                    }
                }
                if($last_flag == 1){}
                else{
                          $mos_ins = "insert into modulator values('$t_scode',$t_speriod,'$t_ssub','$t_sfac','$t_sstime','$t_setime','$t_sday',2,'$dt')";
                        if($conn->query($mos_ins)){
                            if(array_key_exists($t_sfac,$classes_count))
                                $classes_count[$t_sfac]++;
                        }
                        else{echo $conn -> error;}
                }
            }
        }
        else{
            $ex_ins_q = "select * from exchange where `auto-code` = $ex_fac";
            $ex_ins_res = $conn->query($ex_ins_q);
            $ex_ins_row = $ex_ins_res->fetch_assoc();
            $ex_n_fac = $ex_ins_row['class_from'];
            $mos_ins = "insert into modulator values('$t_scode',$t_speriod,'$t_ssub','$ex_n_fac','$t_sstime','$t_setime','$t_sday',1,'$dt')";
            if($conn->query($mos_ins)){
                if(array_key_exists($ex_n_fac,$classes_count))
                                $classes_count[$ex_n_fac]++;
            }
            else{
                echo $conn -> error;
            }
        }
    }
    else{
        $mos_ins = "insert into modulator values('$t_scode',$t_speriod,'$t_ssub','$t_sfac','$t_sstime','$t_setime','$t_sday',0,'$dt')";
            if($conn->query($mos_ins)){
                if(array_key_exists($t_sfac,$classes_count))
                                $classes_count[$t_sfac]++;
            }
            else{
                echo $conn -> error;
            }
    }
}

?>
<button class="au-btn au-btn-icon au-btn--blue" id="myBtn"><i class="zmdi zmdi-plus"></i>new timetable</button>
 <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <div class="notifi-dropdown js-dropdown">

                                        </div>
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


<?php
$aa=date('D');
$sql = "SELECT * FROM timetables where ".$aa."=1";
$result = $conn->query($sql);
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {     
		$code = $row['code']; 
		$sql = "SELECT * FROM modulator where code='$code' and day='$aa'";
		$result = $conn->query($sql);
		if($result->num_rows == 0){
			$sql = "SELECT * FROM subjects where code='$code' and day='$aa'";
			$result = $conn->query($sql);
			while($row66 = $result->fetch_assoc()) {   
				$R_code=$row66['code'];
				$R_period_no=$row66['period-no'];
				$R_subject=$row66['subject'];
				$R_faculty=$row66['faculty'];
				$R_start_time=$row66['start-time'];
				$R_end_time=$row66['end-time'];
				$R_day=$row66['day'];
				$sql = "INSERT INTO modulator  values('$R_code',$R_period_no,'$R_subject','$R_faculty','$R_start_time','$R_end_time','$R_day',0)";
				if ($conn->query($sql) === TRUE) {}
			}
		}
		else{break;}
	}
}

?>









<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span><center>
    <form action=index.php method=POST>
	Branch : 	<select id=sel_style name=branch>
		<option>CSE</option>
		<option>IT</option>
		<option>ECE</option>
		<option>EEE</option>
		<option>MECH</option>
		<option>CIVIL</option>
		<option>CHEM</option>
		</select>
	Semister : 	<select id=sel_style name=semister>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		</select>
	Section : 	<select id=sel_style name=section>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		</select><br>
	Schedule Days :&nbsp
	<input type=text value="off" name=d1 hidden>
	<input type=text value="off" name=d2 hidden>
	<input type=text value="off" name=d3 hidden>
	<input type=text value="off" name=d4 hidden>
	<input type=text value="off" name=d5 hidden>
	<input type=text value="off" name=d6 hidden>
	<input type=text value="off" name=d7 hidden>

<br>
	<input type=checkbox name=d1 id=cb_style checked> MONDAY  &nbsp&nbsp&nbsp&nbsp<input type=checkbox name=d2 id=cb_style checked> TUESDAY
	&nbsp&nbsp&nbsp&nbsp<input type=checkbox name=d3 id=cb_style checked> WEDNESDAY <br><input type=checkbox name=d4 id=cb_style checked> THURSDAY
	&nbsp&nbsp&nbsp&nbsp<input type=checkbox name=d5 id=cb_style checked> FRIDAY&nbsp&nbsp&nbsp&nbsp<input type=checkbox name=d6 id=cb_style checked> SATURDAY
	&nbsp&nbsp&nbsp&nbsp<input type=checkbox name=d7 id=cb_style > SUNDAY<br>
<br>
Number Of Periods Per Day : <input type=numberyo id="tb_style" name="noofsub" required> 
<br>
<br>
Admin Code : <input type=password id="tb_style" name="admincode" required> 
<br><br>
<div class="panel panel-default">
  <div class="panel-body">
<input type="text" id="tb_style" name="subjects[]" value="" placeholder="Enter Subject" required>
<input type="text" id="tb_style" name="faculty[]" value="" placeholder="Enter Faculty Name" required>
<input type="text" id="tb_style" name="time_start[]" value="" placeholder="Start TIme(HH:MM)" required>
<input type="text" id="tb_style" name="time_end[]" value="" placeholder="End Time (HH:MM)" required>
  <br><br>
  <div id="education_fields">
        </div>
<div class="col-sm-3 nopadding">
  <div class="form-group">
    <div class="input-group">
      <div class="input-group-btn">
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<button class="btn btn-success" type="button"  onclick="education_fields();"> ADD <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
      </div>
    </div>
</div>
    </div>
  </div>
<input type=submit id=but_style name=newtimetable><input type=reset id=but_style>	
</center>
   </form>
  </div>
</div>
<script>
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0]; 
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">

<?php
$a=date('d-m-Y');
$sql = "SELECT * FROM attendence where date='$a' and status=1";
$result = $conn->query($sql);
$ma=$result->num_rows;
echo "<h2>$ma</h2>
<span>Faculty Attended</span><br>
<span>Today ($a)</span>";

?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
			<i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                               
<?php
$d = date("D");
$er = date("d-m-Y");
$sq = "SELECT * FROM `modulator` WHERE rechedule=1 and day='$d' group by code";
$resu = $conn->query($sq);
echo "<h2>".$resu->num_rows."</h2>";
echo "<span>Timetable Rescheduled Today(".$er.")</span>";
?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">

<?php
$a=date('D');
$da=date('d-m-Y');
$sql = "SELECT * FROM timetables where ".$a."=1";
$result = $conn->query($sql);
$ma=$result->num_rows;
echo "<h2>$ma</h2>
 <span>Schedules Running</span><br>
<span>Today ($da)</span>";
 ?>                                           
</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                               <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
<?php
$da =date("D");
$sq = "select * from modulator where day='$da' and rechedule=2";
$reult = $conn->query($sq);
$ma=$reult->num_rows;
echo " <h2>".$ma."</h2> ";
                                        
?>
					<span>Classes Suspended today</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Today Cancelled Classes</h3>
                                        <div class="chart-info">
                                            <div class="chart-info__left">
                                            </div>
                                        </div>
<?php
$dt = date('d-m-Y');
$re_q = "select * from modulator where date='$dt' and rechedule=2";
//echo $re_q;
$re_res = $conn->query($re_q);
while($re_row = $re_res->fetch_assoc()){
    $ret = $re_row['subject'];
    echo '
<div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
                        '.$ret.'
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">    
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
    ';
}
?>
					
					<div class="recent-report__chart">

                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-lg-6">
                                <div class="au-card chart-percent-card">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 tm-b-5">Today Resheduled Classes</h3>
                                        <div class="row no-gutters">
                                            <div class="col-xl-6">
                                                <div class="chart-note-wrap">
<?php
$dt = date('d-m-Y');
$re_q = "select * from modulator where date='$dt' and rechedule=1";
//echo $re_q;
$re_res = $conn->query($re_q);
while($re_row = $re_res->fetch_assoc()){
    $ret = $re_row['subject'];
    $fac = $re_row['faculty'];
    echo " <div class='chart-note mr-0 d-block'>$ret<br>($fac)</div>   ";
}
?>
                                                    

                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="percent-chart">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
<?php					
$ds1=date('d');
$ds2=date('M');
$ds3=date('Y');		
echo '<i class="zmdi zmdi-account-calendar"></i>'.$ds1.' '.$ds2.' '.$ds3.'</h3>';
?>
                                       
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="au-task__title">
                                            <p>Running schedules</p>
                                        </div>
<?php
$d=date('D');
$sql = "SELECT * FROM timetables where ".$d."=1";
$result = $conn->query($sql);
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
				$branch = $row['branch'];
				$sec = $row['section'];
				$sem = $row['semister'];
				echo '
                                            <div class="au-task__item au-task__item--danger">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">'.$branch.' - '.$sec.'</a>
                                                    </h5>';

                               	if($sem == 1)
					echo '<span class="time">'.$sem.'st Semister</span>';
				if($sem == 2)
					echo '<span class="time">'.$sem.'nd Semister</span>';
				if($sem == 3)
					echo '<span class="time">'.$sem.'rd Semister</span>';
				if($sem > 3)
					echo ' <span class="time">'.$sem.'th Semister</span>';
                                               echo '</div>
                                            </div>
				';
	}
}


?>
                                        </div>
                                        <div class="au-task__footer">
                                            <button class="au-btn au-btn-load js-load-btn">load more</button>

 

                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
<?php
if(isset($_POST['newtimetable'])){
    $admin_chk_q  = "select * from admin";
    $admin_chk_res = $conn->query($admin_chk_q);
    $row = $admin_chk_res->fetch_assoc();
$ad_code = $_POST['admincode'];
 if($ad_code == $row['pass']){
$branch = $_POST['branch'];
$semister = $_POST['semister'];
$section = $_POST['section'];
$code=$branch.$semister.$section;
$noofsub=$_POST['noofsub'];
$d1=$_POST['d1'];
$d2=$_POST['d2'];
$d3=$_POST['d3'];
$d4=$_POST['d4'];
$d5=$_POST['d5'];
$d6=$_POST['d6'];
$d7=$_POST['d7'];
if($d1 == "on")
$d1=1;
else
$d1=0;
if($d2 == "on")
$d2=1;
else
$d2=0;
if($d3 == "on")
$d3=1;
else
$d3=0;
if($d4 == "on")
$d4=1;
else
$d4=0;
if($d5 == "on")
$d5=1;
else
$d5=0;
if($d6 == "on")
$d6=1;
else
$d6=0;
if($d7 == "on")
$d7=1;
else
$d7=0;
$sql = "INSERT INTO timetables  values('$code','$branch','$semister','$section','$noofsub',$d1,$d2,$d3,$d4,$d5,$d6,$d7)";
if ($conn->query($sql) == TRUE) 
  {

echo "<script>  alert('TimeTable Created Successfully!');</script>";
$subs=$_POST['subjects'];
$fac=$_POST['faculty'];
$st=$_POST['time_start'];
$et=$_POST['time_end'];
$ind=0;
if($d1 == 1){
	for($i=0;$i<$noofsub;$i++){
		$per_no=$i+1;
		$cur_sub=$subs[$ind];
		$cur_fac=$fac[$ind];
		$cur_st=$st[$ind];
		$cur_et=$et[$ind];
		$ind++;
		$sqlq1 = "INSERT INTO subjects  values('$code','$per_no','$cur_sub','$cur_fac','$cur_st','$cur_et','Mon')";
		if ($conn->query($sqlq1) == TRUE){
			$poppp = "INSERT INTO modulator values('$code','$per_no','$cur_sub','$cur_fac','$cur_st','$cur_et','Mon',0)";
			$conn->query($poppp);
		}
	}
}

if($d2 == 1){
	for($i=0;$i<$noofsub;$i++){
		$per_no=$i+1;
		$cur_sub=$subs[$ind];
		$cur_fac=$fac[$ind];
		$cur_st=$st[$ind];
		$cur_et=$et[$ind];
		$ind++;
		$sqlq1 = "INSERT INTO subjects  values('$code','$per_no','$cur_sub','$cur_fac','$cur_st','$cur_et','Tue')";
		$sqlq2 = "INSERT INTO modulator  values('$code','$per_no','$cur_sub','$cur_fac','$cur_st','$cur_et','Tue',0)";
		if ($conn->query($sqlq1) === TRUE && $conn->query($sqlq2) === TRUE) 
 			 echo "";
	}
}
if($d3 == 1){
	for($i=0;$i<$noofsub;$i++){
		$per_no=$i+1;
		$cur_sub=$subs[$ind];
		$cur_fac=$fac[$ind];
		$cur_st=$st[$ind];
		$cur_et=$et[$ind];
		$ind++;
		$sqlq1 = "INSERT INTO subjects  values('$code','$per_no','$cur_sub','$cur_fac','$cur_st','$cur_et','Wed')";
		$sqlq2 = "INSERT INTO modulator  values('$code','$per_no','$cur_sub','$cur_fac','$cur_st','$cur_et','Wed',0)";
		if ($conn->query($sqlq1) == TRUE && $conn->query($sqlq2) == TRUE) 
 			 echo "";
	}
}
if($d4 == 1){
	for($i=0;$i<$noofsub;$i++){
		$per_no=$i+1;
		$cur_sub=$subs[$ind];
		$cur_fac=$fac[$ind];
		$cur_st=$st[$ind];
		$cur_et=$et[$ind];
		$ind++;
		$sqlq1 = "INSERT INTO subjects  values('$code','$per_no','$cur_sub','$cur_fac','$cur_st','$cur_et','Thu')";
		$sqlq2 = "INSERT INTO modulator  values('$code','$per_no','$cur_sub','$cur_fac','$cur_st','$cur_et','Thu',0)";
		if ($conn->query($sqlq1) === TRUE && $conn->query($sqlq2) === TRUE) 
 			 echo "";
	}
}
if($d5 == 1){
	for($i=0;$i<$noofsub;$i++){
		$per_no=$i+1;
		$cur_sub=$subs[$ind];
		$cur_fac=$fac[$ind];
		$cur_st=$st[$ind];
		$cur_et=$et[$ind];
		$ind++;
		$sqlq1 = "INSERT INTO subjects  values('$code','$per_no','$cur_sub','$cur_fac','$cur_st','$cur_et','Fri')";
		$sqlq2 = "INSERT INTO modulator  values('$code','$per_no','$cur_sub','$cur_fac','$cur_st','$cur_et','Fri',0)";
		if ($conn->query($sqlq1) === TRUE && $conn->query($sqlq2) === TRUE) 
 			 echo "";
	}
}
if($d6 == 1){
	for($i=0;$i<$noofsub;$i++){
		$per_no=$i+1;
		$cur_sub=$subs[$ind];
		$cur_fac=$fac[$ind];
		$cur_st=$st[$ind];
		$cur_et=$et[$ind];
		$ind++;
		$sqlq1 = "INSERT INTO subjects  values('$code','$per_no','$cur_sub','$cur_fac','$cur_st','$cur_et','Sat')";
		$sqlq2 = "INSERT INTO modulator  values('$code','$per_no','$cur_sub','$cur_fac','$cur_st','$cur_et','Sat',0)";
				
		if ($conn->query($sqlq1) === TRUE && $conn->query($sqlq2) === TRUE) 
 			 echo "";
	}
}
if($d7 == 1){
	for($i=0;$i<$noofsub;$i++){
		$per_no=$i+1;
		$cur_sub=$subs[$ind];
		$cur_fac=$fac[$ind];
		$cur_st=$st[$ind];
		$cur_et=$et[$ind];
		$ind++;
		$sqlq1 = "INSERT INTO subjects  values('$code','$per_no','$cur_sub','$cur_fac','$cur_st','$cur_et','Sun')";
		$sqlq2= "INSERT INTO modulator values('$code','$per_no','$cur_sub','$cur_fac','$cur_st','$cur_et','Sun',0)";
		
		if ($conn->query($sqlq1) === TRUE && $conn->query($sqlq2) === TRUE) 
 			 echo "";
	}
}
}
else
 echo "<script>  alert('TimeTable Already Exists');</script>";
}
else{
echo "<script>  alert('Admin Authenticate Fail');</script>";
}
}
?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

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

</html>
