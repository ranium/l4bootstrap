<?php

class BaseController extends Controller {


	/**
   * Theme instance
   *
   * @var \Teepluss\Theme\Theme
   */
  protected $theme;


  /**
   * Constructor
   *
   * @return 	void
   */
  public function __construct()
  {
  	// Set the theme object. Change the theme name to whatever theme you use. l4bootstrap ships with a theme named "bootstrap".
  	// Theme directories are in public/themes/ directory
    $this->theme = Theme::uses('bootstrap');
  }
}
