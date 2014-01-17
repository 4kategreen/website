'use strict';

angular.module('kategreenApp')
  .directive('post', function () {
    return {
      template: '<div></div>',
      restrict: 'E',
      link: function postLink(scope, element, attrs) {
        element.text('this is the post directive');
      }
    };
  });
