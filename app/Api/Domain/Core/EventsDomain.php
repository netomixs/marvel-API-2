<?php

namespace App\Api\Domain\Core;

use App\Api\Domain\Interfaces\IEventsDomain;
use App\Api\Infrestructure\Repository\EventsRepository;
use  App\Api\Models\Events;

class EventsDomain implements IEventsDomain
{
    private $repostorioEvent;
    public function __construct()
    {
        $this->repostorioEvent = new EventsRepository();
    }
    public function getAll()
    {
        $response = $this->repostorioEvent->getAll();
        $data=$response["results"];
        $modelos = array();
        foreach ($data as $item) {
            $modelo = new Events();
            $modelo->set($item);
            $modelos[] = $modelo;
        }
        return $modelos;
    }
    public function get($id)
    {
        $response = $this->repostorioEvent->get($id);
        $data=$response["results"];
        //echo json_encode($data);
        $modelos = array();
        foreach ($data as $item) {
            $modelo = new Events();
            $modelo->set($item);
            $modelos[] = $modelo;
        }
        return $modelos;
    }
    public function getCharacters($id)
    {
        $response = $this->repostorioEvent->getCharacters($id);
        $data=$response["results"];
        //echo json_encode($data);
        $modelos = array();
        foreach ($data as $item) {
            $modelo = new Events();
            $modelo->set($item);
            $modelos[] = $modelo;
        }
        return $modelos;
    }
    public function getComics($id)
    {
        $response = $this->repostorioEvent->getComics($id);
        $data=$response["results"];
        //echo json_encode($data);
        $modelos = array();
        foreach ($data as $item) {
            $modelo = new Events();
            $modelo->set($item);
            $modelos[] = $modelo;
        }
        return $modelos;
    }
    public function getCreators($id)
    {
        $response = $this->repostorioEvent->getCreators($id);
        $data=$response["results"];
        //echo json_encode($data);
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
        $response = $this->repostorioEvent->getSeries($id);
        $data=$response["results"];
        //echo json_encode($data);
        $modelos = array();
        foreach ($data as $item) {
            $modelo = new Events();
            $modelo->set($item);
            $modelos[] = $modelo;
        }
        return $modelos;
    }
    public function getStories($id)
    {
        $response = $this->repostorioEvent->getStories($id);
        $data=$response["results"];
        //echo json_encode($data);
        $modelos = array();
        foreach ($data as $item) {
            $modelo = new Events();
            $modelo->set($item);
            $modelos[] = $modelo;
        }
        return $modelos;
    }
}
 