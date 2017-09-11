(function () {
    'use strict';

    angular.module('directoffers.pages.subscriptions.campaigns')
        .controller('CampaignsCtrl', CampaignsCtrl);

    /** @ngInject */
    function CampaignsCtrl($scope, $state, $element, campaignsService) {
        $scope.status = undefined;
        $scope.campaigns = {};
        $scope.campaignsPageSize = 25;

        campaignsService.retrieveAll().then(function (response) {
            $scope.campaigns = response.data;
            console.log("then campaigns: " + angular.toJson($scope.campaigns));
        }, function (error) {
            console.log("error: unable to load campaigns -> " + error.message);
            $scope.status = 'Unable to load campaigns data: ' + error.message;
        });
    }
})();