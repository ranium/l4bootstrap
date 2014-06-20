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


  /**
   * Method to send an email.
   *
   * This method takes an option array with following keys
   *   to => array('email' => 'xyz@test.com', 'name' => 'Recipient Name')
   *   cc => array('cc@email.com')
   *   subject => Subject of the email
   *   view => Name of the email view
   *   from => array('email' => 'xyz@test.com', 'name' => 'Sender Name')
   *   data => array of data to be available in email view
   *   bcc => BCC email address
   *
   * @param  array  $options Options array as described above
   * @return void
   */
  static public function sendEmail($options = array())
  {
    $defaultOptions = array(
      'data' => array()
    );
    $options = array_merge($defaultOptions, $options);

    Mail::send($options['view'], $options['data'], function ($message) use ($options) {
      $message->subject($options['subject']);
      $message->to($options['to']);
      if (!empty($options['from'])) {
        if (is_array($options['from'])) {
          $message->from($options['from']['email'], $options['from']['name']);
        } else {
          $message->from($options['from']);
        }
      }

      if (!empty($options['cc'])) {
        $message->cc($options['cc']);
      }

      if (!empty($options['bcc'])) {
        $message->bcc($options['bcc']);
      }
    });
  }//end sendEmail()
}