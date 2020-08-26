<?php
declare(strict_types=1);

namespace DcrPHP\Data;

use DcrPHP\Config\Config;
use Elasticsearch\ClientBuilder;

class Elasticsearch
{

    private $clsConfig;

    public function __construct(Config $clsConfig)
    {
        $this->clsConfig = $clsConfig;
    }

    public function getClient()
    {
        return ClientBuilder::create()->setHosts($this->clsConfig->get('elasticsearch.host'))->build();
    }
}