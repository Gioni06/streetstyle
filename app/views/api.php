<!doctype html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Api</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
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
        <div class="container">
            <div class="row">
                  <div class="col-sm-12">
                      <section>
                          <header>
                              <h1>/api/posts</h1>
                          </header>
                          <div>
                              <p>gets all posts from the database and returns a json object</p>
                              <pre><code>
[{
    "id": 1,
    "title": "My first title",
     "text": "Some lorem ipsum text",
    "image_url": "http://placehold.it/800x600"
},
{
    "id": 2,
    "title": "My second title",
    "text": "Some more lorem ipsum text",
    "image_url": "http://placehold.it/800x600"
}]
                              </code></pre>

                          </div>
                      </section>
                  </div>
            </div>
        </div>
       

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->

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
