$(document).ready(function() {
  
  var animating = false,
      submitPhase1 = 1100,
      submitPhase2 = 400,
      logoutPhase1 = 800,
      $login = $(".login"),
      $app = $(".app");
  
  function ripple(elem, e) {
    $(".ripple").remove();
    var elTop = elem.offset().top,
        elLeft = elem.offset().left,
        x = e.pageX - elLeft,
        y = e.pageY - elTop;
    var $ripple = $("<div class='ripple'></div>");
    $ripple.css({top: y, left: x});
    elem.append($ripple);
  };
  
  $(document).on("click", ".login__submit", function(e) {
    if (animating) return;
    animating = true;
    var that = this;
    ripple($(that), e);
    $(that).addClass("processing");
    setTimeout(function() {
      $(that).addClass("success");
      setTimeout(function() {
        $app.show();
        $app.css("top");
        $app.addClass("active");
      }, submitPhase2 - 70);
      setTimeout(function() {
        $login.hide();
        $login.addClass("inactive");
        animating = false;
        $(that).removeClass("success processing");
      }, submitPhase2);
    }, submitPhase1);
  });
  
  $(document).on("click", ".app__logout", function(e) {
    if (animating) return;
    $(".ripple").remove();
    animating = true;
    var that = this;
    $(that).addClass("clicked");
    setTimeout(function() {
      $app.removeClass("active");
      $login.show();
      $login.css("top");
      $login.removeClass("inactive");
    }, logoutPhase1 - 120);
    setTimeout(function() {
      $app.hide();
      animating = false;
      $(that).removeClass("clicked");
    }, logoutPhase1);
  });

   $add = $('#add-user');
  
  setTimeout(function() {
    $add.addClass('hidden');
  }, 200)
  var numRows = 2;
  
  $('input').keyup(function() {
    var isReady = false;
    
    $('input').each(function() {
      if ($(this).val() != '') {
        isReady = true;  
      }
    });
  
    if (isReady) {
      $add.removeClass('hidden'); 
    }
    else {
      $add.addClass('hidden');
    }
  });
  
  $add.on('click', function() {
    var $scope = $('.tb-entry');
    var name = $scope.find('#name').val();
    var initials = $scope.find('#initials').val();
    var age = $scope.find('#age').val();
    var favNum = $scope.find('#fav-num').val();
    
    $scope.find('input').attr('disabled', 'true');
    $scope.find('input').val('');
    
    $scope.after(
      '<div class="tb-data row row-'+numRows+'">' +
      '<ul class="data-options">' +
      '<li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>' +
      '<li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>' +
      '</ul>' +
      '<div class="col">' +
      name +
      '</div>' +
      '<div class="col">' +
      initials +
      '</div>' +
      '<div class="col">' +
      age +
      '</div>' +
      '<div class="col last">' +
      favNum +
      '</div>' +
      '</div>');
    
    $('.row-'+numRows).hide();  
    $('.row-'+numRows).slideDown(300);
    
    setTimeout(function() {
      $scope.find('input').removeAttr('disabled');
      $scope.find('input').first().focus();
      $add.addClass('hidden');
    }, 300);
    
    numRows++;
  });
  
});

function testclick(){
  var div = document.createElement("div");
  div.setAttribute('class','app__meeting');
  //div.innerHTML = "Hello world";
  
  var img = document.createElement("img");
  img.setAttribute('class','app__meeting-photo');
  img.setAttribute('src','images/logo.png');
  
  var p1 = document.createElement("p");
  p1.setAttribute('class','app__meeting-name');
  p1.innerHTML = "Work Order Entry";

  var p2 = document.createElement("p");
  p2.setAttribute('class','app__meeting-info');

  var span1 = document.createElement("span");
  span1.setAttribute('class','app__meeting-time');
  span1.innerHTML = "Hello there";
  p2.appendChild(span1);

  var span2 = document.createElement("span");
  span2.setAttribute('class','app__meeting-place');
  span2.innerHTML = "More stuff here";
  p2.appendChild(span2);

  
  div.appendChild(img);
  div.appendChild(p1);
  div.appendChild(p2);
  document.getElementById("list").appendChild(div);
  
};

function loader() {
  console.log("load successful");
}












