
<?php
/**
 *
 */
class NavigatorLanguage
{
  static public $languageArray = array("fr");

  static public function getLanguage():string
  {
    $current = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    if(!in_array($current, self::$languageArray))
    {
      return 'en';
    }
    return $current;
  }
}
?>
