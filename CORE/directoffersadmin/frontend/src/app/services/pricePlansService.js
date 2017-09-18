(function () {
    'use strict';

    angular.module('directoffers.services')
        .service('pricePlansService', pricePlansService);

    function pricePlansService($http, serviceConfiguration) {
        var baseUrl = serviceConfiguration.getServerRestUrl();
        var dataFactory = {};

        dataFactory.retrieveAll = function () {
            return $http.get(baseUrl + "priceplans/all");
        };

        return dataFactory;
    }
})();