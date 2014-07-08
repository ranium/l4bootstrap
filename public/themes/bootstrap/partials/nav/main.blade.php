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
      <a class="navbar-brand" href="#">{{ trans('titles.app_name') }}</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="@if (Theme::getCurrentPage() == 'home') active @endif">{{ link_to_route('home', trans('navigation.home')) }}</li>
        <li class="@if (Theme::getCurrentPage() == 'about') active @endif">{{ link_to_route('page', trans('navigation.about'), ['page' => 'about']) }}</li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Login</a></li>
        <li><a href="#">Signup</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>