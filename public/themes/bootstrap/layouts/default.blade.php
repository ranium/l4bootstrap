<!DOCTYPE html>
<html>
    <head>
        <title>{{ Theme::get('title') }} &mdash; {{ trans('titles.app_name') }}</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="{{ Theme::get('keywords') }}">
        <meta name="description" content="{{ Theme::get('description') }}">
        <script>
            // A handy global js variable to be used anywhere. Points to the root of your app.
            var baseUrl = '{{ URL::to('/') }}';

            // A global js object
            var app = app || {vars: {}};

            // Put the variables set from the controller as a json object inside the app object
            app.vars = {{ json_encode(AppHelper::getJsVars()); }};
        </script>
        {{ Theme::asset()->styles() }}
        {{ Theme::asset()->scripts() }}
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body role="document">
        <!-- Fixed navbar -->
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Bootstrap theme</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>

        <div class="container" role="main">
            {{ Theme::content() }}
        </div>
        {{ Theme::asset()->container('footer')->scripts() }}
    </body>
</html>