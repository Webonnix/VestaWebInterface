***REMOVED***
    require 'config.php';
    require 'carray.php';

    if(base64_decode($_COOKIE['loggedin']) == 'true') {***REMOVED***
      else { header('Location: login.php'); ***REMOVED***

    $postvars = array(array('user' => $vst_username,'password' => $vst_password,'cmd' => 'v-list-user','arg1' => $username,'arg2' => 'json'));
  
    $curl0 = curl_init();
    $curlstart = 0; 

    while($curlstart <= 0) {

        curl_setopt(${'curl' . $curlstart***REMOVED***, CURLOPT_URL, $vst_url);
        curl_setopt(${'curl' . $curlstart***REMOVED***, CURLOPT_RETURNTRANSFER,true);
        curl_setopt(${'curl' . $curlstart***REMOVED***, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt(${'curl' . $curlstart***REMOVED***, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt(${'curl' . $curlstart***REMOVED***, CURLOPT_POST, true);
        curl_setopt(${'curl' . $curlstart***REMOVED***, CURLOPT_POSTFIELDS, http_build_query($postvars[$curlstart]));

        $curlstart++;
    ***REMOVED*** 

    $admindata = json_decode(curl_exec($curl0), true)[$username];

***REMOVED***
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/ico" href="favicon.ico">
    <title>Company Name - Account</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link href="bootstrap/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="plugins/bower_components/custom-select/custom-select.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <style>
    .select2-results{
    max-height: 200px;
    padding: 0 0 0 4px;
    margin: 4px 4px 4px 0;
    position: relative;
    overflow-x: hidden;
    overflow-y: auto;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
     ***REMOVED***
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="fix-header">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.5/sweetalert2.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.5/sweetalert2.css" />
***REMOVED***

$pwcode = $_GET['password'];
$emailcode = $_GET['email'];
$langcode = $_GET['lang'];
$nscode = $_GET['ns'];
$namecode = $_GET['name'];
$answer1 = $pwcode + $emailcode + $langcode + $nscode + $namecode;
$answer = (int)$answer1;
if($pwcode != '' || $emailcode != '' || $langcode != '' || $nscode != '' || $namecode != ''){
if($answer == "0") {
    echo "<script> swal({title:'Successfully Updated!', type:'success'***REMOVED***)</script>";
***REMOVED*** 
if($answer == "1" || $answer == "2") { echo "<script> swal('Invalid data entered in form.<br> Please try again.', '<br>"; 
       if($pwcode != '' && $pwcode != "0"){ echo " P: " . $pwcode;***REMOVED***
       if($emailcode != '' && $emailcode != "0"){ echo " E: " . $emailcode;***REMOVED***
       if($langcode != '' && $langcode != "0"){ echo " L: " . $langcode;***REMOVED***
       if($nscode != '' && $nscode != "0"){ echo " NS: " . $nscode;***REMOVED***
       if($namecode != '' && $namecode != "0"){ echo " N: " . $namecode;***REMOVED***
       echo "', 'error')</script>";***REMOVED***
if($answer > "2") { echo "<script> swal('Please try again or contact support.', '<br>"; 
       if($pwcode != '' && $pwcode != "0"){ echo " P: " . $pwcode;***REMOVED***
       if($emailcode != '' && $emailcode != "0"){ echo " E: " . $emailcode;***REMOVED***
       if($langcode != '' && $langcode != "0"){ echo " L: " . $langcode;***REMOVED***
       if($nscode != '' && $nscode != "0"){ echo " NS: " . $nscode;***REMOVED***
       if($namecode != '' && $namecode != "0"){ echo " N: " . $namecode;***REMOVED***
       echo "', 'error')</script>";***REMOVED***
***REMOVED***
***REMOVED***

    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
<nav class="navbar navbar-default navbar-static-top m-b-0">
                    <div class="navbar-header">
                        <div class="top-left-part">
                            <a class="logo" href="index.php">
                                <b>
                                    <img src="plugins/images/admin-logo.png" alt="home" class="dark-logo" />
                                    <img src="plugins/images/admin-logo-dark.png" alt="home" class="light-logo" />
                                </b>
                                <span class="hidden-xs">
                                    <img src="plugins/images/admin-text.png" alt="home" class="dark-logo" />
                                    <img src="plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
                                </span> 
                            </a>
                        </div>
                        <ul class="nav navbar-top-links navbar-left">
                            <li><a href="javascript:void(0)" class="open-close waves-effect waves-light visible-xs"><i class="ti-close ti-menu"></i></a></li>
                        </ul>
                        <ul class="nav navbar-top-links navbar-right pull-right">

                            <li class="dropdown">
                                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"><b class="hidden-xs">***REMOVED*** print_r($uname); ***REMOVED***</b><span class="caret"></span> </a>
                                <ul class="dropdown-menu dropdown-user animated flipInY">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-text">
                                                <h4>
                                                    ***REMOVED*** print_r($uname); ***REMOVED***
                                                </h4>
                                                <p class="text-muted">
                                                    ***REMOVED*** print_r($admindata[CONTACT]); ***REMOVED***
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="profile.php"><i class="ti-home"></i> My Account</a></li>
                                    <li><a href="profile.php?settings=open"><i class="ti-settings"></i> Account Setting</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav slimscrollsidebar">
                        <div class="sidebar-head">
                            <h3>
                                <span class="fa-fw open-close">
                                    <i class="ti-menu hidden-xs"></i>
                                    <i class="ti-close visible-xs"></i>
                                </span> 
                                <span class="hide-menu">Navigation</span>
                            </h3>
                        </div>
                        <ul class="nav" id="side-menu">
                            <li> 
                                <a active href="index.php" class="waves-effect">
                                    <i class="mdi mdi-home fa-fw"></i> <span class="hide-menu">Dashboard</span>
                                </a> 
                            </li>

                            <li class="devider"></li>
                            <li>
                                <a href="#" class="waves-effect"><i  class="ti-user fa-fw"></i><span class="hide-menu"> ***REMOVED*** print_r($uname); ***REMOVED***<span class="fa arrow"></span></span>
                        </a>
                                <ul class="nav nav-second-level collapse" >
                                    <li> <a href="profile.php" id="profileactive"><i class="ti-home fa-fw ***REMOVED*** if($_GET['settings'] == "open") { echo 'text-inverse';***REMOVED*** ***REMOVED***"></i> <span style="***REMOVED*** if($_GET['settings'] == "open") { echo 'color:#54667a;font-weight:300;';***REMOVED*** ***REMOVED***" class="hide-menu"> My Account</span></a></li>
                                    <li> <a href="profile.php?settings=open" id="settingsactive"><i class="ti-settings fa-fw "></i> <span class="hide-menu"> Account Setting</span></a></li>
                                </ul>
                            </li>
                            <li class="devider"></li>
                            <li> <a href="#" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu">Management <span class="fa arrow"></span> </span></a>
                                <ul class="nav nav-second-level">
                                    <li> <a href="web.php"><i class="ti-world fa-fw"></i><span class="hide-menu">Web</span></a> </li>
                                    <li> <a href="dns.php"><i class="fa fa-sitemap fa-fw"></i><span class="hide-menu">DNS</span></a> </li>
                                    <li> <a href="mail.php"><i class="fa fa-envelope fa-fw"></i><span class="hide-menu">Mail</span></a> </li>
                                    <li> <a href="db.php"><i class="fa fa-database fa-fw"></i><span class="hide-menu">Database</span></a> </li>
                                </ul>
                            </li>
                            <li> <a href="cron.php" class="waves-effect"><i  class="mdi mdi-settings fa-fw"></i> <span class="hide-menu">Cron Jobs</span></a> </li>
                            <li> <a href="backups.php" class="waves-effect"><i  class="fa fa-cloud-upload fa-fw"></i> <span class="hide-menu">Backups</span></a> </li>
                            <li class="devider"></li>
                            <li><a href="#" class="waves-effect"><i class="mdi mdi-apps fa-fw"></i> <span class="hide-menu">Apps<span class="fa arrow"></span></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="#"><i class="fa fa-file-code-o fa-fw"></i><span class="hide-menu">FTP</span></a></li>
                                    <li><a href="#"><i class="fa fa-envelope-o fa-fw"></i><span class="hide-menu">Webmail</span></a></li>
                                    <li><a href="#"><i class="fa fa-edit fa-fw"></i><span class="hide-menu">phpMyAdmin</span></a></li>

                                </ul>
                            </li>
                            <li class="devider"></li>
                            <li><a href="logout.php" class="waves-effect"><i class="mdi mdi-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
                            <li class="devider"></li>
                            <li>
                                <a href="#" class="waves-effect"> <i class="fa fa-tachometer fa-fw"></i> <span class="hide-menu"> Control Panel v1</span></a>
                            </li>
                            <li>
                                <a href="#" class="waves-effect"> <i class="fa fa-life-ring fa-fw"></i> <span class="hide-menu">Support</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">My Account</h4> </div>

                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="white-box">
                            <div class="user-bg"> 
                                <div class="overlay-box" style="background: #2cabe3;">
                                    <div class="user-content"><br><br>
                                        <h4 class="text-white">***REMOVED*** print_r($username); ***REMOVED***</h4>
                                        <h5 class="text-white">***REMOVED*** print_r($admindata[CONTACT]); ***REMOVED***</h5> </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <ul class="nav nav-tabs tabs customtab">
                                <li class="***REMOVED*** if($_GET['settings'] != "open") { echo "active tab"; ***REMOVED*** else { echo "tab"; ***REMOVED*** ***REMOVED***" >
                                    <a href="profile.php"> <span class="visible-xs"><i class="fa fa-user"></i></span> <span class="hidden-xs">Account</span> </a>
                                </li>
                                <li class="***REMOVED*** if($_GET['settings'] == "open") { echo "active tab"; ***REMOVED*** else { echo "tab"; ***REMOVED*** ***REMOVED***">
                                    <a href="profile.php?settings=open"> <span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">Settings</span> </a>
                                </li>
                            </ul>
                            <div class="tab-content ">
                                <div class="tab-pane ***REMOVED*** if($_GET['settings'] != "open") { echo "active"; ***REMOVED*** ***REMOVED***" id="profile">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Name</strong>
                                            <br>
                                            <p class="text-muted">***REMOVED*** print_r($admindata[FNAME] . ' ' . $admindata[LNAME]); ***REMOVED***</p>
                                        </div>
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Joined</strong>
                                            <br>
                                            <p class="text-muted">***REMOVED*** $date=date_create($admindata[DATE] . ' ' . $admindata[TIME]);
echo date_format($date,"F j, Y - g:i A"); ***REMOVED***</p>
                                        </div>
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Plan</strong>
                                            <br>
                                            <p class="text-muted">***REMOVED*** print_r(ucfirst($admindata[PACKAGE])); ***REMOVED***</p>
                                        </div>
                                        <div class="col-md-3 col-xs-6"> <strong>Language</strong>
                                            <br>
                                            <p class="text-muted">***REMOVED*** if($admindata[LANGUAGE] == ""){echo "Not Set";***REMOVED*** ***REMOVED*** print_r($countries[$admindata[LANGUAGE]]);***REMOVED*** ***REMOVED***</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <strong>Nameservers:</strong><p class="m-t-30">
                                                                <ul class="dashed">
                                                                    ***REMOVED*** 
                                                                        $nsArray = explode(',', ($admindata[NS])); 

                                                                        foreach ($nsArray as &$value) {
                                                                            $value = "<li>" . $value . "</li>";
                                                                        ***REMOVED***  
                                                                        foreach($nsArray as $val) {
                                                                            echo $val;
                                                                        ***REMOVED*** 
                                                                    ***REMOVED***
                                                                </ul>
                                                            </p>
                                    
                                </div>
                                <div class="tab-pane ***REMOVED*** if($_GET['settings'] == "open") { echo "active"; ***REMOVED*** ***REMOVED***" id="settings">
                                    <form class="form-horizontal form-material" action="updatesettings.php" method="post">
                                        <div class="form-group">
                                            <label for="username" class="col-md-12">Username</label>
                                            <div class="col-md-12">
                                                <input type="text" disabled value="<? print_r($username); ***REMOVED***" class="form-control form-control-line" name="username" id="username"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="col-md-12">Password / <a style="cursor:pointer" onclick="generatePassword(10)"> Generate</a></label>
                                            <div class="col-md-12 input-group" style="padding-left: 15px;">
                                                <input type="password" class="form-control form-control-line" name="password" id="password">                                    <span class="input-group-btn"> 
                                        <button class="btn btn-info" style="margin-right: 15px;" name="Show" onclick="toggler(this)" id="tg" type="button"><i class="ti-eye"></i></button> 
                                    </span>  </div>
                                        </div>
                    

                   <div class="form-group">
                                            <label class="col-sm-6 pull-left">First Name</label><label class="col-sm-6 pull-right">Last Name</label>
                                            <div class="col-sm-6 pull-left">
                                                <input type="text" name="fname" value="<? print_r($admindata[FNAME]); ***REMOVED***" class="form-control form-control-line"> </div>
                                            <div class="col-sm-6 pull-right">
                                                <input type="text" name="lname" value="<? print_r($admindata[LNAME]); ***REMOVED***" class="form-control form-control-line"> </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="email" class="col-md-12">Email</label>
                                            <div class="col-md-12">
                                                <input type="email" value="<? print_r($admindata[CONTACT]); ***REMOVED***" class="form-control form-control-line" name="email" id="email"> </div>
                                        </div>
                                        <div class="form-group" style="overflow: visible;">
                                            <label class="col-md-12">Language</label>
                                            <div class="col-md-12">
                                                <select class="form-control select2" name="language" id="select2">
                                        
									<option value="ar">***REMOVED*** print_r($countries[ar]); ***REMOVED***</option>
									<option value="bs">***REMOVED*** print_r($countries[bs]); ***REMOVED***</option>
									<option value="cn">***REMOVED*** print_r($countries[cn]); ***REMOVED***</option>
									<option value="cz">***REMOVED*** print_r($countries[cz]); ***REMOVED***</option>
									<option value="da">***REMOVED*** print_r($countries[da]); ***REMOVED***</option>
									<option value="de">***REMOVED*** print_r($countries[de]); ***REMOVED***</option>
									<option value="el">***REMOVED*** print_r($countries[el]); ***REMOVED***</option>
									<option value="en">***REMOVED*** print_r($countries[en]); ***REMOVED***</option>
									<option value="es">***REMOVED*** print_r($countries[es]); ***REMOVED***</option>
									<option value="fa">***REMOVED*** print_r($countries[fa]); ***REMOVED***</option>
									<option value="fi">***REMOVED*** print_r($countries[fi]); ***REMOVED***</option>
									<option value="fr">***REMOVED*** print_r($countries[fr]); ***REMOVED***</option>
									<option value="hu">***REMOVED*** print_r($countries[hu]); ***REMOVED***</option>
									<option value="id">***REMOVED*** print_r($countries[id]); ***REMOVED***</option>
									<option value="it">***REMOVED*** print_r($countries[it]); ***REMOVED***</option>
									<option value="ja">***REMOVED*** print_r($countries[ja]); ***REMOVED***</option>
									<option value="ka">***REMOVED*** print_r($countries[ka]); ***REMOVED***</option>
									<option value="nl">***REMOVED*** print_r($countries[nl]); ***REMOVED***</option>
									<option value="no">***REMOVED*** print_r($countries[no]); ***REMOVED***</option>
									<option value="pl">***REMOVED*** print_r($countries[pl]); ***REMOVED***</option>
									<option value="pt-BR">***REMOVED*** print_r($countries[pt-BR]); ***REMOVED***</option>
									<option value="pt">***REMOVED*** print_r($countries[pt]); ***REMOVED***</option>
									<option value="ro">***REMOVED*** print_r($countries[ro]); ***REMOVED***</option>
									<option value="ru">***REMOVED*** print_r($countries[ru]); ***REMOVED***</option>
									<option value="se">***REMOVED*** print_r($countries[se]); ***REMOVED***</option>
									<option value="tr">***REMOVED*** print_r($countries[tr]); ***REMOVED***</option>
									<option value="tw">***REMOVED*** print_r($countries[tw]); ***REMOVED***</option>
									<option value="ua">***REMOVED*** print_r($countries[ua]); ***REMOVED***</option>
									<option value="vi">***REMOVED*** print_r($countries[vi]); ***REMOVED***</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Default Nameservers</label>
                                            <div class="col-md-12">
                                                
<div><input type="text" value="***REMOVED*** print_r(explode(',', ($admindata[NS]))[0]); ***REMOVED***" class="form-control form-control-line" name="ns1" id="ns1x"><br></div>

<div><input type="text" value="***REMOVED*** print_r(explode(',', ($admindata[NS]))[1]); ***REMOVED***" class="form-control form-control-line" name="ns2" id="ns2x"><br><div id="ns2wrapper"><a style="cursor:pointer;" id="addmore" onclick="add1();">Add One</a></div></div>

<div id="ns3" style="display:***REMOVED*** if(explode(',', ($admindata[NS]))[2] == ''){ echo "none"; ***REMOVED*** else { echo "block"; ***REMOVED*** ***REMOVED***"><input type="text" value="***REMOVED*** print_r(explode(',', ($admindata[NS]))[2]); ***REMOVED***" class="form-control form-control-line" name="ns3" id="ns3x"><br><div id="ns3wrapper"><a style="cursor:pointer;" id="addmore1" onclick="add2();">Add One</a> / <a style="cursor:pointer;" id="remove1" onclick="rem2();">Remove One</a></div></div>

<div id="ns4" style="display:***REMOVED*** if(explode(',', ($admindata[NS]))[3] == ''){ echo "none"; ***REMOVED*** else { echo "block"; ***REMOVED*** ***REMOVED***"><input type="text" value="***REMOVED*** print_r(explode(',', ($admindata[NS]))[3]); ***REMOVED***" class="form-control form-control-line" name="ns4" id="ns4x"><br><div id="ns4wrapper"><a style="cursor:pointer;" id="addmore2" onclick="add3();">Add One</a> / <a style="cursor:pointer;" id="remove2" onclick="rem3();">Remove One</a></div></div>

<div id="ns5" style="display:***REMOVED*** if(explode(',', ($admindata[NS]))[4] == ''){ echo "none"; ***REMOVED*** else { echo "block"; ***REMOVED*** ***REMOVED***"><input type="text" value="***REMOVED*** print_r(explode(',', ($admindata[NS]))[4]); ***REMOVED***" class="form-control form-control-line" name="ns5" id="ns5x"><br><div id="ns5wrapper"><a style="cursor:pointer;" id="addmore3" onclick="add4();">Add One</a> / <a style="cursor:pointer;" id="remove3" onclick="rem4();">Remove One</a></div></div>

<div id="ns6" style="display:***REMOVED*** if(explode(',', ($admindata[NS]))[5] == ''){ echo "none"; ***REMOVED*** else { echo "block"; ***REMOVED*** ***REMOVED***"><input type="text" value="***REMOVED*** print_r(explode(',', ($admindata[NS]))[5]); ***REMOVED***" class="form-control form-control-line" name="ns6" id="ns6x"><br><div id="ns6wrapper"><a style="cursor:pointer;" id="addmore4" onclick="add5();">Add One</a> / <a style="cursor:pointer;" id="remove4" onclick="rem5();">Remove One</a></div></div>

<div id="ns7" style="display:***REMOVED*** if(explode(',', ($admindata[NS]))[6] == ''){ echo "none"; ***REMOVED*** else { echo "block"; ***REMOVED*** ***REMOVED***"><input type="text" value="***REMOVED*** print_r(explode(',', ($admindata[NS]))[6]); ***REMOVED***" class="form-control form-control-line" name="ns7" id="ns7x"><br><div id="ns7wrapper"><a style="cursor:pointer;" id="addmore5" onclick="add6();">Add One</a> / <a style="cursor:pointer;" id="remove5" onclick="rem6();">Remove One</a></div></div>

<div id="ns8" style="display:***REMOVED*** if(explode(',', ($admindata[NS]))[7] == ''){ echo "none"; ***REMOVED*** else { echo "block"; ***REMOVED*** ***REMOVED***"><input type="text" value="***REMOVED*** print_r(explode(',', ($admindata[NS]))[7]); ***REMOVED***" class="form-control form-control-line" name="ns8" id="ns8x"><br><div id="ns8wrapper"><a style="cursor:pointer;" id="remove6" onclick="rem7();">Remove One</a></div></div>
</div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success">Update Profile</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center">&copy; 2017 Complex Design Groups. All Rights Reserved. Powered by VestaCP & WrapPixel.</footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <!--Style Switcher -->
    <script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <script src="bootstrap/dist/js/bootstrap-select.min.js"></script>
    <script src="plugins/bower_components/custom-select/custom-select.min.js"></script>
<script>
function toggler(e) {
        if( e.name == 'Hide' ) {
            e.name = 'Show'
            document.getElementById('password').type="password";
        ***REMOVED*** else {
            e.name = 'Hide'
            document.getElementById('password').type="text";
        ***REMOVED***
***REMOVED***
function generatePassword(length) {
	var password = '', character; 
	while (length > password.length) {
		if (password.indexOf(character = String.fromCharCode(Math.floor(Math.random() * 94) + 33), Math.floor(password.length / 94) * 94) < 0) {
			password += character;
		***REMOVED***
	***REMOVED***
        document.getElementById('password').value = password;
        document.getElementById('tg').name='Hide';
        document.getElementById('password').type="text";
***REMOVED***
$(document).ready(function() {
    $('.select2').select2();
***REMOVED***);

document.getElementById('select2').value = '<? print_r($admindata[LANGUAGE]); ***REMOVED***';  
  
      
***REMOVED*** 
$checkcount = 2;
$check1count = 3;

while($checkcount <= 7) {
    echo "if( document.getElementById('ns" . $check1count . "x').value != '') {
            document.getElementById('ns" . $checkcount . "wrapper').style.display = 'none';
***REMOVED***";

    $checkcount++;
    $check1count++;
***REMOVED***

$addcount = 1;
$add1count = 2; 
$add2count = 3; 


while($addcount <= 6) {
    echo "function add" . $addcount ."() {
if( document.getElementById('ns" . $add2count . "').style.display = 'none' ) {
            document.getElementById('ns" . $add2count . "').style.display = 'block'; 
            document.getElementById('ns" . $add1count . "wrapper').style.display = 'none';
        ***REMOVED*** 
***REMOVED***";
    $addcount++;
    $add1count++;
    $add2count++;
***REMOVED*** 

$remcount = 2;
$rem1count = 3; 


while($remcount <= 7) {
    echo "function rem" . $remcount ."() {
if( document.getElementById('ns" . $rem1count . "').style.display = 'block' ) {
            document.getElementById('ns" . $rem1count . "').style.display = 'none'; 
            document.getElementById('ns" . $remcount . "wrapper').style.display = 'block';
            document.getElementById('ns" . $rem1count . "x').value = '';
        ***REMOVED*** 
***REMOVED***";
    $remcount++;
    $rem1count++;
***REMOVED*** 
***REMOVED***
</script>
</body>

</html>