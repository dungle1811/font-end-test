<!DOCTYPE html>
<html lang="en">
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
    
    <link rel="stylesheet" href="../css/admin/styles.css">
  </head>
  <body>
    <div class="header-container container-fluid">
      <div class="row">
        <div class="menu-button center-layout col-1">
          <i class="fa fa-bars icon"></i>
        </div>
        <form class="search-box col-10">
          <div class="form-group search-box-container">
            <label for="search">
              <i class="fa fa-search icon"></i>
            </label>
            <input type="text" class="form-control" id="search" placeholder="Write something to search ...">    
          </div>
        </form>
        <div class="setting-button center-layout col-1">
          <i class="fa fa-ellipsis-v icon"></i>
        </div>
      </div>
    </div>
    <div class="body-container container-fluid">
      <div class="row">
        <div class="side-bar col-2" id="some">
          <div class="user-admin">
            <div class="avatar-container">
              <img src="https://png.icons8.com/zoom-to-actual-size/ios7/1600" alt="admin">
            </div>
            <div>User Admin</div>
          </div>
          <div class="sidebar-menu">
            <div class="menu-item row">
              <i class="fa fa-bar-chart col-1 p-0"></i>
              <div class="menu-item-title col-11">Dashboard</div>
            </div>
            <div class="menu-item collapse-menu">
              <a href="#collapseSubItem" data-toggle="collapse" class="sub-item collapse-down-btn row m-0">
                <i class="fa fa-bar-chart col-1 p-0"></i>
                <div class="menu-item-title col-10">Management</div>
                <i class="fa fa-angle-down icon col-1 p-0"></i>
              </a>
              <div id="collapseSubItem" class="collapse">
                <div class="collapse-item row m-0">
                  <i class="fa fa-th-list col-1 p-0"></i>
                  <a href="#" class="col-11 pr-0">Categories</a>
                </div>
                <div class="collapse-item row m-0">
                  <i class="fa fa-tags col-1 p-0"></i>
                  <a href="#" class="col-11 pr-0">Products</a>
                </div>
                <div class="collapse-item row m-0">
                  <i class="fa fa-object-ungroup col-1 p-0"></i>
                  <a href="#" class="col-11 pr-0">Sizes</a>
                </div>
                <div class="collapse-item row m-0">
                  <i class="fa fa-university col-1 p-0"></i>
                  <a href="#" class="col-11 pr-0">Shop</a>
                </div>
                <div class="collapse-item row m-0">
                  <i class="fa fa-credit-card col-1 p-0"></i>
                  <a href="#" class="col-11 pr-0">Invoices</a>
                </div>
                <div class="collapse-item row m-0">
                  <i class="fa fa-users col-1 p-0"></i>
                  <a href="#" class="col-11 pr-0">Users</a>
                </div>
                <div class="collapse-item row m-0">
                  <i class="fa fa-universal-access col-1 p-0"></i>
                  <a href="#" class="col-11 pr-0">Roles</a>
                </div>
                <div class="collapse-item row m-0">
                  <i class="fa fa-comments col-1 p-0"></i>
                  <a href="#" class="col-11 pr-0">Feedback</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="main-content col-10">
          <div class="row m-0 justify-content-around h-100">
            <div class="form col-6">
              <form>
                <div class="form-group">
                  <label for="name">Category name</label>
                  <input class="form-control" name="name" id="name" placeholder="Enter category name ...">
                </div>
                <div class="form-group">
                  <label for="gender">Gender</label>
                  <select class="form-control" id="gender">
                    <option>Male</option>
                    <option>Female</option>
                    <option>Both</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Create</button>                 
              </form>
            </div>
            <div class="categories-list col-6">
              <p>List</p>
              <div class="category">
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      var windowHeight = $(window).height();
      var headerHeight = $('.header-container').height();
      var bodyContainerHeight = windowHeight - headerHeight;

      document.getElementById('some').style.height = bodyContainerHeight + 'px';
    </script>
  </body>
</html>