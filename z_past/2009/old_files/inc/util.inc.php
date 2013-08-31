<?php

  // start session for language preference
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
    if(isset($_SESSION["lang"]))
      return $$_SESSION["lang"];
    else
      return $$default_lang;
  }

?>
