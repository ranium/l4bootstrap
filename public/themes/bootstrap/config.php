<?php

return array(
  'events' => array(
    // Event called before a theme is rendered
    'beforeRenderTheme' => function($theme)
    {
      // Include all the assets
      $theme->asset()->container('footer')->add('jquery', 'assets/js/libs/jquery-1.11.1.min.js');
      $theme->asset()->container('footer')->usePath()->add('bootstrap', 'js/libs/bootstrap.min.js');
      $theme->asset()->usePath()->add('bootstrap', 'css/bootstrap.min.css');
      $theme->asset()->usePath()->add('bootstrap-theme', 'css/bootstrap-theme.min.css');
      $theme->asset()->usePath()->add('theme', 'css/theme.css');
    }
  )
);