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
        <script src="../bower_components/jquery/dist/jquery.js"></script>
        <script src="../bower_components/angular/angular.min.js"></script>
        <script src="scripts/app.js"></script>

    </head>
    <body ng-controller="PostsCtrl">
        <ul>
            <nav>
                <li ng-repeat="tag in tags">
                    <a href="#" id="{{tag.id}}" ng-click="setFilter(tag)">{{tag.tag}}</a>
                </li>
                <li>
                    <a href="#" ng-click="setFilter('')">clear</a>
                </li>
                <li>
                    Enter name: <input type="text" ng-model="filters.tag"><br>
                </li>
            </nav>
        </ul>
       <div>
            <article ng-repeat="post in posts | filter:filters.tag" >
            <header><h1>{{post.title}}</h1></header>
              <p>{{post.text}}</p>
              <img ng-src="{{post.image_url}}">
              <ul>
                  <li data-ng-repeat="tag in post.tags">
                      <p>{{tag.tag}}</p>
                  </li>
              </ul>
            </article>
        </div>



        <!-- build:js scripts/vendor.js -->
        <!-- bower:js -->

        <!-- endbower -->
        <!-- endbuild -->



        <!-- build:js scripts/plugins.js -->

        <!-- endbuild -->

        <!-- build:js scripts/main.js -->

        <!-- endbuild -->

    
</body>
</html>
