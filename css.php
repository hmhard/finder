<!Doctype html>
<html>
<head>
<title>finder</title>
<style>
html,body{
	max-height:100%;
	max-width:100%;
	min-width:100%;
}
body{
	font-size:28px!important;
	font-weight:700;
	background:#a9a9a9;
}
.searching{
	
	margin-top:3%;
}
img{
	min-height:100%;
}
</style>

  <link href="assets/css/bootstrap.css" type="text/css" rel="stylesheet"/>
  <link href="assets/css/jquery-ui.css" rel="stylesheet">
   <link href="assets/css/font-awesome.css" rel="stylesheet" />
   <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
   
</head>
<body>

<header style="padding:2% 0">
<nav class="navbar navbar-inverse navbar-fixed-top" style="background:#009688!important">
  <div class="container">
    <div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">JITInfo</a>
    </div>
	<div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav" id="mynav" style="color:white!important">
      <li class="active"><a href="index.php" >Home</a></li>
      <li><a href="index.php">Finder</a></li>
      <li><a href="#" >Messages</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
  </div>
 
<div class="searching">
<div class="container-fluid">

  <div class="input-group">
    <input type="text" id="name" class="form-control input-lg" placeholder="Search">
    <div class="input-group-btn">
      <button class="btn btn-default btn-lg" id="send" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
  </div>
  </div>
 </header>