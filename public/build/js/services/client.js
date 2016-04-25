angular.module('app.services')
        .service('Client', ['$resource', 'appConfig', '$scope', function($resource, appConfig, $scope){
                return $resource(appConfig.baseUrl + '/client/:id', {id: '@id'});
    }]);