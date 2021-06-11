<?php
session_start();
if (!isset($_SESSION['lang']))
{
    $_SESSION['lang'] = "et";
}
else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang']))
{
    if ($_GET['lang'] == "en")
    {
        $_SESSION['lang'] = "en";
    }
    else if ($_GET['lang'] == "ru")
    {
        $_SESSION['lang'] = "ru";
    }
    else if ($_GET['lang'] == "et")
    {
    	$_SESSION['lang'] = "et";
    }
}
echo 'Choosen Language: ' . $_SESSION['lang'];
require "lang/" . $_SESSION['lang'] . ".php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $language['title'];?></title>
</head>
<body>
<a href="index.php?lang=en"><?php echo $language['language_en'];?></a>
<a href="index.php?lang=ru"><?php echo $language['language_ru'];?></a>
<a href="index.php?lang=et"><?php echo $language['language_et'];?></a>
</body>
</html>