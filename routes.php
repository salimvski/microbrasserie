<?php

require_once("{$_SERVER['DOCUMENT_ROOT']}/microbrasserie/router.php");

get('/microbrasserie', '/microbrasserie/site/index.php');
get('/microbrasserie/table', '/microbrasserie/site/table.php');
get('/microbrasserie/plot', '/microbrasserie/site/plot.php');
get('/microbrasserie/delete', '/microbrasserie/site/delete.php');
get('/microbrasserie/add', '/microbrasserie/site/add.php');
get('/microbrasserie/doc', '/microbrasserie/site/doc.php');
get('/microbrasserie/login', '/microbrasserie/site/login.php');