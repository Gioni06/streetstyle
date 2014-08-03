var app = angular.module("Streetstyle", []);
app.controller("PostsCtrl", function($scope, $http) {
    $scope.filters = { };
    $scope.setFilter = function (tag) {
        $scope.filters.tag = tag.tag;
        console.log($scope.filters.tag);
    };
    $http.get('/streetstyle/public/api/postsWithTags').
        success(function(data, status, headers, config) {
            $scope.posts = data;
            window.MYSCOPE = data;
        }).
        error(function(data, status, headers, config) {
            // log error
        });

    $http.get('/streetstyle/public/api/tags').
        success(function(data, status, headers, config) {
            $scope.tags = data;

        }).
        error(function(data, status, headers, config) {
            // log error
        });

});