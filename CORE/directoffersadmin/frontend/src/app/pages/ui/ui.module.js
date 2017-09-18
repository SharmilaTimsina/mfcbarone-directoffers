/**
 * @author k.danovsky
 * created on 12.01.2016
 */
(function () {
  'use strict';

  angular.module('directoffers.pages.ui', [
    'directoffers.pages.ui.typography',
    'directoffers.pages.ui.buttons',
    'directoffers.pages.ui.icons',
    'directoffers.pages.ui.modals',
    'directoffers.pages.ui.grid',
    'directoffers.pages.ui.alerts',
    'directoffers.pages.ui.progressBars',
    'directoffers.pages.ui.notifications',
    'directoffers.pages.ui.tabs',
    'directoffers.pages.ui.slider',
    'directoffers.pages.ui.panels',
  ])
      .config(routeConfig);

  /** @ngInject */
  function routeConfig($stateProvider) {
    $stateProvider
        .state('ui', {
          url: '/ui',
          template : '<ui-view  autoscroll="true" autoscroll-body-top></ui-view>',
          abstract: true,
          title: 'UI Features',
          sidebarMeta: {
            icon: 'ion-android-laptop',
            order: 200,
          },
        });
  }

})();
