<div class="header container-fluid" ng-controller="HeaderController">
  <div class="header-top row m-0">
    <div class="trademark col-md-2 col-sm-3 col-3" id="trademark">
      <img src="./images/trademark.png" alt="trademark">
    </div>
    <div class="search-box col-lg-8 col-md-7 col-sm-6 col-6" id="search-box">
      <form class="row">
        <div class="search-input form-group col-md-11 col-sm-10 col-10 m-0 p-0">
          <input type="text" name="search" class="search-input form-control" id="search">
        </div>
        <label for="search" class="search-icon col-md-1 col-sm-2 col-2">
          <i class="fa fa-search"></i>
        </label>
      </form>
    </div>
    <div class="cart col-lg-2 col-sm-3 col-3">
      <div class="cart-section">
        <img src="./images/Shape2.png" alt="cart-icon">
        <div class="price ml-1 mr-1">
          <label><i class="fa fa-usd"></i>300</label>
        </div>
      </div>
      <div class="sidebar-section">
        <span class="menu-icon">
          <i class="fa fa-bars"></i>
        </span>
      </div>
    </div>
  </div>
  <div class="header-footer menu">
    <div class="menu-item" ng-repeat="item in menu" ng-class="[$index === 0 ? 'first' : null, $index === menu.length - 1 ? 'last' : null]">
      <p ng-bind="item"></p>
    </div>
  </div>
</div>