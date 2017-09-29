<link rel="stylesheet" href="../../css/body/randomProductsStyles.css">
<div id="randomProductsCarousel" class="random-products-section row carousel slide" data-ride="carousel">
  <div class="carousel-inner col-10 p-0" role="listbox">
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
              <div class="product ` + position + ` col-4">
                <div class="row m-0 w-100">
                  <div class="img-container col-6">
                    <img src="` + product.image + `">
                  </div>
                  <div class="info col-6">
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
              <div class="product ` + position + ` col-4">
                <div class="row m-0 w-100">
                  <div class="img-container col-6">
                    <img src="` + product.image + `">
                  </div>
                  <div class="info col-6">
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
              <div class="product ` + position + ` col-4">
                <div class="row m-0 w-100">
                  <div class="img-container col-6">
                    <img src="` + product.image + `">
                  </div>
                  <div class="info col-6">
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
  <a class="carousel-control-prev col-1" href="#randomProductsCarousel" role="button" data-slide="prev">
    <img src="./images/back.png" alt="back-icon">
  </a>
  <a class="carousel-control-next col-1" href="#randomProductsCarousel" role="button" data-slide="next">
    <img src="./images/next.png" alt="next-icon">
  </a>
</div>