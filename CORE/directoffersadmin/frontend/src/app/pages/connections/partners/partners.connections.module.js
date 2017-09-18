/**
 * @author v.lugovsky
 * created on 16.12.2015
 */
(function () {
  'use strict';

  angular.module('directoffers.pages.connections.partners', [])
    .config(routeConfig)
    .directive('connectionsdetailschartskpis', dashboardPieChart);

  /** @ngInject */
  function dashboardPieChart() {
    return {
      restrict: 'E',
      controller: 'ConnectionsDetailsChartsKpisCtrl',
      templateUrl: 'app/pages/connections/partners/connectionskpi/connetionsDetailsKpis.html'
    };
  }

  /** @ngInject */
  function routeConfig($stateProvider) {
    $stateProvider
      .state('connections.partners', {
        url: '/partners',
        templateUrl: 'app/pages/connections/partners/partnersConnections.html',
        controller: 'PartnersConnectionsCtrl',
        title: 'Partners',
        sidebarMeta: {
          order: 0,
        },
      }).state('connections.partners.details', {
        url: '/connections/details',
        params: { conn: null },
        templateUrl: 'app/pages/connections/partners/partnersConnectionsDetails.html',
        controller: 'PartnersConnectionsDetailsCtrl'
      });
  }
})();
