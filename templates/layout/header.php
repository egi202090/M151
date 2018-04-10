<!DOCTYPE html>
<html>
<head>

   <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="<?php echo$this->assets?>js/login.js"></script>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="<?php echo$this->assets?>css/styles.css">

</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar">Profil</span>
                <span class="icon-bar">test</span>
                <span class="icon-bar">test3</span>
            </button>
            <a class="navbar-brand">EggsOff</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="/M151/user/index"><span class="glyphicon glyphicon-home"></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                    <li><a href='/M151/user/movies'>Movies</a></li>
                    <li><a href='/M151/user/favourites' class="glyphicon glyphicon-star"></a></li>
                    <li><a href="/M151/user/profil"><span class="glyphicon glyphicon-user"></a></li>
            </ul>
        </div>
    </div>
</nav>
