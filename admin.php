<?php
include_once "../classes.php";
session_start();
    if(!isset($_SESSION['User'])){
        header("Location: ../index.php");
    };
    if(!$_SESSION['User']->isAdmin()){
         header('HTTP/1.0 403 Forbidden');
    }
    if($_GET["exit"]){ 
        session_destroy();
        header("Location: ../index.php");
    };
    if($_GET["lang"]){ 
        $_SESSION['User']->changeLang($_GET["lang"]);
    };
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
<form >
		<select name="lang" method="GET">
			<option value="ru">Russian</option>
			<option value="uk">Ukrainian</option>
			<option value="en">English</option>
			<option value="it">Italian</option>
		</select>
		<input type="submit" value="<?php echo $langArr[$_SESSION['User']->getLang()]['confirm']; ?>">
</form>
<?php
    echo $_SESSION['User']->getInfo($langArr);
?>
<form method="GET">
	<input type="submit" name="exit"  value="<?php echo $langArr[$_SESSION['User']->getLang()]['exit']; ?>">
</form> 
</body>
</html>