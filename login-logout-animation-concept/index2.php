<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Fancy Data Entry</title>
    
    
    <link rel="stylesheet" href="css/normalize.css">

    
        <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700);
@import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);
html, body {
  height: 100%;
}

body {
  background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/slider-2.jpg");
  background-size: cover;
  font-family: 'Open Sans', Verdana;
  color: #333;
}

a {
  color: #00a0df;
  text-decoration: none;
}
a:hover {
  text-decoration: underline;
}

.blue {
  color: #00a0df;
}

*,
*:before,
*:after {
  box-sizing: border-box;
}

input[type="text"] {
  display: inline-block;
  padding: 5px;
  margin-bottom: 1.2em;
  outline: none;
  font-weight: 600;
  width: 250px;
  position: relative;
  border: 1px solid silver;
  box-shadow: inset 0 5px 10px -8px #333;
  border-radius: 3px;
  transition: background 300ms ease;
}
input[type="text"]:focus {
  border: 1px solid #00a0df;
}
input[type="text"].large {
  width: 350px;
}
input[type="text"].small {
  width: 50px;
}
input[type="text"].full {
  width: 100%;
}

.user-info {
  text-align: center;
  width: 650px;
  font-size: 0.8em;
  margin: 50px auto;
  position: relative;
  box-shadow: 0 5px 10px -7px #333;
  border-radius: 4px;
}
.user-info .col {
  float: left;
  width: 25%;
  display: table-cell;
  vertical-align: middle;
  padding: 8px;
}
.user-info .row {
  overflow: hidden;
  position: relative;
}
.user-info .row input {
  text-align: center;
  margin-bottom: 0;
}
.user-info .row input.full {
  text-align: left;
}
.user-info i.clicked {
  animation: spin 1s ease 2s;
}

#add-user {
  display: block;
  position: absolute;
  font-size: 1.9em;
  background: #47D147;
  height: 35px;
  width: 35px;
  top: 42px;
  right: -35px;
  padding: 0;
  line-height: 33px;
  z-index: 0;
  border-radius: 0 4px 4px 0;
  box-shadow: inset 5px 0 10px -7px #333, inset 0 1px 0 0 #B5EDB5, 0 1px 0 0 #2E862E;
  border: 1px solid #39A739;
  outline: none;
  color: white;
  transition: background 300ms ease, right 300ms ease, text-shadow 200ms ease;
}
#add-user:active, #add-user:hover {
  text-shadow: 0 0 10px white;
}
#add-user.hidden {
  right: 1px;
}

.tb-header {
  background: #00a0df;
  color: white;
  line-height: 1.5;
  box-shadow: inset 0 -30px 30px -15px #0090C9;
  border-radius: 4px 4px 0 0;
  border: 1px solid #00709C;
  border-top: 1px solid #0090C9;
}
.tb-header .col {
  border-right: 1px solid #00709C;
}
.tb-header .col.last {
  border-right: none;
}

.tb-entry {
  background: #EFEFEF;
  box-shadow: inset 0 -20px 20px -10px #CCC;
  border: 1px solid silver;
  border-bottom: 1px solid #AAA;
  border-top: none;
  height: 46px;
  position: relative;
}
.tb-entry .col {
  border-right: 1px solid silver;
}
.tb-entry .col.last {
  border-right: none;
}
.tb-entry .cover {
  height: 46px;
  position: absolute;
  width: 36px;
  background: #EFEFEF;
  box-shadow: inset 0 -20px 20px -10px #CCC;
  right: 0px;
  z-index: 2;
}

.tb-data {
  background: #EFEFEF;
  border: 1px solid silver;
  box-shadow: inset 0 1px 0 0 white;
  border-top: none;
}
.tb-data .col {
  border-right: 1px solid #CCC;
  transition: opacity 500ms ease;
  min-height: 35px;
}
.tb-data .col.last {
  border-right: none;
}
.tb-data.row-0 {
  border-radius: 0 0 4px 4px;
}
.tb-data .data-options {
  position: absolute;
  text-align: right;
  right: -200px;
  transition: right 300ms ease;
  z-index: 4;
  top: -5px;
}
.tb-data .data-options li {
  display: block;
  float: left;
  padding-right: 2em;
  font-size: 1.2em;
  font-weight: 700;
}

    </style>

    
        <script src="js/prefixfree.min.js"></script>

    
  </head>

  <body onload="loader();">
  <!--<p>
  	<?php
  		echo date('l, F dS Y.');
  	?>

  </p>-->
  <div align="center"><iframe src="https://docs.google.com/forms/d/1lSmVXvBUb3KbiccTWEAlfcnsM99V2n1pJxUmLqpT8SM/viewform?embedded=true" width="760" height="800" frameborder="0" marginheight="0" marginwidth="0" align="middle">Loading...</iframe></div>

    <!--<div class="user-info">
                
  <div class="tb-header row">
    <div class="col">
      Name
    </div>
    
    <div class="col">
      Date
    </div>
    
    <div class="col">
      Problem
    </div>
    
    <div class="col last">
      Completed
    </div>
  </div>
  
  <div class="tb-entry row">
    <div class="cover"></div>
    
    <div class="col">
      <input type="text" maxlength="16" id="name" class="full">
    </div>
    
    <div class="col">
      <input type="text" maxlength="3" id="initials" class="small">
    </div>
    
    <div class="col">
      <input type="text" maxlength="3" id="age" class="small">
    </div>
    
    <div class="col last">
      <input type="text" maxlength="5" id="fav-num" class="small">
    </div>
     
  </div>
  
  <!--<div class="tb-data row row-0">
    
    <div class="col">
      Brian
    </div>
    <div class="col">
      BP
    </div>
    <div class="col">
      25
    </div>
    <div class="col last">
      5
    </div>
  </div>
  
  <button id="add-user"><i class="fa fa-plus"></i></button>
</div>-->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
