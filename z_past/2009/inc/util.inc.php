<?php
  
  // start session for language preference
  session_save_path('sessions/');
  session_start();
  $default_lang = "en";
  $getlang = $_GET["lang"];

  // see if language is being re-set
  if(isset($_GET["lang"]))
  {
    $_SESSION["lang"] = $_GET["lang"];
  }

  // function to output proper language
  function l($en, $es = '')
  {
    global $default_lang;
    if($_SESSION["lang"] == 'es')
      return $es;
    else
      return $$default_lang;
  }
  
  echo '<!--';
  echo print_r($_SESSION, 1);
  echo '-->';

?>
