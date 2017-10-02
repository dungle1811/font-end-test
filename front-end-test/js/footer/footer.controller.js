(function(){
    'use strict';

    angular
        .module('myApp')
        .controller('FooterController', FooterController)

    FooterController.$inject = ['$scope'];

    /** @ngInject */
    function FooterController($scope){
      $scope.menu = [
        {
          title: 'FEATURED SALE',
          items: [
            'Alexis Hudson',
            'American Apparel',
            'Ben Sherman',
            'Big Buddha',
            'Chanel',
            'Christian Audigier',
            'Coach',
            'Cole Haan'
          ]
        },
        {
          title: 'MEN STORE',
          items: [
            'Alexis Hudson',
            'American Apparel',
            'Ben Sherman',
            'Big Buddha',
            'Chanel',
            'Christian Audigier',
            'Coach',
            'Cole Haan'
          ]
        },
        {
          title: 'WOMEN STORE',
          items: [
            'Alexis Hudson',
            'American Apparel',
            'Ben Sherman',
            'Big Buddha',
            'Chanel',
            'Christian Audigier',
            'Coach',
            'Cole Haan'
          ]
        },
        {
          title: 'QUICK LINKS',
          items: [
            'Alexis Hudson',
            'American Apparel',
            'Ben Sherman',
            'Big Buddha',
            'Chanel',
            'Christian Audigier',
            'Coach',
            'Cole Haan'
          ]
        }
      ]
    }

}());