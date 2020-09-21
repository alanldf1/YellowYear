<?php

/**
*
* Definição das rotas e seus respectivos controllers e actions
*
* @author Code Universe
*
**/

// rotas normais
$commonRoutes = array(
	'/'				=> 'SiteController/index',
	'about'			=> 'SiteController/about',
	'contato'		=> 'SiteController/contact',
	'posts'			=> 'SiteController/posts',
);

// rotas POST
$commonPost = array(
	'submitContact' => 'ContactController/submitContact'
);

$commonRoutes = array_merge($commonRoutes, $commonPost);

return $commonRoutes;