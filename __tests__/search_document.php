<?php
require './config.php';

use Elastic\Elasticsearch\Exception\ClientResponseException;
use Elastic\Elasticsearch\Exception\ServerResponseException;


// $params = [
//     "index" => "rezwan_index",
//     'body' => [
//         'query' => [
//             'match' => [
//                 'testField' => "abc"
//             ]
//         ]
//     ]
// ];

$params = [
    "index" => "rezwan_index",
    
];

$response = $client->search($params);
echo "<pre>";
printf("Total Docs: %d\n", $response['hits']['total']['value']);
printf("Max score: %.4f\n", $response['hits']['max_score']);
printf("Took : %d ms\n", $response["took"]);

print_r($response["hits"]["hits"]);

?>
