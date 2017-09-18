(function () {
    'use strict';

    angular.module('directoffers.pages.subscriptions.offers')
        .controller('OffersCtrl', OffersCtrl);

    /** @ngInject */
    function OffersCtrl($scope, $state, $element, $uibModal, $sce, campaignsOffersService) {
        $scope.status = undefined;
        $scope.offers = {};
        $scope.offersPageSize = 25;

        campaignsOffersService.retrieveAll().then(function (response) {
            $scope.offers = response.data;
            console.log("then offers: " + angular.toJson($scope.offers));
        }, function (error) {
            console.log("error: unable to load offers -> " + error.message);
            $scope.status = 'Unable to load offers data: ' + error.message;
        });


        $scope.open = function (url) {
            $scope.modalUrl = $sce.trustAsResourceUrl(url);
            console.log("modal url: " + $scope.modalUrl);
            $uibModal.open({
                animation: true,
                templateUrl: "app/pages/subscriptions/offers/mobileIframe.html",
                size: "phone-case",
                scope: $scope,
                resolve: {
                    modalUrl: function () {
                        return $scope.modalUrl;
                    }
                }
            });
        };
    }
})();