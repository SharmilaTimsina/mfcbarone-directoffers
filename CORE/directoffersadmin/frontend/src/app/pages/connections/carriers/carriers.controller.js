(function () {
    'use strict';

    angular.module('directoffers.pages.connections.carriers')
        .controller('CarriersCtrl', CarriersCtrl);

    /** @ngInject */
    function CarriersCtrl($scope, $state, $element, carriersService) {
        $scope.status = undefined;
        $scope.carriers = {};
        $scope.carriersPageSize = 25;

        carriersService.retrieveAll().then(function (response) {
            $scope.carriers = response.data;
            console.log("then carriers: " + angular.toJson($scope.carriers));
        }, function (error) {
            console.log("error: unable to load carriers -> " + error.message);
            $scope.status = 'Unable to load carriers data: ' + error.message;
        });
    }
})();