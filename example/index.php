<?php

require_once("../vendor/autoload.php");

use DcrPHP\Config\Config;
use DcrPHP\Data\Elasticsearch;
use Elasticsearch\ClientBuilder;

ini_set('display_errors', 'on');

$clsConfig = new Config();
$clsConfig->set('elasticsearch', array('host' => array('127.0.0.1:9200')));
$clsElasticsearch = new Elasticsearch($clsConfig);

$clsESClient = $clsElasticsearch->getClient(); //使用elasticsearch/elasticsearch
#可以直接用elasticsearch/elasticsearch的function
#$clsESClient->index(); //对应elasticsearch/elasticsearch->index

/*$params = [
    'index' => 'test',
    'type' => '_doc',
    'id'    => '1'
];
$response = $clsESClient->get($params);*/

#用dsl语法处理数据
/*$json = <<<json
{  
  "query": {
    "match_all": {}
  }
}
json;
$params = array('index'=>'test', 'body'=>json_decode($json));
$response = $clsESClient->search($params);
print_r($response);*/