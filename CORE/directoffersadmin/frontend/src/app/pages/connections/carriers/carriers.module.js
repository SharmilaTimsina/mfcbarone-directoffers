/**
 * @author v.lugovsky
 * created on 16.12.2015
 */
(function () {
  'use strict';

  angular.module('directoffers.pages.connections.carriers', [])
    .config(routeConfig)


  /** @ngInject */
  function routeConfig($stateProvider) {
    $stateProvider
      .state('connections.carriers', {
        url: '/carriers',
        templateUrl: 'app/pages/connections/carriers/carriers.html',
        controller: 'CarriersCtrl',
        title: 'Carriers',
        sidebarMeta: {
          order: 1,
        },
      });
  }
})();
