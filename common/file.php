<?php


class File
{
  static $fileNameTchat = "/MyDiv-web/data/tchat/convers.conv";
  static $file = null;
  static $separator = "|";
  static $endl = "\r\n";

  static function openfileConvers(string $mode)
  {
    if(!is_file($_SERVER['DOCUMENT_ROOT'].File::$fileNameTchat))
    {

      File::$file = fopen($_SERVER['DOCUMENT_ROOT'].File::$fileNameTchat,'x+');
      var_dump(File::$file);
    }
    else
    {
      File::$file = @fopen($_SERVER['DOCUMENT_ROOT'].File::$fileNameTchat,$mode);
    }
  }
  static function closeFile()
  {
    fclose(File::$file);
    File::$file = null;
  }
  static function readFileConvers():array
  {
    $text = file_get_contents($_SERVER['DOCUMENT_ROOT'].File::$fileNameTchat);
    $content = preg_split("/[".File::$endl."]+/",$text);
    /*
    dernier ligne est vide donc
    il y a un element null dans le tableau
    on le suprime
    */
    array_pop($content);
    return $content;
  }
  static function writeFileConvers(int $idNewMessage,int $idUser,string $message):bool
  {
    if(!File::$file)
    {
      File::openfileConvers( "a");
    }

    fwrite(File::$file,$idNewMessage.File::$separator.$idUser.File::$separator.$message.File::$separator.date('l jS \of F Y h:i:s A').File::$endl);
    File::closeFile();
    return true;
  }
  static function cleanConversation():bool
  {
    File::openfileConvers('w+');
    File::closeFile();
  }
  static function getCountLine():int
  {
    return count(self::readFileConvers());
  }
}
?>
