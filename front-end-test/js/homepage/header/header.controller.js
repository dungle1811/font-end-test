(function(){
    'use strict';

    angular
        .module('myApp')
        .controller('HeaderController', HeaderController);

    HeaderController.$inject = ['$scope'];

    /** @ngInject */
    function HeaderController($scope){
      $scope.menu = ['HOME', 'SALE', 'HANDBAGS', 'WALLETS', 'ACCESSORIES', 'MENS STORE', 'SHOES', 'VINTAGE', 'SERVICES', 'CONTACT US'];
    }

}());