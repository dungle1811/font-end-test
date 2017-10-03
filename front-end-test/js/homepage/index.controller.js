(function(){
    'use strict';

    angular
        .module('myApp', [])
        .controller('HomeController', HomeController);

    HomeController.$inject = ['$scope'];

    /** @ngInject */
    function HomeController($scope){
      // $scope.left = $(window).width() - $('#trademark').outerWidth() - $('#search-box').outerWidth();

    }

}());