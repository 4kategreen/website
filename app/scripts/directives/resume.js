'use strict';

angular.module('kategreenApp')
  .directive('resume', function () {
    return {
      template: '<div></div>',
      restrict: 'E',
      transclude: true,
      link: function postLink(scope, element, attrs) {
        element.text('this is the resume directive');
      }
    };
  });
