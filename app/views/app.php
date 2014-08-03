<!doctype html>
<html class="no-js" ng-app="Streetstyle">
    <head>
        <meta charset="utf-8">
        <title>streetstyle</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!-- build:css styles/vendor.css -->
        <!-- bower:css -->
            <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- endbower -->
        <!-- endbuild -->

        <!-- build:css styles/main.css -->
        
        <!-- endbuild -->

        <!-- build:js scripts/vendor/modernizr.js -->
        <script src="../bower_components/modernizr/modernizr.js"></script>
        <!-- endbuild -->

    </head>
    <body>
        <!--[if lt IE 10]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

       <div ng-controller="PostsCtrl">
            <article ng-repeat="post in posts">
            <header><h1>{{post.title}}</h1></header>
              <p>{{post.text}}</p>
              <img src="{{post.image_url}}">
            </article>
        </div>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->

        <!-- build:js scripts/vendor.js -->
        <!-- bower:js -->
        <script src="../bower_components/jquery/dist/jquery.js"></script>
        <script src="../bower_components/angular/angular.min.js"></script>
        <!-- endbower -->
        <!-- endbuild -->
        <script type="text/javascript">
                var app = angular.module("Streetstyle", []);
                app.controller("PostsCtrl", function($scope, $http) {
                  $http.get('http://localhost/streetstyle/public/api/posts').
                    success(function(data, status, headers, config) {
                      $scope.posts = data;

                    }).
                    error(function(data, status, headers, config) {
                      // log error
                    });
                });
        </script>


        <!-- build:js scripts/plugins.js -->

        <!-- endbuild -->

        <!-- build:js scripts/main.js -->
        <script src="scripts/app.js"></script>
        <!-- endbuild -->

    
</body>
</html>
