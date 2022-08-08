<?php
ini_set ('display_errors', 1);
ini_set ('display_startup_errors', 1);
error_reporting (E_ALL);
require './Elasticsearch-crud.class.php';
echo "<pre>";
$ElasticsearchCrud = new ElasticsearchCrud(["localhost:9200"]);

// search document
$searchparams = [
    "index" => "rezwan_index",
    
];
$searchDoc = $ElasticsearchCrud->searchDocument($searchparams);
print_r($searchDoc);
// search document

// insert document
// $insertParams = [
//     "index" => "rezwan_index",
//     'body' => ['testField' => "class based insertaion success"]
// ];
// $insertDoc = $ElasticsearchCrud->insertDocument($insertParams);
// print_r($insertDoc);
// insert document

// delete document
// $deleteParams = [
//     'index' => "rezwan_index",
//     "id" => 'yoogfYIBmzYLoKAQeFAd'
// ];
// $deleteDoc = $ElasticsearchCrud->deleteDocument($deleteParams);
// print_r($deleteDoc);
// delete document

?>
