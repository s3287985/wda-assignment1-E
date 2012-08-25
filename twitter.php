<?php
define('CONSUMER_KEY', 'ipJFCT3eK2QdIT2S2lKS4A');
define('CONSUMER_SECRET', 'pPcGYvFkytTnvAPk3HFHgQqwWS5ibBQwDXUVQDYRA0');
require_once('twitter/twitteroauth.php');
require_once('twitter/OAuth.php');
function shareWineList($wineList)
{
	$tweet = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, '761641909-1xU5eNkGj4seE25ewEb8gtQoAqAnYocSkBWA3YMb', 'gJ2tf3Wn3W4jVDwdLlz01iESPP3C0s0Ykf2oLSGw');
	$message = "Search result: ";
	if(count($wineList)>0)
		foreach($wineList as $wine)
		{
			$message = $message.', '.$wine;
		}
	else
	{
		$message = $message." none";
	}
	$message = (strlen($message) > 130) ? substr($message,0,130).'...' : $message;

	$tweet->post('statuses/update', array('status'=>"$message"));
	echo "<script language='javascript'>
alert('Your search result has been shared on Twitter: $message')
</script>";
}
?>