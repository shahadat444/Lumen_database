<?php
$router->get('/','ExampleController@TestConnect');


$router->get('/select','DetailsController@select_table');
$router->post('/insert','DetailsController@create_table');
$router->delete('/delete','DetailsController@delete_table');
$router->put('/update','DetailsController@update_table');