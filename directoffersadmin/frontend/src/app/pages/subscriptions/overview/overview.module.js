/**
 * @author v.lugovsky
 * created on 16.12.2015
 */
(function () {
  'use strict';

  angular.module('directoffers.pages.subscriptions.overview', [])
      .config(routeConfig);

  /** @ngInject */
  function routeConfig($stateProvider) {
    $stateProvider
        .state('subscriptions.overview', {
          url: '/overview',
          templateUrl: 'app/pages/subscriptions/overview/overview.html',
          title: 'Overview',
          sidebarMeta: {
            order: 0,
          },
        });
  }

})();
