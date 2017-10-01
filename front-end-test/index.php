<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"        crossorigin="anonymous">

    <!-- Fontawsome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script></script>

    <!-- AngularJS -->
     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular.min.js"></script> 

    <!-- CSS -->
    <link href="./css/styles.css" rel="stylesheet">
    <link href="./css/headerStyle.css" rel="stylesheet">
    <link href="./css/footerStyle.css" rel="stylesheet">
    <link href="./css/bodyStyle.css" rel="stylesheet">
  </head>
  <body>
    <?php require './header/index.php' ?>
    <?php require './body/index.php' ?>
    <?php require './footer/index.php' ?>
    <script>
      const left = document.getElementById("sidebar-menu").offsetWidth;
      document.getElementById('sidebar-menu').setAttribute('style', 'left: -' + left + 'px');
      document.getElementById('cover').setAttribute('style', 'display: none');

      $('.menu-icon').on('click', () => {
        document.getElementById('cover').setAttribute('style', 'display: block');
        document.getElementById('sidebar-menu').style.transform = 'translateX(' + left + 'px)';
      })

      $('.cover-container').on('click', () => {
        document.getElementById('sidebar-menu').setAttribute('style', 'left: -' + left + 'px');
        document.getElementById('cover').setAttribute('style', 'display: none');
      })
    </script>
  </body>
</html>