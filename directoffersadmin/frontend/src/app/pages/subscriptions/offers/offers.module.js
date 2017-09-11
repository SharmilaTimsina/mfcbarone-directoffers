/**
 * @author v.lugovsky
 * created on 16.12.2015
 */
(function () {
  'use strict';

  angular.module('directoffers.pages.subscriptions.offers', [])
    .config(routeConfig);

  /** @ngInject */
  function routeConfig($stateProvider) {
    $stateProvider
      .state('subscriptions.offers', {
        url: '/offers',
        templateUrl: 'app/pages/subscriptions/offers/offers.html',
        title: 'Offers',
        controller: 'OffersCtrl',
        sidebarMeta: {
          order: 2,
        },
      });
  }

})();
