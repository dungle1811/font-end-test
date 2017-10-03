<!DOCTYPE html>
<html lang="en" ng-app="myApp">
  <head>
    <title>Fashion Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"        crossorigin="anonymous">

    <!-- Fontawsome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <!-- <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script></script>

    <!-- AngularJS -->
     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular.min.js"></script>
     <script src="./js/header/header.controller.js"></script>
     <script src="./js/footer/footer.controller.js"></script> 
     <script src="./js/body/body.controller.js"></script> 
     <script src="./js/sidebar/sidebar.controller.js"></script> 

    <!-- CSS -->
    <link rel="stylesheet" href="/front-end-test/css/homepage/styles.css">
    <link rel="stylesheet" href="/front-end-test/css/homepage/headerStyles.css">
    <link rel="stylesheet" href="/front-end-test/css/homepage/bodyStyles.css">
    <link rel="stylesheet" href="/front-end-test/css/homepage/footerStyles.css">
    <link rel="stylesheet" href="/front-end-test/css/homepage/sidebarStyles.css">
  </head>
  <body>
    <div class="cover-container" id="cover"></div> 
    <?php require './header/index.php' ?>
    <?php require './body/index.php' ?>
    <?php require './footer/index.php' ?>
    <?php require './sidebar/index.php' ?>
      <script>
      // const left = $('.sidebar').outerWidth();
      // console.log($('.sidebar').outerWidth());
      const left = 195.594;
      $('#sidebar').css('left', -left + 'px');

      $('.sidebar-section').on('click', () => {
        $('#cover').css('display', 'block');
        $('#sidebar').animate({left: '0'}, 400);
      })

      $('.cover-container').on('click', () => {
        $('#cover').css('display', 'none');        
        $('#sidebar').animate({left: -left + 'px'}, 400);
      })
    </script>  
  </body>
</html>