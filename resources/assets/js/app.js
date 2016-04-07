var app = angular.module('app', ['ng-route', 'app.controllers']);

angular.module('app.controllers', []);
app.config(function($routeProvider){
    $routeProvider.when('/login', {
       templateUrl: 'views/login.html',
       Controller: 'LoginController'
    }).
    $routeProvider.when('/home', {
       templateUrl: 'build/views/home.html',
       Controller: 'HomeController'
    });
});