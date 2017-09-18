(function () {
    'use strict';

    angular.module('directoffers.pages.connections.priceplans')
        .controller('PricePlansCtrl', PricePlansCtrl);

    /** @ngInject */
    function PricePlansCtrl($scope, $state, $element, pricePlansService) {
        $scope.status = undefined;
        $scope.pricePlans = {};
        $scope.pricePlansPageSize = 25;

        pricePlansService.retrieveAll().then(function (response) {
            $scope.pricePlans = response.data;
            console.log("then pricePlans: " + angular.toJson($scope.pricePlans));
        }, function (error) {
            console.log("error: unable to load pricePlans -> " + error.message);
            $scope.status = 'Unable to load pricePlans data: ' + error.message;
        });
    }
})();