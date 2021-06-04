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
if(isset($_POST['mark_it'])){

}
?>
<?php
if(isset($_POST['mark_absent'])){
    $name = $_POST['fac_name'];
    $pasw = $_POST['pswd'];
    $chk_pasw_q = "select * from faculty where name= '$name'";
    $chk_pasw_res = $conn->query($chk_pasw_q);
    $chk_row = $chk_pasw_res->fetch_assoc();
    if($pasw == $chk_row['password']){
        $dt = date("d-m-Y");
        $upd_attend_q  = "update attendence set status = 0,time='-' where date='$dt' and name='$name'";
        echo $upd_attend_q;
        if($conn->query($upd_attend_q)){}
    }
    else{
        echo "<script>alert('authentication failed for update')</script>";
    } 
    
}
?>
<?php
if(isset($_POST['mark_present'])){
    date_default_timezone_set('Asia/Kolkata');
    $org_time=date('h:i:s');
    $name = $_POST['fac_name'];
    $dt = date("d-m-Y");
    $pasw = $_POST['pswd'];
    $chk_pasw_q = "select * from faculty where name= '$name'";
    $chk_pasw_res = $conn->query($chk_pasw_q);
    $chk_row = $chk_pasw_res->fetch_assoc();
    if($pasw == $chk_row['password']){
    $upd_attend_q  = "update attendence set status = 1,time='$org_time' where date='$dt' and name='$name'";
    echo $upd_attend_q;
    if($conn->query($upd_attend_q)){}}
        else{
              echo "<script>alert('authentication failed for update')</script>";
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
    <title>Tables</title>

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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.city {display:none}
#font_ele{
	border-radius:10px;
	width:100%;
word-wrap: break-word;
    word-break: break-all;
}
#font_ele_ta{
border-radius:10px;
	width:100%;
word-wrap: break-word;
    word-break: break-all;
}
#sp_div{
	margin-left:20%;
	margin-right:20%;
}
.form-style-1 {
    margin:10px auto;
    max-width: 400px;
    padding: 20px 12px 10px 20px;
    font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-style-1 li {
    padding: 0;
    display: block;
    list-style: none;
    margin: 10px 0 0 0;
}
.form-style-1 label{
    margin:0 0 3px 0;
    padding:0px;
    display:block;
    font-weight: bold;
}
.form-style-1 input[type=text], 
.form-style-1 input[type=date],
.form-style-1 input[type=datetime],
.form-style-1 input[type=number],
.form-style-1 input[type=search],
.form-style-1 input[type=password],
.form-style-1 input[type=time],
.form-style-1 input[type=url],
.form-style-1 input[type=email],
textarea, 
select{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    border:1px solid #BEBEBE;
    padding: 7px;
    margin:0px;
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;
    outline: none;  
}
.form-style-1 input[type=text]:focus, 
.form-style-1 input[type=date]:focus,
.form-style-1 input[type=datetime]:focus,
.form-style-1 input[type=number]:focus,
.form-style-1 input[type=search]:focus,
.form-style-1 input[type=password]:focus,
.form-style-1 input[type=time]:focus,
.form-style-1 input[type=url]:focus,
.form-style-1 input[type=email]:focus,
.form-style-1 textarea:focus, 
.form-style-1 select:focus{
    -moz-box-shadow: 0 0 8px #88D5E9;
    -webkit-box-shadow: 0 0 8px #88D5E9;
    box-shadow: 0 0 8px #88D5E9;
    border: 1px solid #88D5E9;
}
.form-style-1 .field-divided{
    width: 49%;
}

.form-style-1 .field-long{
    width: 100%;
}
.form-style-1 .field-select{
    width: 100%;
}
.form-style-1 .field-textarea{
    height: 100px;
}
.form-style-1 input[type=submit], .form-style-1 input[type=button]{
    background: #4B99AD;
    padding: 8px 15px 8px 15px;
    border: none;
    color: #fff;
}
.form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover{
    background: #4691A4;
    box-shadow:none;
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
}
.form-style-1 .required{
    color:red;
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
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="timetables.php">
                                <i class="fas fa-chart-bar"></i>Timetables</a>
                        </li>
                        <li>
                            <a href="faculty.php">
                                <i class="fas fa-table"></i>Faculty</a>
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
                        <li class="has-sub">
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
                        <li class="active">
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
           <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Update Password</button>
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
                            <div class="col-lg-9">
                                <div class="table-responsive table--no-card m-b-30">

                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>name</th>
                                                <th>email</th>
                                                <th>decsription</th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php
$sql = "SELECT * FROM faculty";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
$piss1=$row['name'];
$piss2=$row['email'];
$piss3=$row['description'];
    echo "<tr>
                                                <td>$piss1</td>
                                                <td>$piss2</td>
                                                <td>$piss3</td>
                                            </tr>";
  }
} 
else {
  echo "";
}

                                            

?>
<?php
if(isset($_POST['faculty_register'])){
$name=$_POST['name'];
$email=$_POST['email'];
$description=$_POST['description'];
$count=$_POST['count'];
$pswd = $_POST['pswd'];
echo "<div id=sp_div><center>
<form action=faculty.php method=POST>
<input type=text value='$name' hidden name=name>
<input type=password value='$pswd' hidden name=pswd>
<input type=text value='$email' hidden name=email>
<input type=text value='$description' hidden name=description>
<input type=text value=$count hidden name=count>
";
if($count>=1)
echo "Specialized Subject 1 : <input type=text name=sp1 id=font_ele><br>";
if($count>=2)
echo "Specialized Subject 2 : <input type=text name=sp2 id=font_ele><br>";
if($count>=3)
echo "Specialized Subject 3 : <input type=text name=sp3 id=font_ele><br>";
if($count>=4)
echo "Specialized Subject 4 : <input type=text name=sp4 id=font_ele><br>";
if($count>=5)
echo "Specialized Subject 5 : <input type=text name=sp5 id=font_ele><br>";
if($count>=6)
echo "Specialized Subject 6 : <input type=text name=sp6 id=font_ele><br>";
if($count>=7)
echo "Specialized Subject 7 : <input type=text name=sp7 id=font_ele><br>";
if($count>=8)
echo "Specialized Subject 8 : <input type=text name=sp8 id=font_ele><br>";
if($count>=9)
echo "Specialized Subject 9 : <input type=text name=sp9 id=font_ele><br>";
if($count==10)
echo "Specialized Subject 10 : <input type=text name=sp10 id=font_ele><br>";
echo " <br><input type=submit class='btn btn-primary btn-sm' name=add_faculty>&nbsp&nbsp
<button type=reset class='btn btn-danger btn-sm'>Reset</button></form></center></div><br><br>";
}
?>
<?php
if(isset($_POST['add_faculty'])){
$name=$_POST['name'];
$email=$_POST['email'];
$description=$_POST['description'];
$count=$_POST['count'];
$pswd = $_POST['pswd'];
$s1=$s2=$s3=$s4=$s5=$s6=$s6=$s7=$s8=$s9=$s10='0';
if($count>=1)
$s1=$_POST['sp1'];
if($count>=2)
$s2=$_POST['sp2'];
if($count>=3)
$s3=$_POST['sp3'];
if($count>=4)
$s4=$_POST['sp4'];
if($count>=5)
$s5=$_POST['sp5'];
if($count>=6)
$s6=$_POST['sp6'];
if($count>=7)
$s7=$_POST['sp7'];
if($count>=8)
$s8=$_POST['sp8'];
if($count>=9)
$s9=$_POST['sp9'];
if($count>=10)
$s10=$_POST['sp10'];

$sql = "INSERT INTO faculty  values('$name','$description','$email','$pswd','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9','$s10')";
if ($conn->query($sql) === TRUE) {
  echo "<div class='sufee-alert alert with-close alert-primary alert-dismissible fade show'>
<span class='badge badge-pill badge-primary'>Oh Yeah !!!</span>
Faculty added successfully.
<button type=button class=close data-dismiss=alert aria-label=Close>
<span aria-hidden=true>&times;</span>
</button>
</div>";
} else {
  echo "	
<div class='sufee-alert alert with-close alert-danger alert-dismissible fade show'>
<span class='badge badge-pill badge-danger'>Sorry !!!</span>
Faculty name already exists.
<button type=button class=close data-dismiss=alert aria-label=Close>
<span aria-hidden=true>&times;</span>
</button>
</div>";
}

}
?>





                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-30">
                                    <div class="au-card-inner">
                                        <div class="table-responsive"><font color=black><b><u>ADD FACULTY</u></b>
<?php
$ad_q = "select * from admin";
$ad_res = $conn->query($ad_q);
$ad_row = $ad_res->fetch_assoc();
$passs=$ad_row['pass'];
                                            echo "<div id=temp><br>To get the faculty form submit the admin password<br><br>Admin Code : <br><form method=POST action=faculty.php><input type=password id=adminpass placeholder='enter admin code' name=adminpass required><input type=password id=adminpass name=adpass value=".$passs." hidden><br><br> <button type=submit name=adchk class='btn btn-danger btn-sm'>Get Form</button><br><br></form></div>";
                                            ?>

<?php
if(isset($_POST['adchk'])){
$a = $_POST['adminpass'];
$b = $_POST['adpass'];

if($a == $b){
    echo "<script>document.getElementById('temp').style.display = 'none';</script>";
echo '
<form action=faculty.php method=POST id=facform>
<br>Name : <br>
<input type=text name=name id=font_ele required>
<br>Email : <br>
<input type=text name=email id=font_ele required>
<br> Specialization Subject : <br><select name=count required>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
</select>
<br> Password : <br>
<input type=password id=font_ele name=pswd required="">
<br>Description : <br><textarea id=font_ele_ta name=description required></textarea>
 <input type=submit class="btn btn-primary btn-sm" name="faculty_register">
<button type="reset" class="btn btn-danger btn-sm">Reset</button>
</form>
';}
}
?>



</font> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- USER DATA-->
                                <div class="user-data m-b-30">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>Today Report</h3>
                                    <div class="filters m-b-45">
                                       
                                    </div>
                                    <div class="table-responsive table-data">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <td>name</td>
                                                    <td>status</td>
                                                    <td>time</td>
                                                </tr>
                                            </thead>
		<tbody>
<?php

$date=date('d-m-Y');
$sql1 = "SELECT * FROM attendence where date='$date'";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
$indx=0;
while($row = $result1->fetch_assoc()) {
$indx++;
$name=$row['name'];
$email=$row['email'];
$status=$row['status'];
$time=$row['time'];
echo"
			<tr>
                                                    <td>
                                                        <div class='table-data__info'>
                                                            <h6>$name</h6>
                                                            <span>
                                                                <a href='#'>$email</a>
                                                            </span>
                                                        </div>
                                                    </td>
";
if($status == 0){
$id="box_id_".$indx;
echo "
                                                    <td>
			<button type=button class='btn btn-danger btn-sm'>Not Attended</button>
			<p id=$id></p>
                                                    </td>
			<td>
			$time
			</td><td><form action='faculty.php' method=POST><input type=password placeholder='enter your password here' name=pswd><td><input type=text name='fac_name' value=$name hidden><button type=submit name='mark_present'><span class='role user''>Mark Present</span></button></form></td>";
}
else{
echo "<td>
                                                        <span class='role user'>Attended</span>
                                                    </td>
			<td>
			$time
			</td><td><form action='faculty.php' method=POST><input type=password name=pswd placeholder='enter your password here'><td><input type=text name='fac_name' value=$name hidden><button type=submit name='mark_absent'><span class='btn btn-danger btn-sm'>Mark Absent</span></button></form></td>";
}



echo "
                                                </tr>
		";
}
}
?>






                                                </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END USER DATA-->
                            </div>
                            <div class="col-lg-6">
                                <!-- TOP CAMPAIGN-->
                                <div class="top-campaign">
                                    <h3 class="title-3 m-b-30">Attendence Percentage</h3>
                                    <div class="table-responsive">
                                        <table class="table table-top-campaign">
                                            <tbody>
<?php
$sql15 = "SELECT * FROM faculty";
$result15 = $conn->query($sql15);
if ($result15->num_rows > 0) {
while($row15 = $result15->fetch_assoc()) {  
$name=$row15['name'];
$pre=0;
$abs=0;
$sqlrt = "SELECT * FROM attendence where name='$name' ";
$resultrt = $conn->query($sqlrt);
 while($rowrt = $resultrt->fetch_assoc()) {      
if($rowrt['status']==0)
$abs++;
else
$pre++;
}
if(($pre+$abs) != 0)
	$per=(int)($pre*100/($pre+$abs));
else
	$per=0;
echo"

                                                <tr>
                                                    <td>$row15[name]</td>
                                                    <td>$per%</td>
                                                </tr>
";
}
}
?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--  END TOP CAMPAIGN-->
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



<?php
if(isset($_POST['adminupdate'])){
    $opass = $_POST['opass'];
    $npass1 = $_POST['npass1'];
    $npass2 = $_POST['npass2'];
    $q = "select * from admin";
    $res = $conn->query($q);
    $row = $res->fetch_assoc();
    if($row['pass'] == $opass){
        if($npass1 == $npass2){
            $q = "update admin set pass='".$npass1."' where 1";
            if($conn->query($q)){
                echo "<script>alert('Password successfully changed');</script>"; 
            }
        }
        else{
            echo "<script>alert('New Password and Confirm Password Does not match');</script>"; 
        }
    }
    else{
        echo "<script>alert('Old Password Does not Match');</script>";
    }
}
if(isset($_POST['facupdate'])){
    $name=$_POST['name'];
    $q = "select * from faculty where name='".$name."'";
    $res = $conn->query($q);
    $row = $res->fetch_assoc();
    $opass =  $_POST['opass'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    if($row['password'] == $opass){
        if($pass1 == $pass2){
            $q = "update faculty set password='".$pass1."' where name='".$name."'";
            if($conn->query($q)){
                echo "<script>alert('Password successfully changed');</script>"; 
            }
        }
        else{
            echo "<script>alert('New Password and Confirm Password Does not match');</script>"; 
        }
    }
    else{
        echo "<script>alert('Old Password Does not Match');</script>";
    }
    
}
?>
 <div id="id01" class="w3-modal">
 <div class="w3-modal-content w3-card-4 w3-animate-zoom">
  <header class="w3-container w3-blue"> 
   <span onclick="document.getElementById('id01').style.display='none'" 
   class="w3-button w3-blue w3-xlarge w3-display-topright">&times;</span>
   <h2>Update Password</h2>
  </header>

  <div class="w3-bar w3-border-bottom">
   <button class="tablink w3-bar-item w3-button" onclick="openCity(event, 'London')">Faculty</button>
   <button class="tablink w3-bar-item w3-button" onclick="openCity(event, 'Paris')">Admin</button>
  </div>
  <div id="London" class="w3-container city">
   <h1>change faculty password</h1>
   <form action=faculty.php method=POST>
<ul class="form-style-1">
    <li>
        <label>Faculty Name</label>
        <select name="name" class="field-select">
<?php
$f_sel_q = "select * from faculty";
$f_sel_res= $conn->query($f_sel_q);
while($sel_row = $f_sel_res->fetch_assoc()){
    echo "<option>".$sel_row['name']."</option>";
}
?>
        </select>
    </li>
        <li>
        <label>Old Password<span class="required">*</span></label>
        <input type="password" name="opass" class="field-long" required />
    </li>
    <li><label>New Password <span class="required">*</span></label><input id=box1 type="password" name="pass1" class="field-divided" placeholder="New Password" required /><input  id=box2 type="password" name="pass2" class="field-divided" placeholder="Confirm Password" required/></li>
    <li id="marchu">
        <input type="submit" value="Submit" name="facupdate"/>
    </li>
</ul>
</form>

  </div>

  <div id="Paris" class="w3-container city">
   <h1>change admin password</h1>
   <form action=faculty.php method=POST>
<ul class="form-style-1">
        <li>
        <label>Old Password<span class="required">*</span></label>
        <input type="password" name="opass" class="field-long" required />
    </li>
    <li><label>New Password <span class="required">*</span></label><input id=box1 type="password" name="npass1" class="field-divided" placeholder="New Password" required /><input  id=box2 type="password" name="npass2" class="field-divided" placeholder="Confirm Password" required/></li>
    <li id="marchu">
        <input type="submit" value="Submit" name="adminupdate"/>
    </li>
</ul>
</form>
  </div>


  <div class="w3-container w3-light-grey w3-padding">
   <button class="w3-button w3-right w3-white w3-border" 
   onclick="document.getElementById('id01').style.display='none'">Close</button>
  </div>
 </div>
</div>
<script>
document.getElementsByClassName("tablink")[0].click();

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
<script>
function myFunction(a,b,c) {
   mam ="<form action=table method=POST>"+a+b+c;
document.write(mam);
   mam+="<button type=submit name=mart_it><span class='role user'>Mark It</span></button></form>";
  document.getElementById(a).innerHTML = mam;
}
</script>
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
