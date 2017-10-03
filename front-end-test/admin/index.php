<!DOCTYPE html>
<html lang="en" ng-app="admin">
  <head>
    <title>Admin Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"        crossorigin="anonymous">

    <!-- Fontawsome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script></script>

    <!-- AngularJS -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular.min.js"></script>
    <script src="/front-end-test/js/admin/index.controller.js"></script>
    <script src="/front-end-test/js/admin/content/sidebar.controller.js"></script>
    <script src="/front-end-test/js/admin/content/category.controller.js"></script>
    
    <!-- CSS -->
    <link rel="stylesheet" href="/front-end-test/css/admin/styles.css">
    <link rel="stylesheet" href="/front-end-test/css/admin/headerStyles.css">
    <link rel="stylesheet" href="/front-end-test/css/admin/contentStyles.css">
 </head>
  <body>
    <div class="wrapper container-fluid" id="wrapper">
      <?php require './header/index.php' ?>
      <?php require './content/index.php' ?>
    </div>
    <script>
      let windowHeight = $(window).height();
      let headerHeight = $('.header').height();
      let bodyContainerHeight = windowHeight - headerHeight;

      $('#sidebar').css('height', bodyContainerHeight + 'px');
    </script>
  </body>
</html>