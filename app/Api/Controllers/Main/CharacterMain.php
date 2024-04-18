<?php

namespace App\Api\Controllers\Main;

use App\Api\Controllers\Interfaces\ICharacterMain;
use Exception;
use App\Api\Crosscuting\Respuesta;
use App\Api\Crosscuting\HttpCode;
use App\Api\Domain\Core\CharacterDomain;

class CharacterMain implements ICharacterMain
{
    private $domainChareacter;
    public function __construct()
    {
        $this->domainChareacter = new CharacterDomain();
    }
    public function getAll()
    {
        $response = new Respuesta();
        ;
        try {
            $data=$this->domainChareacter->getAll();
           
            if(  $data){
                $response->respuesta(200, true, HttpCode::getMessageForCode(200), $data);
            }else{
                $response->respuesta(204, true, HttpCode::getMessageForCode(204), $data);
            }
        } catch (Exception $e) {
            $response->respuesta(500, false, "Error en el servidor", null);
        } 
        return $response->toJson();
    }
    public function get($id)
    {
    }
    public function getComic($id)
    {
    }
    public function getEvent($id)
    {
    }
    public function getSeries($id)
    {
    }
    public function getStories($id)
    {
    }
}
