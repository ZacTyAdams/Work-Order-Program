$(document).ready(function() {
  
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
  
})