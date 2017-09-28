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

    <link href="./css/styles.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>
  </head>
  <body>
    <!-- <div class="header container-fluid">
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
    </div> -->
    <?php require './header/index.php' ?>
    <div class="body container-fluid">
      <div class="hot-product-section row">
        <div id="hotProductCarousel" class="carousel slide w-100" data-ride="carousel">
          <div class="tab-icon carousel-indicators">
            <i class="fa fa-circle tab active" data-target="#hotProductCarousel" data-slide-to="0"></i>
            <i class="fa fa-circle tab" data-target="#hotProductCarousel" data-slide-to="1"></i>
            <i class="fa fa-circle tab" data-target="#hotProductCarousel" data-slide-to="2"></i>
          </div>
          <div class="carousel-inner w-100" role="listbox">
            <script>
              let hotProducts = [
                {
                  name: 'COWHIDE STANDARD CREW',
                  image: './images/Layer1.png',
                  description: "White coloured, short-sleeved, printed T-shirt for men by Levi's. This crew-nect T-shirt is made of organic cotton and comes in a regular fit.",
                  button: 'SHOP NOW' 
                },
                {
                  name: 'COWHIDE STANDARD CREW',
                  image: './images/Layer3.png',
                  description: "White coloured, short-sleeved, printed T-shirt for men by Levi's. This crew-nect T-shirt is made of organic cotton and comes in a regular fit.",
                  button: 'SHOP NOW' 
                },
                {
                  name: 'COWHIDE STANDARD CREW',
                  image: './images/Layer11.png',
                  description: "White coloured, short-sleeved, printed T-shirt for men by Levi's. This crew-nect T-shirt is made of organic cotton and comes in a regular fit.",
                  button: 'SHOP NOW' 
                }
              ];
              hotProducts.forEach((product, index) => {
                if(index === 0) {
                  document.write(`
                    <div class="carousel-item active col-7">
                      <div class="row">
                        <div class="image col-5">
                          <div><img src="` + product.image + `" alt="product-photo"></div>
                        </div>
                        <div class="product-info col-7">
                          <p class="name">` + product.name + `</p>
                          <p class="short-description">` + product.description + `</p>
                          <button type="submit" class="btn btn-outline-primary mt-4 mb-5">SHOP NOW</button>
                        </div>
                      </div>
                    </div>
                  `)
                } else {
                  document.write(`
                    <div class="carousel-item col-7">
                      <div class="row">
                        <div class="image col-5">
                          <div><img src="` + product.image + `" alt="product-photo"></div>
                        </div>
                        <div class="product-info col-7">
                          <p class="name">` + product.name + `</p>
                          <p class="short-description">` + product.description + `</p>
                          <button type="submit" class="btn btn-outline-primary mt-4 mb-5">SHOP NOW</button>
                        </div>
                      </div>
                    </div>
                  `)
                }
              });
            </script>
          </div>
          <a class="carousel-control-prev" href="#hotProductCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#hotProductCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div id="randomProductsCarousel" class="random-products-section row carousel slide" data-ride="carousel">
        <div class="carousel-inner col-10" role="listbox">
          <div class="carousel-item active">
            <div class="products">
              <script>
                let firstSlide = [
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
                position = '';
                firstSlide.forEach((product, index) => {
                  if(index !== 0 && index !== firstSlide.length - 1)
                    position = 'middle';
                  else position = '';
                  document.write(`
                    <div class="product ` + position + `"y>
                      <div>
                        <img src="` + product.image + `">
                      </div>
                      <div class="info">
                        <p class="common-product-name mb-2">` + product.name + `</p>
                        <div>
                          <button type="submit" class="btn btn-sm btn-success">` + product.button + `</button>
                        </div>
                      </div>
                    </div>
                  `)
                });
              </script>
            </div>
          </div>
          <div class="carousel-item">
            <div class="products">
              <script>
                let secondSlide = [
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
                position = '';
                secondSlide.forEach((product, index) => {
                  if(index !== 0 && index !== secondSlide.length - 1)
                    position = 'middle';
                  else position = '';
                  document.write(`
                    <div class="product ` + position + `"y>
                      <div>
                        <img src="` + product.image + `">
                      </div>
                      <div class="info">
                        <p class="common-product-name mb-2">` + product.name + `</p>
                        <div>
                          <button type="submit" class="btn btn-sm btn-success">` + product.button + `</button>
                        </div>
                      </div>
                    </div>
                  `)
                });
              </script>
            </div>
          </div>
          <div class="carousel-item">
            <div class="products">
              <script>
                thirdSlide = [
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
                position = '';
                thirdSlide.forEach((product, index) => {
                  if(index !== 0 && index !== thirdSlide.length - 1)
                    position = 'middle';
                  else position = '';
                  document.write(`
                    <div class="product ` + position + `"y>
                      <div>
                        <img src="` + product.image + `">
                      </div>
                      <div class="info">
                        <p class="common-product-name mb-2">` + product.name + `</p>
                        <div>
                          <button type="submit" class="btn btn-sm btn-success">` + product.button + `</button>
                        </div>
                      </div>
                    </div>
                  `)
                });
              </script>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev col-1" href="#randomProductsCarousel" role="button" data-slide="prev">
          <img src="./images/back.png" alt="back-icon">
        </a>
        <a class="carousel-control-next col-1" href="#randomProductsCarousel" role="button" data-slide="next">
          <img src="./images/next.png" alt="next-icon">
        </a>
      </div>
      <div class="featured-products">
        <div class="header">
          <p>FEATURED PRODUCTS</p>
        </div>
        <div class="body row">
          <div class="col-2"></div>
          <div class="products col-8">
            <script>
              let blockProducts = [
                {
                  image: './images/Layer7.png',
                  name: 'BRANDED SHOES',
                  price: '300',
                  button: 'BUY NOW'
                },
                {
                  image: './images/Layer8.png',
                  name: 'BRANDED SHOES',
                  price: '300',
                  button: 'BUY NOW'
                },
                {
                  image: './images/Layer9.png',
                  name: 'BRANDED SHOES',
                  price: '300',
                  button: 'BUY NOW'
                },
                {
                  image: './images/Layer10.png',
                  name: 'BRANDED SHOES',
                  price: '300',
                  button: 'BUY NOW'
                },
                {
                  image: './images/Layer11.png',
                  name: 'BRANDED SHOES',
                  price: '300',
                  button: 'BUY NOW'
                },
                {
                  image: './images/Layer6.png',
                  name: 'BRANDED SHOES',
                  price: '300',
                  button: 'BUY NOW'
                }
              ];
              blockProducts.forEach(product => {
                document.write(`
                  <div class="block-product">
                    <div>
                      <img src="` + product.image + `">
                    </div>
                    <p class="common-product-name">` + product.name + `</p>
                    <div class="payment">
                      <div class="price">
                        <label><i class="fa fa-usd"></i>` + product.price + `</label>
                      </div>
                      <button type="submit" class="buy btn btn-sm btn-success">` + product.button + `</button>
                    </div>
                  </div>
                `)
              });
            </script>
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