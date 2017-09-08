/**
 * @author v.lugovsky
 * created on 16.12.2015
 */
(function () {
  'use strict';

  angular.module('directoffers.pages.connections.priceplans', [])
    .config(routeConfig)


  /** @ngInject */
  function routeConfig($stateProvider) {
    $stateProvider
      .state('connections.priceplans', {
        url: '/priceplans',
        templateUrl: 'app/pages/connections/priceplans/priceplans.html',
        controller: 'PricePlansCtrl',
        title: 'Price Plans',
        sidebarMeta: {
          order: 2,
        },
      });
  }
})();
