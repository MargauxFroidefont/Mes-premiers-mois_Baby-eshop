<?php

// Config
include 'config.php';

// Routing
$q = !empty($_GET['q']) ? $_GET['q'] : '';

if($q === '')
{
	$page = 'accueil';
}
else if($q === 'contact')
{
	$page = 'contact';
}
else if($q === 'blog')
{
	$page = 'blog';
}
else if($q === 'nosbox')
{
	$page = 'nosbox';
}
else if($q === 'espaceclient')
{
	$page = 'espaceclient';
}
else if($q === 'boutique')
{
	$page = 'boutique';
}
else if($q === 'tunnelachat1')
{
	$page = 'tunnelachat1';
}
else if($q === 'mentionslegales')
{
	$page = 'mentionslegales';
}
else if($q === 'acheteroffrir')
{
	$page = 'acheteroffrir';
}
else if($q === 'cgv')
{
	$page = 'cgv';
}
else
{
	$page = '404';
}

// Includes
include 'views/partials/header.php';
include 'views/pages/'.$page.'.php';
include 'views/partials/footer.php';
