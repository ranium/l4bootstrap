<!DOCTYPE html>
<html>
    <head>
        <title>{{ Theme::get('title') }} &mdash; Laravel 4 Bootstrap</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="{{ Theme::get('keywords') }}">
        <meta name="description" content="{{ Theme::get('description') }}">
        {{ Theme::asset()->styles() }}
        {{ Theme::asset()->scripts() }}
    </head>
    <body>
        <div id="wrap">
            <div class="container">
              {{ Theme::content() }}
            </div>
        </div>
        {{ Theme::asset()->container('footer')->scripts() }}
    </body>
</html>