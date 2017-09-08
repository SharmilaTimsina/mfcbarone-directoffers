(function () {
    'use strict';

    angular.module('directoffers.services', [])
        .service('carriersService', carriersService);

    function carriersService($http, serviceConfiguration) {
        var baseUrl = serviceConfiguration.getServerRestUrl();
        var dataFactory = {};

        dataFactory.retrieveAll = function () {
            return $http.get(baseUrl + "carriers/all");
        };

        return dataFactory;
    }
})();