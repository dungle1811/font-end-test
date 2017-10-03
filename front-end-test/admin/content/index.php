<div class="content-container row" ng-controller="SidebarController">
  <div class="sidebar col-2" id="sidebar">
    <div class="user-container row m-0">
      <div class="avatar col-6 pl-0">
        <img ng-src="{{ avatar }}" alt="admin">
      </div>
      <div class="username col-6 p-0">User Admin</div>
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
          <div class="collapse-item row m-0" ng-repeat="item in managementMenu">
            <i class="fa {{ item.icon }} col-1 p-0"></i>
            <a href="#" class="col-11 pr-0" ng-bind="item.title"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-content col-10" ng-controller="CategoryController">
    <div class="row m-0 justify-content-around h-100">
      <div class="left-container col-6">
        <div class="introduction">
          <p>Create shoe category, such as sandal, boot, high-heeled, ....</p>
        </div>
        <div class="form w-50 m-auto">
          <div class="form-group">
            <label for="name">Category name</label>
            <input class="form-control" name="name" id="name" placeholder="Enter shoe category name ..." ng-model="name">
          </div>
          <div class="form-group">
            <label for="gender">Gender</label>
            <select class="form-control" id="gender" ng-model="gender">
              <option>male</option>
              <option>female</option>
              <option>both</option>
            </select>
          </div>
          <div class="submit form-group">
            <button type="submit" class="btn btn-sm btn-primary">Create</button>  
          </div>                 
        </div>
      </div>
      <div class="right-container col-6">
        <p class="title">Categories</p>
        <div class="list w-75 m-auto" id="list">
          <div class="list-item row m-0" ng-repeat="item in list">
            <div class="title col-9" id="title">
              <p ng-bind="item.title"></p>
            </div>
            <div class="modify col-3">
              <div class="row">
                <span class="edit-icon col-6">
                  <i class="fa fa-pencil"></i>
                </span>
                <span class="delete-icon col-6">
                  <i class="fa fa-times"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>