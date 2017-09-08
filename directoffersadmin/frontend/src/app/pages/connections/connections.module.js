/**
 * @author v.lugovsky
 * created on 16.12.2015
 */
(function () {
  'use strict';

  angular.module('directoffers.pages.connections', [
    'directoffers.pages.connections.partners',
    'directoffers.pages.connections.carriers',
    'directoffers.pages.connections.priceplans'
  ])
    .config(routeConfig);

  /** @ngInject */
  function routeConfig($stateProvider) {
    $stateProvider
      .state('connections', {
        url: '/connections',
        abstract: true,
        templateUrl: 'app/pages/connections/connections.html',
        title: 'Connections',
        sidebarMeta: {
          icon: 'ion-connection-bars',
          order: 0
        },
      });
  }

})();
