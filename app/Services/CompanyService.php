<?php

namespace App\Services;

//use Carlosfgti\MicroservicesCommon\Services\Traits\ConsumeExternalService;

use App\Services\Traits\ConsumeExternalService;

class CompanyService
{
    use ConsumeExternalService;

    protected $token;
    protected $url;

    public function __construct()
    {
        $this->token = config('services.micro_01.token');
        $this->url = config('services.micro_01.url');
    }

    public function getCompany(string $company)
    {
        $teste =  $this->request('get', "/companies/{$company}");

        dd($teste->body());

        return $teste;
    }
}
