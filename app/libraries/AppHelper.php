<?php
/**
 * Helper class to be used anywhere in the app
 *
 * All methods and properties are static
 *
 */
class AppHelper
{

  /**
   * Property to hold variables to be used in JS
   *
   * @var array
   */
  static $jsVars = array();


  /**
   * Method to set JS vars to be used in view
   *
   * @param string $name
   * @param mixed $value
   *
   * @return  void
   */
  static public function setJsVar($name, $value)
  {
    // Set the var in jsVars array
    self::$jsVars[$name] = $value;
  }


  /**
   * Method to get jsVars property
   *
   * @return  array
   */
  static public function getJsVars()
  {
    return self::$jsVars;
  }
}