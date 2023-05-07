<?php
declare(strict_types=1);

namespace App\Service;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class Formula1Service {
    private $data;
    public function __construct(HttpClientInterface $data)
    {
        $this->data = $data ;
    }
    public function formula1Data () {
        $response = $this->data->request(Request::METHOD_GET,'https://ergast.com/api/f1/2023.json');
        
        $responseData = $response->toArray();
        return $responseData;
    }

}