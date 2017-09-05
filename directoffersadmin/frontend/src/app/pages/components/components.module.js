/**
 * @author k.danovsky
 * created on 15.01.2016
 */
(function () {
  'use strict';

  angular.module('directoffers.pages.components', [
    'directoffers.pages.components.mail',
    'directoffers.pages.components.timeline',
    'directoffers.pages.components.tree',
  ])
      .config(routeConfig);

  /** @ngInject */
  function routeConfig($stateProvider) {
    $stateProvider
        .state('components', {
          url: '/components',
          template : '<ui-view  autoscroll="true" autoscroll-body-top></ui-view>',
          abstract: true,
          title: 'Components',
          sidebarMeta: {
            icon: 'ion-gear-a',
            order: 100,
          },
        });
  }

})();
