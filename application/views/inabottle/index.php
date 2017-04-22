<!doctype html>
<html>
<head>
	<title>hashtag in a bottle</title>
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="">
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'> 
  	<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">    
    <style type="text/css">
    body {font-family: 'lato', sans-serif;}
    header {width: 100%;height:90px;position: fixed;background-color: #22899f;z-index: 1000;display: flex; justify-content:space-between;top:0;margin-left: -8px;}
    aside {width: 90px;height:800px;position: absolute;background-color: #22899f;}
    body > div {position: relative;}
    header > ul > li {font-size: 25px;}

    header ul {list-style-type: none;margin: 0;padding: 0;overflow: hidden;margin-left: 90px;display: flex;justify-content: space-around;width: 89%;margin-left: -50px;}

	header li {float: left;}

	header li a, .dropbtn {display: inline-block;color: white;text-align: center;padding: 28px 34px;text-decoration: none;}

	header li a:hover, .dropdown:hover .dropbtn {color: red;text-shadow: 0px 0px 40px white;b}

	header li.dropdown {display: inline-block;}

	header .dropdown-content {display: none;position: absolute;background-color: #f9f9f9;min-width: 160px;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); z-index: 1;}

	header .dropdown-content a {color: black;padding: 12px 16px;text-decoration: none;display: block;text-align: left;font-size: 20px;}
	header .dropdown-content a:nth-child(1) {background-color: #df0000;}
	header .dropdown-content a:nth-child(2) {background-color: orange;}
	header .dropdown-content a:nth-child(3) {background-color: green;}
	header .dropdown-content a:nth-child(4) {background-color: blue;}

	header .dropdown-content a:hover {color: white;}

	header .dropdown:hover .dropdown-content {display: block;}
	header img {width: 100%;}
	header > div {width:7%;}
    </style>
</head>
<body>
	<div>
		<header>
			<div>
				<img src="http://img4.hostingpics.net/pics/249732inabotlltlemin.png">
			</div>
			<ul>
			  <li><a href="#home">&#35;In-a-bottle</a></li>
			  <li><a href="#news">Default view</a></li>
			  <li class="dropdown">
			    <a href="javascript:void(0)" class="dropbtn">Filtres &#35;</a>
			    <div class="dropdown-content">
			      <a href="#">Link 1</a>
			      <a href="#">Link 2</a>
			      <a href="#">Link 3</a>
			      <a href="#">Link 3</a>
			    </div>
			  </li>
			</ul>
		</header>
		<!--aside></aside-->
	</div>
	<div>
		<nav class="social">
	          <ul>
	              <li><a href="http://twitter.com/gian_michelle">Maps <i class="fa fa-map-marker"></i></a></li>
	              <li><a href="http://twitter.com/gian_michelle">Twitter <i class="fa fa-twitter"></i></a></li>
	              <li><a href="http://facebook.com/gian.michelle">Facebook <i class="fa fa-facebook"></i></a></li>
	              <li><a href="http://dribbble.com/gian_michelle">Instagram <i class="fa fa-instagram"></i></a></li>
	          </ul>
	    </nav>
	    <!--div class="me">  
	         <p>Created by: <p><h1>Gian Di Serafino</h1><p> for <span>Informartion architecture</span></p>
	    </div-->
    </div>





    <style type="text/css">
		a {
		  color: #fff;
		  text-decoration: none;
		}
		.me {
		  width: 400px;
		  margin: 90px auto;
		}
		.me p,
		.me h1 {
		  text-transform: uppercase;
		  letter-spacing: 3px;
		  text-align: center;
		}
		.me p {
		  font-weight: 200;
		}
		.me span {
		  font-weight: bold;
		}
		.social {
		  position: fixed;
		  top: 130px;
		}
		.social ul {
		  padding: 0px;
		  -webkit-transform: translate(-270px, 0);
		  -moz-transform: translate(-270px, 0);
		  -ms-transform: translate(-270px, 0);
		  -o-transform: translate(-270px, 0);
		  transform: translate(-270px, 0);
		}
		.social ul li {
		  display: block;
		  margin: 5px;
		  background: #22899f;
		  width: 300px;
		  text-align: right;
		  padding: 10px;
		  -webkit-border-radius: 0 30px 30px 0;
		  -moz-border-radius: 0 30px 30px 0;
		  border-radius: 0 30px 30px 0;
		  -webkit-transition: all 1s;
		  -moz-transition: all 1s;
		  -ms-transition: all 1s;
		  -o-transition: all 1s;
		  transition: all 1s;
		}
		.social ul li:hover {
		  -webkit-transform: translate(110px, 0);
		  -moz-transform: translate(110px, 0);
		  -ms-transform: translate(110px, 0);
		  -o-transform: translate(110px, 0);
		  transform: translate(110px, 0);
		  background: white;
		}
		.social ul li:hover a {
		  color: #000;
		}
		.social ul li:hover i {
		  color: #fff;
		  background: rgba(0, 0, 0, 0.36);
		  -webkit-transform: rotate(360deg);
		  -moz-transform: rotate(360deg);
		  -ms-transform: rotate(360deg);
		  -o-transform: rotate(360deg);
		  transform: rotate(360deg);
		  -webkit-transition: all 1s;
		  -moz-transition: all 1s;
		  -ms-transition: all 1s;
		  -o-transition: all 1s;
		  transition: all 1s;
		}
		.social ul li i {
		  margin-left: 10px;
		  color: #000;
		  background: #fff;
		  padding: 10px;
		  -webkit-border-radius: 50%;
		  -moz-border-radius: 50%;
		  border-radius: 50%;
		  width: 20px;
		  height: 20px;
		  font-size: 20px;
		  background: #ffffff;
		  -webkit-transform: rotate(0deg);
		  -moz-transform: rotate(0deg);
		  -ms-transform: rotate(0deg);
		  -o-transform: rotate(0deg);
		  transform: rotate(0deg);
		}

		body {
		  background: rgba(37, 52, 63, 0.24);
		  color: #fff;
		  font-family: 'Raleway', sans-serif;
		}
    </style>
</body>
</html>