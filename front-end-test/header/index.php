<div class="header container-fluid">
  <div class="header-top row m-0">
    <div class="trademark col-md-2 col-sm-3 col-3">
      <img src="./images/trademark.png" alt="trademark">
    </div>
    <div class="search-box col-lg-8 col-md-7 col-sm-9 col-8">
      <form class="row">
        <div class="form-group col-md-11 col-sm-10 col-10 m-0 p-0">
          <input type="text" name="search" class="search-input form-control" id="search">
        </div>
        <label for="search" class="search-icon col-md-1 col-sm-2 col-2">
          <i class="fa fa-search"></i>
        </label>
      </form>
    </div>
    <div class="cart col-lg-2 col-md-3 col-2">
      <img src="./images/Shape2.png" alt="cart-icon" class="mr-3">
      <div class="price">
        <span></span>
        <label><i class="fa fa-usd"></i>300</label>
      </div>
    </div>
  </div>
  <div class="sidebar" id="sidebar-menu">
    <script>
      let sidebarMenu = ['HOME', 'SALE', 'HANDBAGS', 'WALLETS', 'ACCESSORIES', 'MENS STORE', 'SHOES', 'VINTAGE', 'SERVICES', 'CONTACT US'];
      let customClassSidebar = '';
      sidebarMenu.forEach((subMenu, index) => {
        document.write(`
          <div class="menu-item ` + customClassSidebar + `">
            <p>` + subMenu + `</p>
          </div>
        `)
      });
    </script>
  </div>
  <div class="header-footer menu">
    <label class="menu-icon">
      <i class="fa fa-bars"></i>
    </label>
    <script>
      let menu = ['HOME', 'SALE', 'HANDBAGS', 'WALLETS', 'ACCESSORIES', 'MENS STORE', 'SHOES', 'VINTAGE', 'SERVICES', 'CONTACT US'];
      let customClass = '';
      menu.forEach((subMenu, index) => {
        switch (index) {
          case 0:
            customClass = 'first';
            break;
          case menu.length - 1:
            customClass = 'last';
            break;
          default:
            customClass = '';
            break;
        }
        document.write(`
          <div class="menu-item ` + customClass + `">
            <p>` + subMenu + `</p>
          </div>
        `)
      });
    </script>
  </div>
</div>