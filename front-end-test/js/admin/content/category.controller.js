(function(){
    'use strict';

    angular
        .module('admin')
        .controller('CategoryController', CategoryController);

    CategoryController.$inject = ['$scope'];

    /** @ngInject */
    function CategoryController($scope){
      // Gender:
      // 1 - Male
      // 2 - Female
      // 3 - Both
      $scope.gender = [1, 2, 3];

      $scope.list = [
        {
          title: 'jelly shoes',
          gender: 2
        },
        {
          title: 'classic boots',
          gender: 1
        },
        {
          title: 'sandal',
          gender: 1
        },
        {
          title: 'high-heeled',
          gender: 3
        },
        {
          title: 'goft shoes',
          gender: 3
        },
        {
          title: 'chef shoes',
          gender: 1
        },
        {
          title: 'roman sandals',
          gender: 2
        },
        {
          title: 'rounded toe shoes',
          gender: 3
        }
      ]

      // $scope.addCategory = (category) => {
      //   console.log('name: ', $scope.name);
      //   console.log('gender: ', $scope.gender);
      //   let new_category = {
      //     title: category.title,
      //     gender: category.gender
      //   }
      //   switch (new_category.gender) {
      //     case 'male':
      //       new_category.gender = 1;
      //       break;
      //     case 'female':
      //       new_category.gender = 2;
      //       break;
      //     default:
      //       new_category.gender = 3;
      //       break;
      //   }
      //   $scope.list.push(category);
      //   console.log($scope.list);
      // }
    }

}());