<div class="body container-fluid" ng-controller="BodyController">
  <div class="cover-container" id="cover"></div>
  <div class="hot-product-section row">
    <div id="hotProductCarousel" class="carousel slide w-100" data-ride="carousel">
      <div class="tab-icon carousel-indicators">
        <i class="fa fa-circle tab active" data-target="#hotProductCarousel" data-slide-to="0"></i>
        <i class="fa fa-circle tab" data-target="#hotProductCarousel" data-slide-to="1"></i>
        <i class="fa fa-circle tab" data-target="#hotProductCarousel" data-slide-to="2"></i>
      </div>
      <div class="carousel-inner w-100" role="listbox">
        <div class="carousel-item col-md-9 col-7" ng-repeat="product in hotProducts" ng-class="$index === 0 ? 'active' : null">
          <div class="image">
            <div><img ng-src="./images/{{ product.image }}" alt="product-photo"></div>
          </div>
          <div class="product-info">
            <p class="name" ng-bind="product.name"></p>
            <p class="short-description" ng-bind="product.description"></p>
            <button type="submit" class="btn btn-outline-primary mt-4 mb-5">SHOP NOW</button>
          </div>
        </div>
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
      <div class="carousel-item" ng-repeat="item in carousel_items track by $index" ng-class="$index == 0 ? 'active' : null">
        <div class="products row m-0">
          <div class="product col-sm-4 col-4" ng-repeat="subItem in item track by $index" ng-class="$index != 0 && $index != item.length - 1 ? 'middle' : null">
            <div class="info-container row m-0 w-100">
              <div class="img-container col-lg-6 col-sm-9 col-12 p-0">
                <img ng-src="./images/{{ subItem.image }}">
              </div>
              <div class="info col-lg-6 col-sm-9 col-12">
                <p class="common-product-name mb-2" ng-bind="subItem.name"></p>
                <div>
                  <button type="submit" class="btn btn-sm btn-success">SHOP</button>
                </div>
              </div>
            </div>
          </div>
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
        <div class="block-product" ng-repeat="product in featuredProducts">
          <div class="img-container">
            <img ng-src="./images/{{ product.image }}">
          </div>
          <p class="common-product-name" ng-bind="product.name"></p>
          <div class="payment">
            <div class="price">
              <label><i class="fa fa-usd"></i> {{ product.price }}</label>
            </div>
            <button type="submit" class="buy btn btn-sm btn-success">BUY NOW</button>
          </div>
        </div>
      </div>
      <div class="col-xl-2 col-sm-1 col-1"></div>
    </div>
  </div>
</div>