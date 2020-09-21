<?php

/**
*
* Arquivo onde são definidos os helpers
*
* @author Code Universe
*
**/

define('LOCAL_URL', '/Alan_Sou/aulas-sala/project-one');

// if($env == "dev"){
// 	define('LOCAL_URL', '/Alan_Sou/aulas-sala/project-one');
// }
// elseif($env == "prod"){
// 	define('LOCAL_URL', 'https://www.google.com.br/');
// }

return array(
	'URLHelper' 	=> new URLHelper(),
);