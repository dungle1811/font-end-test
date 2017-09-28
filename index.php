<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"        crossorigin="anonymous">
    
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>crossorigin="anonymous"></script>

    <!-- Fontawsome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="./css/styles.css" rel="stylesheet">
  </head>
  <body>
    <div class="header container-fluid">
      <div class="header-top row m-0">
        <div class="trademark col-2">
          <img src="./images/trademark.png" alt="trademark">
        </div>
        <div class="search-box col-8">
          <form class="row">
            <div class="form-group col-11 m-0 p-0">
              <input type="text" name="search" class="form-control" id="search" placeholder="Search ...">
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
        <?php 
          $navMenu = array('HOME', 'SALE', 'HANDBAGS', 'WALLETS', 'ACCESSORIES', 'MENS STORE', 'SHOES', 'VINTAGE', 'SERVICES', 'CONTACT US');  
          for($i = 0; $i < count($navMenu); $i++) {
            if($i == 0) { ?>
              <div class="menu-item first">
                <p><?php echo $navMenu[$i] ?></p>
              </div>
        <?php
            } else {
              if ($i == count($navMenu) - 1) { ?>
                <div class="menu-item last">
                  <p><?php echo $navMenu[$i] ?></p>
                </div>
        <?php
              } else { ?>
                <div class="menu-item">
                  <p><?php echo $navMenu[$i] ?></p>
                </div>
        <?php
              } 
            }
          }
        ?>
      </div>
    </div>
    <div class="body container-fluid">
      <div class="hot-product-section row">
        <div class="col-2"></div>
        <div class="product col-8">
          <div>
            <img src="./images/Layer1.png" alt="product-photo">
          </div>
          <div class="product-info">
            <p class="name">COWHIDE STANDARD CREW</p>
            <p class="short-description">White coloured, short-sleeved, printed T-shirt for men by Levi's. This crew-nect T-shirt is made of organic cotton and comes in a regular fit.</p>
            <img src="./images/RoundedRectangle1.png" alt="rounded-rectangle" class="mt-4 mb-5">
            <div class="tab-icon">
              <i class="fa fa-circle tab"></i>
              <i class="fa fa-circle tab"></i>
              <i class="fa fa-circle tab"></i>
              <i class="fa fa-circle tab current-tab"></i>
              <i class="fa fa-circle tab"></i>
            </div>
          </div>
        </div>
        <div class="col-2"></div>
      </div>
      <div class="random-products-section row">
        <div class="arrow-icon row align-items-center m-0">
          <img src="./images/back.png" alt="back-icon">
        </div>
        <div class=" products">
          <script>
            let products = [
              {
                image: './images/Layer3.png',
                name: 'BRANDED SHOES',
                button: 'SHOP'
              },
              {
                image: './images/Layer5.png',
                name: 'BRANDED SHOES',
                button: 'SHOP'
              },
              {
                image: './images/Layer6.png',
                name: 'BRANDED SHOES',
                button: 'SHOP'
              }
            ];
          </script>
          <div class="inline-product row m-0">
            <div>
              <img src="./images/Layer3.png">
            </div>
            <div class="info">
              <p class="common-product-name">BRANDED SHOES</p>
              <div class="goto-shop">
                <button type="submit" class="btn btn-sm btn-success">SHOP</button>
              </div>
            </div>
          </div>
          <div class="inline-product middle row m-0">
            <div>
              <img src="./images/Layer5.png">
            </div>
            <div class="info">
              <p class="common-product-name">BRANDED SHOES</p>
              <div class="goto-shop">
                <button type="submit" class="btn btn-sm btn-success">SHOP</button>
              </div>
            </div>
          </div>
          <div class="inline-product row m-0">
            <div>
              <img src="./images/Layer6.png">
            </div>
            <div class="info">
              <p class="common-product-name">BRANDED SHOES</p>
              <div class="goto-shop">
                <button type="submit" class="btn btn-sm btn-success">SHOP</button>
              </div>
            </div>
          </div>
        </div>
        <div class="arrow-icon row align-items-center m-0">
          <img src="./images/next.png" alt="next-icon">
        </div>
      </div>
      <div class="featured-products">
        <div class="header">
          <p>FEATURED PRODUCTS</p>
        </div>
        <div class="body row">
          <div class="col-2"></div>
          <div class="products col-8">
            <div class="block-product">
              <div>
                <img src="./images/Layer7.png">
              </div>
              <p class="common-product-name">BRANDED SHOES</p>
              <div class="payment">
                <div class="price">
                  <label><i class="fa fa-usd"></i>300</label>
                </div>
                <button type="submit" class="buy btn btn-sm btn-success">BUY NOW</button>
              </div>
            </div>
            <div class="block-product">
              <div>
                <img src="./images/Layer8.png">
              </div>
              <p class="common-product-name">BRANDED SHOES</p>
              <div class="payment">
                <div class="price">
                  <label><i class="fa fa-usd"></i>300</label>
                </div>
                <button type="submit" class="buy btn btn-sm btn-success">BUY NOW</button>
              </div>
            </div>
            <div class="block-product">
              <div>
                <img src="./images/Layer9.png">
              </div>
              <p class="common-product-name">BRANDED SHOES</p>
              <div class="payment">
                <div class="price">
                  <label><i class="fa fa-usd"></i>300</label>
                </div>
                <button type="submit" class="buy btn btn-sm btn-success">BUY NOW</button>
              </div>
            </div>
            <div class="block-product">
              <div>
                <img src="./images/Layer10.png">
              </div>
              <p class="common-product-name">BRANDED SHOES</p>
              <div class="payment">
                <div class="price">
                  <label><i class="fa fa-usd"></i>300</label>
                </div>
                <button type="submit" class="buy btn btn-sm btn-success">BUY NOW</button>
              </div>
            </div>
            <div class="block-product">
              <div>
                <img src="./images/Layer11.png">
              </div>
              <p class="common-product-name">BRANDED SHOES</p>
              <div class="payment">
                <div class="price">
                  <label><i class="fa fa-usd"></i>300</label>
                </div>
                <button type="submit" class="buy btn btn-sm btn-success">BUY NOW</button>
              </div>
            </div>
            <div class="block-product">
              <div>
                <img src="./images/Layer6.png">
              </div>
              <p class="common-product-name">BRANDED SHOES</p>
              <div class="payment">
                <div class="price">
                  <label><i class="fa fa-usd"></i>300</label>
                </div>
                <button type="submit" class="buy btn btn-sm btn-success">BUY NOW</button>
              </div>
            </div>
          </div>
          <div class="col-2"></div>
        </div>
      </div>
    </div>
    <div class="footer container-fluid">
      <div class="content-section row">
        <div class="col-2"></div>
        <div class="col-8 main-content">
          <div class="sub-content">
            <p class="title">FEATURED SALE</p>
            <div class="trademark">
              <p>Alexis Hudson</p>
              <p>American Apparel</p>
              <p>Ben Sherman</p>
              <p>Big Buddha</p>
              <p>Chanel</p>
              <p>Christian Audigier</p>
              <p>Coach</p>
              <p>Cole Haan</p>
            </div>
          </div>
          <div class="sub-content">
            <p class="title">MENS STORE</p>
            <div class="trademark">
              <p>Alexis Hudson</p>
              <p>American Apparel</p>
              <p>Ben Sherman</p>
              <p>Big Buddha</p>
              <p>Chanel</p>
              <p>Christian Audigier</p>
              <p>Coach</p>
              <p>Cole Haan</p>
            </div>
          </div>
          <div class="sub-content">
            <p class="title">WOMEN STORE</p>
            <div class="trademark">
              <p>Alexis Hudson</p>
              <p>American Apparel</p>
              <p>Ben Sherman</p>
              <p>Big Buddha</p>
              <p>Chanel</p>
              <p>Christian Audigier</p>
              <p>Coach</p>
              <p>Cole Haan</p>
            </div>
          </div>
          <div class="sub-content">
            <p class="title">QUICK LINKS</p>
            <div class="trademark">
              <p>Alexis Hudson</p>
              <p>American Apparel</p>
              <p>Ben Sherman</p>
              <p>Big Buddha</p>
              <p>Chanel</p>
              <p>Christian Audigier</p>
              <p>Coach</p>
              <p>Cole Haan</p>
            </div>
          </div>
        </div>
        <div class="col-2"></div>
      </div>
      <div class="copyright-section">
        <p>Copyright &copy; 2017 Thuy Dung</p>
      </div>
    </div>
  </body>
</html>