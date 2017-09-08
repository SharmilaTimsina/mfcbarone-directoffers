(function () {
    'use strict';

    angular.module('directoffers.services')
        .service('connectionsService', connectionsService);

    function connectionsService($http, serviceConfiguration) {
        var baseUrl = serviceConfiguration.getServerRestUrl();
        var dataFactory = {};

        dataFactory.retrieveAll = function () {
            return $http.get(baseUrl + "connections/all");
        };

        return dataFactory;
    }
})();