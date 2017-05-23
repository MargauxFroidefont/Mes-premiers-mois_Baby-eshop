<?php

// Config
include 'config.php';

// Routing
$q = !empty($_GET['q']) ? $_GET['q'] : '';

if($q === '')
{
	$page = 'accueil';
}
if($q === 'accueil')
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
else if($q === 'mentionslegales')
{
	$page = 'mentionslegales';
}
else if($q === 'acheteroffrir')
{
	$page = 'acheteroffrir';
}
else if($q === 'formulairebebe')
{
	$page = 'formulairebebe';
}
else if($q === 'identification')
{
	$page = 'identification';
}
else if($q === 'formulaireachat')
{
	$page = 'formulaireachat';
}
else if($q === 'validation')
{
	$page = 'validation';
}
else if($q === 'conditionsgenerales')
{
	$page = 'conditionsgenerales';
}
else
{
	$page = '404';
}

// Includes
include 'views/partials/header.php';
include 'views/pages/'.$page.'.php';
include 'views/partials/footer.php';
