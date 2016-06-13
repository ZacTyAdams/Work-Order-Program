<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login/Logout animation concept</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    
    
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans'>

        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    <div class="cont">
  <div class="demo">
    <div class="login">
      <div class="login__check" style="text-align: center"> 
        <img src="images/versacor.png" height="25%" width="80%"></img>
      </div>
      <div class="login__form">
        <div class="login__row">
          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
          </svg>
          <input type="text" class="login__input name" placeholder="Username"/>
        </div>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
          <input type="password" class="login__input pass" placeholder="Password"/>
        </div>
        <button type="button" class="login__submit">Sign in</button>
        <p class="login__signup">Don't have an account? &nbsp;<a>Sign up</a></p>
      </div>
    </div>
    <div id="list" class="app">
      <div class="app__top">
        <a class="app__menu-btn" href="http://goo.gl/forms/1326GP6Ktl3jPSwU2" target="_blank">
        <span></span>
        </a>
        <svg id="new" class="app__icon search svg-icon" viewBox="0 0 20 20">
          <!-- yeap, its purely hardcoded numbers straight from the head :D (same for svg above) -->
          <path d="M20,20 15.36,15.36 a9,9 0 0,1 -12.72,-12.72 a 9,9 0 0,1 12.72,12.72" />
        </svg>
        <p class="app__hello">
            <?php
              /* This sets the $time variable to the current hour in the 24 hour clock format */
              $time = date("H")-7;
              /* Set the $timezone variable to become the current timezone */
              //$timezone = date("CST");
              /* If the time is less than 1200 hours, show good morning */
              if ($time < "12") {
                  echo "Good Morning";
              } else
              /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
              if ($time >= "12" && $time < "17") {
                  echo "Good Afternoon";
              } else
              /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
              if ($time >= "17" && $time < "19") {
                  echo "Good Evening";
              } else
              /* Finally, show good night if the time is greater than or equal to 1900 hours */
              if ($time >= "19") {
                  echo "Good Night";
              }
              //echo $time
              ?>

        </p>
        <div class="app__user">
          <img src="images/logo.png" alt="" class="app__user-photo" />
          <!--<span class="app__user-notif">3</span>-->
        </div>
        <!--<div class="app__month">
          <span class="app__month-btn left"></span>
          <p class="app__month-name">March</p>
          <span class="app__month-btn right"></span>
        </div>
      </div>-->
      <!--<div class="app__bot">
        <div class="app__days">
          <div class="app__day weekday">Sun</div>
          <div class="app__day weekday">Mon</div>
          <div class="app__day weekday">Tue</div>
          <div class="app__day weekday">Wed</div>
          <div class="app__day weekday">Thu</div>
          <div class="app__day weekday">Fri</div>
          <div class="app__day weekday">Sad</div>
          <div class="app__day date">8</div>
          <div class="app__day date">9</div>
          <div class="app__day date">10</div>
          <div class="app__day date">11</div>
          <div class="app__day date">12</div>
          <div class="app__day date">13</div>
          <div class="app__day date">14</div>
        </div>-->
        <!--<div class="app__meetings">
          <div class="app__meeting">
            <img src="http://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/profile/profile-80_5.jpg" alt="" class="app__meeting-photo" />
            <p class="app__meeting-name">Feed the cat</p>
            <p class="app__meeting-info">
              <span class="app__meeting-time">8 - 10am</span>
              <span class="app__meeting-place">Real-life</span>
            </p>
          </div>
          <div class="app__meeting">
            <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/142996/profile/profile-512_5.jpg" alt="" class="app__meeting-photo" />
            <p class="app__meeting-name">Feed the cat!</p>
            <p class="app__meeting-info">
              <span class="app__meeting-time">1 - 3pm</span>
              <span class="app__meeting-place">Real-life</span>
            </p>
          </div>
          <div class="app__meeting">
            <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/142996/profile/profile-512_5.jpg" alt="" class="app__meeting-photo" />
            <p class="app__meeting-name">FEED THIS CAT ALREADY!!!</p>
            <p class="app__meeting-info">
              <span class="app__meeting-time">This button is just for demo ></span>
            </p>
          </div>
        </div>
      </div>-->
      <div class="app__logout">
        <svg class="app__logout-icon svg-icon" viewBox="0 0 20 20">
          <path d="M6,3 a8,8 0 1,0 8,0 M10,0 10,12"/>
        </svg>
      </div>
    </div>
    <iframe src="https://docs.google.com/spreadsheets/d/1dnyhwt-t-_WmfrDUJLJkof1lg7SI0jOy5hazQQS0RGw/pubhtml?widget=true&amp;headers=false"></iframe>
  </div>
</div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
