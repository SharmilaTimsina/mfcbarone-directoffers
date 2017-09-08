/**
 * @author v.lugovsky
 * created on 16.12.2015
 */
(function () {
  'use strict';

  angular.module('directoffers.pages', [
    'ui.router',
    'directoffers.pages.dashboard',
    'directoffers.pages.connections',
    'directoffers.pages.subscriptions'


    /** 'directoffers.pages.ui',
     'directoffers.pages.components',
     'directoffers.pages.form',
     'directoffers.pages.tables',
     'directoffers.pages.charts',
     'directoffers.pages.maps',
     'directoffers.pages.profile',*/
  ]).config(routeConfig);

  /** @ngInject */
  function routeConfig($urlRouterProvider, baSidebarServiceProvider) {
    $urlRouterProvider.otherwise('/dashboard');
  }
})();

  /*
    baSidebarServiceProvider.addStaticItem({
      title: 'Pages222222222',
      icon: 'ion-document',
      subMenu: [{
        title: 'Sign In',
        fixedHref: 'auth.html',
        blank: true
      }, {
        title: 'Sign Up',
        fixedHref: 'reg.html',
        blank: true
      }, {
        title: 'User Profile',
        stateRef: 'profile'
      }, {
        title: '404 Page',
        fixedHref: '404.html',
        blank: true
      }]
    });
    baSidebarServiceProvider.addStaticItem({
      title: 'Menu Level 1',
      icon: 'ion-ios-more',
      subMenu: [{
        title: 'Menu Level 1.1',
        disabled: true
      }, {
        title: 'Menu Level 1.2',
        subMenu: [{
          title: 'Menu Level 1.2.1',
          disabled: true
        }]
      }]
    });
  }

})();
*/
