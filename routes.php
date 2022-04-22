<?php

require_once("{$_SERVER['DOCUMENT_ROOT']}/microbrasserie/router.php");

get('/microbrasserie', '/microbrasserie/site/login.php');
get('/microbrasserie/login', '/microbrasserie/site/login.php');
get('/microbrasserie/table', '/microbrasserie/site/table.php');
get('/microbrasserie/rest-api/names', '/microbrasserie/site/names.php');
get('/microbrasserie/rest-api/names/$prefix', '/microbrasserie/site/names_prefix.php');
get('/microbrasserie/rest-api/add', '/microbrasserie/site/api_add.php');
get('/microbrasserie/rest-api/permis/$prefix', '/microbrasserie/site/permis.php');
get('/microbrasserie/data', '/microbrasserie/site/database.php');
get('/microbrasserie/back', '/microbrasserie/site/backend-script.php');
get('/microbrasserie/delete', '/microbrasserie/site/delete.php');
get('/microbrasserie/add', '/microbrasserie/site/add.php');
get('/microbrasserie/doc', '/microbrasserie/site/doc.php');
get('/microbrasserie/verif', '/microbrasserie/site/verif.php');
get('/microbrasserie/welcome', '/microbrasserie/site/welcome.php');
get('/microbrasserie/plot', '/microbrasserie/site/map_view.php');
get('/microbrasserie/micro', '/microbrasserie/microbrasseries.csv');
get('/microbrasserie/addVerif', '/microbrasserie/site/addVerif.php');
get('/microbrasserie/deleteVerif', '/microbrasserie/site/deleteVerif.php');
get('/microbrasserie/menu', '/microbrasserie/site/menu.php');
get('/microbrasserie/logout', '/microbrasserie/site/logout.php');