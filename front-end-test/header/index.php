 <link rel="stylesheet" href="../css/header/styles.css"> 
<div class="header container-fluid">
  <div class="header-top row m-0">
    <div class="trademark col-2">
      <img src="./images/trademark.png" alt="trademark">
    </div>
    <div class="search-box col-8">
      <form class="row">
        <div class="form-group col-11 m-0 p-0">
          <input type="text" name="search" class="search-input form-control" id="search">
        </div>
        <label for="search" class="search-icon col-1">
          <i class="fa fa-search"></i>
        </label>
      </form>
    </div>
    <div class="cart col-2">
      <img src="./images/Shape2.png" alt="cart-icon" class="mr-3">
      <div class="price">
        <span></span>
        <label><i class="fa fa-usd"></i>300</label>
      </div>
    </div>
  </div>
  <div class="header-footer menu">
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