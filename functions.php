<?php

function bbg_pb_the_title() {
	$title = get_the_title();

	$title = bbg_pb_twitterize( $title );

	echo $title;
}

function bbg_pb_twitterize( $content ) {
	// Turn @-mentions into links
	$content = preg_replace("/[@]+([A-Za-z0-9-_]+)/", "<a href=\"http://twitter.com/\\1\" target=\"_blank\">\\0</a>", $content );

	// Turn hashtags into links
	$content = preg_replace("/ [#]+([A-Za-z0-9-_]+)/", " <a href=\"http://twitter.com/search?q=%23\\1\" target=\"_blank\">\\0</a>", $content );
	
	return $content;
}
add_filter( 'the_content', 'bbg_pb_twitterize' );

?>
