(function () {
    'use strict';

    angular.module('directoffers.services', [])
        .service('campaignsOffersService', campaignsOffersService);

    function campaignsOffersService($http, serviceConfiguration) {
        var baseUrl = serviceConfiguration.getServerRestUrl();
        var dataFactory = {};

        dataFactory.retrieveAll = function () {
            return $http.get(baseUrl + "campaignoffers/all");
        };

        return dataFactory;
    }
})();