<?php
require 'vendor/autoload.php';

use Elastic\Elasticsearch\ClientBuilder;
use Elastic\Elasticsearch\Exception\ClientResponseException;
use Elastic\Elasticsearch\Exception\ServerResponseException;

class ElasticsearchCrud {
    private $client;

    function __construct($address)
    {
        $this->client = ClientBuilder::create()
         ->setHosts($address)
         ->build();
    }
    public function searchDocument($params){
        $response = $this->client->search($params);
        return $response->asArray();
    }

    public function insertDocument($params){
        try {
            $response = $this->client->index($params);
            return $response->asArray();
        } catch (ClientResponseException $e) {
            return $e;
        } catch (ServerResponseException $e) {
            return $e;
        } catch (Exception $e) {
            return $e;
        } 
    }

    public function deleteDocument($params){
        try {
            $response = $this->client->delete($params);
            return $response->asArray();
        } catch (ClientResponseException $e) {
            return $e->getCode();
        }
    }

    public function updateDocument($params){
        try {
            $response = $this->client->update($params);
            return $response->asArray();
        } catch (ClientResponseException $e) {
            return $e;
        } catch (ServerResponseException $e) {
            return $e;
        } catch (Exception $e) {
            return $e;
        } 
    }
}

?>