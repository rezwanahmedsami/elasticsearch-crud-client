<?php

require './config.php';

use Elastic\Elasticsearch\Exception\ClientResponseException;

try {
    $response = $client->delete([
        'index' => "rezwan_index",
        "id" => 'yYogfYIBmzYLoKAQdlCx'
    ]);
} catch (ClientResponseException $e) {
    if ($e->getCode() === 404) {
        echo "Document not found";
    }
}

?>