<?php

function bbg_pb_the_title() {
	$title = get_the_title();

	// Turn @-mentions into links
	$title = preg_replace("/[@]+([A-Za-z0-9-_]+)/", "<a href=\"http://twitter.com/\\1\" target=\"_blank\">\\0</a>", $title );

	// Turn hashtags into links
	$title = preg_replace("/ [#]+([A-Za-z0-9-_]+)/", " <a href=\"http://twitter.com/search?q=%23\\1\" target=\"_blank\">\\0</a>", $title );

	echo $title;
}

?>
