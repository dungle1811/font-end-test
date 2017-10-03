<div class="footer container-fluid" ng-controller="FooterController">
  <div class="content-section row">
    <div class="col-xl-2 col-sm-1"></div>
    <div class="main-content col-xl-8 col-sm-10 col-12">
      <div class="sub-content" ng-repeat="menuItem in menu">
        <p class="title" ng-bind="menuItem.title"></p>
        <div class="trademark" ng-repeat="item in menuItem.items">
          <p ng-bind="item"></p>
        </div>
      </div>
    </div>
    <div class="col-xl-2 col-sm-1"></div>
  </div>
  <div class="copyright-section">
    <p>Copyright &copy; 2017 Css Author</p>
  </div>
</div>