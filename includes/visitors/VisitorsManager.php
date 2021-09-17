<?php



/**
 *
 */
class VisitorsManager
{
  static private $nameFileUniqueVisitorsHome = "uniqueVisitorsHome";

  static public function addUniqueVisitorsHome():bool
  {
    return self::addUniqueVisitors(self::$nameFileUniqueVisitorsHome);
  }
  static public function addUniqueVisitors(string $nameFile):bool
  {
    $isSmartPhone = false;
    try
    {
      if(!file_exists($_SERVER['DOCUMENT_ROOT'].'/MyDiv-web/statistic/'.$nameFile.".txt"))
      {
         $fp = fopen($_SERVER['DOCUMENT_ROOT'].'/MyDiv-web/statistic/'.$nameFile.".txt", "w+");
         fclose($fp);
      }
      //Unique Visitors
      $uniqueFile = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/MyDiv-web/statistic/'.$nameFile.".txt");
      if(strpos($uniqueFile, $_SERVER['REMOTE_ADDR']) !== FALSE) {
      	//Do nothing, they're not unique
      }
      else
      {
        if(isset($_SERVER['HTTP_REFERER']))
        {
          $referre = $_SERVER['HTTP_REFERER'];
        }
        else
        {
          $referre = "none";
        }
      	$fp = fopen($_SERVER['DOCUMENT_ROOT'].'/MyDiv-web/statistic/'.$nameFile.".txt", "a") or die("Error!");
        fwrite($fp, $_SERVER['REMOTE_ADDR']." | ".$referre." | ".$_SERVER['HTTP_USER_AGENT']." | ".date('l jS \of F Y h:i:s A')." \r\n");
      	fclose($fp);
      }
      return true;
    }
    catch(\Exception $e)
    {
      return false;
    }
  }
  ////////////////////////////////
  static public function getCountUniqueVisitorsHome():int
  {
    return self::getCountUniqueVisitors(self::$nameFileUniqueVisitorsHome);
  }

}





 ?>
