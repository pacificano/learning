<?php 

require '14.connection.php';
require '14.queryBuilder.php';



return new QueryBuilder( Connection::make() );