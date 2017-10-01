<div class="body container-fluid">
  <div class="cover-container" id="cover"></div>
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
                <div class="carousel-item col-md-9 col-7 active">
                    <div class="image">
                      <div><img src="` + product.image + `" alt="product-photo"></div>
                    </div>
                    <div class="product-info">
                      <p class="name">` + product.name + `</p>
                      <p class="short-description">` + product.description + `</p>
                      <button type="submit" class="btn btn-outline-primary mt-4 mb-5">SHOP NOW</button>
                    </div>
                </div>
              `)
            } else {
              document.write(`
                <div class="carousel-item col-md-9 col-7">
                    <div class="image">
                      <div><img src="` + product.image + `" alt="product-photo"></div>
                    </div>
                    <div class="product-info">
                      <p class="name">` + product.name + `</p>
                      <p class="short-description">` + product.description + `</p>
                      <button type="submit" class="btn btn-outline-primary mt-4 mb-5">SHOP NOW</button>
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
  <div id="randomProductsCarousel" class="random-products-section carousel slide row" data-ride="carousel">
    <a class="carouselIndicator col-sm-1 col-1" href="#randomProductsCarousel" role="button" data-slide="prev">
      <img src="./images/back.png" alt="back-icon">
    </a>
    <div class="col-sm-10 col-10 p-0" role="listbox">
      <div class="carousel-item active">
        <div class="products row m-0">
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
                <div class="product ` + position + ` col-sm-4 col-4">
                  <div class="info-container row m-0 w-100">
                    <div class="img-container col-lg-6 col-sm-9 col-12 p-0">
                      <img src="` + product.image + `">
                    </div>
                    <div class="info col-lg-6 col-sm-9 col-12">
                      <p class="common-product-name mb-2">` + product.name + `</p>
                      <div>
                        <button type="submit" class="btn btn-sm btn-success">` + product.button + `</button>
                      </div>
                    </div>
                  </div>
                </div>
              `)
            });
          </script>
        </div>
      </div>
      <div class="carousel-item">
        <div class="products row m-0">
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
                <div class="product ` + position + ` col-sm-4 col-4">
                  <div class="info-container row m-0 w-100">
                    <div class="img-container col-lg-6 col-sm-9 col-12 p-0">
                      <img src="` + product.image + `">
                    </div>
                    <div class="info col-lg-6 col-sm-9 col-12">
                      <p class="common-product-name mb-2">` + product.name + `</p>
                      <div>
                        <button type="submit" class="btn btn-sm btn-success">` + product.button + `</button>
                      </div>
                    </div>
                  </div>
                </div>
              `)
            });
          </script>
        </div>
      </div>
      <div class="carousel-item">
        <div class="products row m-0">
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
                <div class="product ` + position + ` col-sm-4 col-4">
                  <div class="info-container row m-0 w-100">
                    <div class="img-container col-lg-6 col-sm-9 col-12 p-0">
                      <img src="` + product.image + `">
                    </div>
                    <div class="info col-lg-6 col-sm-9 col-12">
                      <p class="common-product-name mb-2">` + product.name + `</p>
                      <div>
                        <button type="submit" class="btn btn-sm btn-success">` + product.button + `</button>
                      </div>
                    </div>
                  </div>
                </div>
              `)
            });
          </script>
        </div>
      </div>
    </div>
    <a class="carouselIndicator col-sm-1 col-1" href="#randomProductsCarousel" role="button" data-slide="next">
      <img src="./images/next.png" alt="next-icon">
    </a>
  </div>
  <div class="featured-products">
    <div class="header">
      <p>FEATURED PRODUCTS</p>
    </div>
    <div class="body row">
      <div class="col-xl-2 col-lg-1 col-sm-1 col-1"></div>
      <div class="products col-xl-8 col-sm-10 col-10">
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
                <div class="img-container">
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
      <div class="col-xl-2 col-sm-1 col-1"></div>
    </div>
  </div>
</div>