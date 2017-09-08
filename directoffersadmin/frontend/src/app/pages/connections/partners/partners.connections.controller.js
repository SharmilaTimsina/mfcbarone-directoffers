(function () {
    'use strict';

    angular.module('directoffers.pages.connections.partners')
        .controller('PartnersConnectionsCtrl', PartnersConnectionsCtrl);

    /** @ngInject */
    function PartnersConnectionsCtrl($scope, $state, $element, connectionsService) {
        $scope.status = undefined;
        $scope.connections = {};
        $scope.connectionsPageSize = 25;

        connectionsService.retrieveAll().then(function (response) {
            $scope.connections = response.data;
            console.log("then connections: " + angular.toJson($scope.connections));
        }, function (error) {
            console.log("error: unable to load connections -> " + error.message);
            $scope.status = 'Unable to load connections data: ' + error.message;
        });

        $scope.rowClick = function (row) {
            $state.go("connections.partners.details", { conn: row });
        }
    }
})();