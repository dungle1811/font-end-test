(function(){
    'use strict';

    angular
        .module('myApp')
        .controller('SidebarController', SidebarController);

    SidebarController.$inject = ['$scope'];

    /** @ngInject */
    function SidebarController($scope){
      $scope.menu = ['HOME', 'SALE', 'HANDBAGS', 'WALLETS', 'ACCESSORIES', 'MENS STORE', 'SHOES', 'VINTAGE', 'SERVICES', 'CONTACT US'];

      $scope.onClickMenu = () => {
          
      }
    }

}());