<?php


$post = array(
	'name' 	   	=> 'Sam',
	'title'		=> 'Mr. Awesome',
	'body'   	=> 'Here is some cool shit',
	'publish_date' 	=> '6-10-2012',
	'category'     	=> 'Personal'
);

// $email = "<h1>{$post['title']}</h1>";
// $email .= "<p>By: {$post['author']}</p>";
// $email .= "<div>{$post['body']}";

//$email = sprintf("<h1>%s</h1><p>%s</p><div>%s</div>", $post['title'], $post['author'], $post['body']);

extract($post);


$email = <<<EOT
<h1>$title</h1>
<p>By: Hi! $name this shit works.</p>

<div>$body</div>
<h5>published $publish_date</h5>
EOT;

echo $email;
