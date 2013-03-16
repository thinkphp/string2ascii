<?php

    require_once('string2ascii.class.php');
 
    $string = $_POST['string'];

    $out = htmlentities(Configuration::getInstance()->string2ascii($string));
     
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>string2ascii</title>
<script type="text/javascript"></script>
</head>
<body>
<h1>string</h1>
<form method="POST" action="index.php">
<textarea rows=10 cols=100 name="string"><?php if($_POST['string']) echo $string; ?></textarea>
<br/><input type="submit" value="string2ascii" />
</form>
<h2>2</h2>
<?php if($_POST['string']) {

?>

<textarea rows=10 cols=100><?php echo $out; ?></textarea>
<?php

} 

?>
<h2>ASCII</h2>

</body>
</html>
