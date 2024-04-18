<?php

namespace App\Api\Domain\Core;

use App\Api\Domain\Interfaces\ICharacterDomain;
use App\Api\Crosscuting\Api;
use App\Api\Infrestructure\Repository\CharacterRepository;
use  App\Api\Models\Characters;

class CharacterDomain implements ICharacterDomain
{
    private $repostorioChareacter;
    public function __construct()
    {
        $this->repostorioChareacter = new CharacterRepository();
    }
    public function getAll()
    {
        $response = $this->repostorioChareacter->getAll();
        $data=$response["results"];
        //echo json_encode($data);
        $modelos = array();
        foreach ($data as $item) {
            $modelo = new Characters();
            $modelo->set($item);
            $modelos[] = $modelo;
        }
        return $modelos;
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
