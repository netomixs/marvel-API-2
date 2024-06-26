<?php

namespace App\Api\Domain\Core;

use App\Api\Domain\Interfaces\ICharacterDomain;
use App\Api\Crosscuting\Api;
use App\Api\Infrestructure\Repository\CharacterRepository;
use  App\Api\Models\Characters;
use App\Api\Models\Comics;
use App\Api\Models\Events;
use App\Api\Models\Series;
use App\Api\Models\Stories;

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
        $response = $this->repostorioChareacter->get($id);
        $data=$response["results"];
 
        foreach ($data as $item) {
            $modelo = new Characters();
            $modelo->set($item);
            $modelos[] = $modelo;
        }
        return $modelos;
    }
    public function getComic($id)
    {
        $response = $this->repostorioChareacter->getComic($id);
        $data=$response["results"];
        $modelos = array();
        foreach ($data as $item) {
            $modelo = new Comics();
            $modelo->set($item);
            $modelos[] = $modelo;
        }
        return $modelos;
    }
    public function getEvent($id)
    {
        $response = $this->repostorioChareacter->getEvent($id);
        $data=$response["results"];
        $modelos = array();
        foreach ($data as $item) {
            $modelo = new Events();
            $modelo->set($item);
            $modelos[] = $modelo;
        }
        return $modelos;
    }
    public function getSeries($id)
    {
        $response = $this->repostorioChareacter->getSeries($id);
        $data=$response["results"];
        $modelos = array();
        foreach ($data as $item) {
            $modelo = new Series();
            $modelo->set($item);
            $modelos[] = $modelo;
        }
        return $modelos;
    }
    public function getStories($id)
    {
        $response = $this->repostorioChareacter->getStories($id);
        $data=$response["results"];
        $modelos = array();
        foreach ($data as $item) {
            $modelo = new Stories();
            $modelo->set($item);
            $modelos[] = $modelo;
        }
        return $modelos;
    }
}
