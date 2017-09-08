(function () {
    'use strict';

    angular.module('directoffers.pages.connections.partners')
        .controller('PartnersConnectionsDetailsCtrl', PartnersConnectionsDetailsCtrl);

    /** @ngInject */
    function PartnersConnectionsDetailsCtrl($scope, $element, $state, $stateParams, connectionsService) {
        $scope.status = undefined;

        console.log('rootState.resolve', $stateParams);

        console.log('rootState.conn', $stateParams.conn);
        $scope.rowClick = function (row) {
            $state.go("connections.partners.details", row);
        }
    }
})();