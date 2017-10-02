(function(){
    'use strict';

    angular
        .module('myApp')
        .controller('BodyController', BodyController);

    BodyController.$inject = ['$scope'];

    /** @ngInject */
    function BodyController($scope){
      $scope.hotProducts = [
        {
          name: 'COWHIDE STANDARD CREW',
          image: 'Layer1.png',
          description: "White coloured, short-sleeved, printed T-shirt for men by Levi's. This crew-nect T-shirt is made of organic cotton and comes in a regular fit.",
        },
        {
          name: 'COWHIDE STANDARD CREW',
          image: 'Layer3.png',
          description: "White coloured, short-sleeved, printed T-shirt for men by Levi's. This crew-nect T-shirt is made of organic cotton and comes in a regular fit.",
        },
        {
          name: 'COWHIDE STANDARD CREW',
          image: 'Layer11.png',
          description: "White coloured, short-sleeved, printed T-shirt for men by Levi's. This crew-nect T-shirt is made of organic cotton and comes in a regular fit.",
        }
      ];

      $scope.randomProducts = [
        {
          image: 'Layer3.png',
          name: 'BRANDED SHOES',
        },
        {
          image: 'Layer5.png',
          name: 'BRANDED SHOES',
        },
        {
          image: 'Layer6.png',
          name: 'BRANDED SHOES',
        },
        {
          image: 'Layer7.png',
          name: 'BRANDED SHOES',
        },
        {
          image: 'Layer8.png',
          name: 'BRANDED SHOES',
        },
        {
          image: 'Layer9.png',
          name: 'BRANDED SHOES',
        },
        {
          image: 'Layer10.png',
          name: 'BRANDED SHOES',
        },
        {
          image: 'Layer11.png',
          name: 'BRANDED SHOES',
        },
        {
          image: 'Layer1.png',
          name: 'BRANDED SHOES',
        }
      ];

      $scope.carousel_items = [];
      const QUANTITY = 3;
      let slide = [];
      let count = 0;
      for(let i=0; i<$scope.randomProducts.length; i++) {
        slide.push($scope.randomProducts[i]);
        count++;
        if(count == QUANTITY || (i == $scope.randomProducts.length - 1 && count < QUANTITY)) {
          $scope.carousel_items.push(slide);
          slide = [];
          count = 0;
        }
      }
    
      $scope.featuredProducts = [
        {
          image: 'Layer7.png',
          name: 'BRANDED SHOES',
          price: '300',
        },
        {
          image: 'Layer8.png',
          name: 'BRANDED SHOES',
          price: '300',
        },
        {
          image: 'Layer9.png',
          name: 'BRANDED SHOES',
          price: '300',
        },
        {
          image: 'Layer10.png',
          name: 'BRANDED SHOES',
          price: '300',
        },
        {
          image: 'Layer11.png',
          name: 'BRANDED SHOES',
          price: '300',
        },
        {
          image: 'Layer6.png',
          name: 'BRANDED SHOES',
          price: '300',
        }
      ];
    }

}());