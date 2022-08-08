<?php
require 'vendor/autoload.php';

use Elastic\Elasticsearch\ClientBuilder;

$client = ClientBuilder::create()
         ->setHosts(["localhost:9200"])
         ->build();


?>
