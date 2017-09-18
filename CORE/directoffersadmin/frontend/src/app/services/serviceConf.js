(function () {
    'use strict';

    angular.module('directoffers.services')
        .service('serviceConfiguration', serviceConfiguration);

    function serviceConfiguration() {
        return {
            getServerRestUrl: function () {
                return "http://localhost:8080/directoffers/rest/"
            }
        }
    }
})();