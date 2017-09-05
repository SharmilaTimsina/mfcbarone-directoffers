/**
 * @author v.lugovsky
 * created on 16.12.2015
 */
(function () {
  'use strict';

  angular.module('directoffers.pages.subscriptions', [
    'directoffers.pages.subscriptions.campaigns'
  ])
      .config(routeConfig);

  /** @ngInject */
  function routeConfig($stateProvider) {
    $stateProvider
        .state('subscriptions', {
          url: '/subscriptions',
          templateUrl: 'app/pages/subscriptions/subscriptions.html',
          title: 'Subscriptions',
          sidebarMeta: {
            icon: 'ion-person-add',
            order: 0,
          },
        });
  }

})();
