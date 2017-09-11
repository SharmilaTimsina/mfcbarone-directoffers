(function () {
    'use strict';

    angular.module('directoffers.services')
        .service('serviceConfiguration', serviceConfiguration);

    function serviceConfiguration() {
        return {
            getServerRestUrl: function () {
                return "http://192.168.1.106:8080/directoffers/rest/"
            }
        }
    }
})();