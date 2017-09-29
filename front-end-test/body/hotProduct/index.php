<link rel="stylesheet" href="../../css/body/hotProductStyles.css">
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