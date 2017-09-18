/**
 * @author v.lugovsky
 * created on 16.12.2015
 */
(function () {
  'use strict';

  angular.module('directoffers.pages.subscriptions.campaigns', [])
      .config(routeConfig);

  /** @ngInject */
  function routeConfig($stateProvider) {
    $stateProvider
        .state('subscriptions.campaigns', {
          url: '/campaigns',
          templateUrl: 'app/pages/subscriptions/campaigns/campaigns.html',
          abstract: true,
          title: 'Campaigns',
          sidebarMeta: {
            order: 500,
          },
        });
  }

})();
