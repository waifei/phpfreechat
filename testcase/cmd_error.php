<?php

require_once "../src/phpxchat.class.php";

$params = array();
//$params["connect"]        = false;
$chat = new phpXChat( $params );
$c =& phpXChatConfig::Instance();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>phpXChat demo</title>

<?php $chat->printJavascript(); ?>
<?php $chat->printStyle(); ?>

	</head>
	<body>
<p><code>Cmd_error</code> testcase : <strong>'this is an error'</strong> error message should be displayed</p>
<?php $chat->printChat(); ?>

  <script type="text/javascript">
  <?php echo $c->prefix."handleRequest('/error ".addslashes("'this is an error'")."');"; ?>
  </script>
        
	</body>
</html>