<?php
require './config.php';

use Elastic\Elasticsearch\Exception\ClientResponseException;
use Elastic\Elasticsearch\Exception\ServerResponseException;


$params = [
    "index" => "rezwan_index",
    'body' => ['testField' => "this is just a test field"]
];

try {
    $response = $client->index($params);
} catch (ClientResponseException $e) {
    //throw $th;
} catch (ServerResponseException $e) {
    //throw $th;
} catch (Exception $e) {
    //throw $th;
} 

print_r($response->asArray());

?>
