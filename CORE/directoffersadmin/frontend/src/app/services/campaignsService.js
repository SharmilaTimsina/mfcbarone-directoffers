(function () {
    'use strict';

    angular.module('directoffers.services')
        .service('campaignsService', campaignsService);

    function campaignsService($http, serviceConfiguration) {
        var baseUrl = serviceConfiguration.getServerRestUrl();
        var dataFactory = {};

        dataFactory.retrieveAll = function () {
            return $http.get(baseUrl + "campaigns/all");
        };

        return dataFactory;
    }
})();