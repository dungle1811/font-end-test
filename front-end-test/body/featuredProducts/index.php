<link rel="stylesheet" href="../../css/body/featuredProductsStyles.css">
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
            image: '../../images/Layer7.png',
            name: 'BRANDED SHOES',
            price: '300',
            button: 'BUY NOW'
          },
          {
            image: '../../images/Layer8.png',
            name: 'BRANDED SHOES',
            price: '300',
            button: 'BUY NOW'
          },
          {
            image: '../../images/Layer9.png',
            name: 'BRANDED SHOES',
            price: '300',
            button: 'BUY NOW'
          },
          {
            image: '../../images/Layer10.png',
            name: 'BRANDED SHOES',
            price: '300',
            button: 'BUY NOW'
          },
          {
            image: '../../images/Layer11.png',
            name: 'BRANDED SHOES',
            price: '300',
            button: 'BUY NOW'
          },
          {
            image: '../../images/Layer6.png',
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