<?php

namespace App\Api\Domain\Core;

use App\Api\Domain\Interfaces\IStoriesDomain;
use App\Api\Crosscuting\Api;
use App\Api\Infrestructure\Repository\StoriesRepository;
use App\Api\Models\Stories;

class StoriesDomain implements IStoriesDomain
{
    private $repostorioStories;
    public function __construct()
    {
        $this->repostorioStories = new StoriesRepository();
    }

    public function getAll()
    {
        $response = $this->repostorioStories->getAll();
        $data=$response["results"];
        //echo json_encode($data);
        $modelos = array();
        foreach ($data as $item) {
            $modelo = new Stories();
            $modelo->set($item);
            $modelos[] = $modelo;
        }
        return $modelos;
    }
    public function get($id)
    {
        $response = $this->repostorioStories->get($id);
        $data=$response["results"];
        //echo json_encode($data);
        $modelos = array();
        foreach ($data as $item) {
            $modelo = new Stories();
            $modelo->set($item);
            $modelos[] = $modelo;
        }
        return $modelos;
    }
    public function getCharacters($id)
    {
        $response = $this->repostorioStories->getCharacters($id);
        $data=$response["results"];
        //echo json_encode($data);
        $modelos = array();
        foreach ($data as $item) {
            $modelo = new Stories();
            $modelo->set($item);
            $modelos[] = $modelo;
        }
        return $modelos;
    }
    public function getComics($id)
    {
        $response = $this->repostorioStories->getComics($id);
        $data=$response["results"];
        //echo json_encode($data);
        $modelos = array();
        foreach ($data as $item) {
            $modelo = new Stories();
            $modelo->set($item);
            $modelos[] = $modelo;
        }
        return $modelos;
    }
    public function getCreators($id)
    {
        $response = $this->repostorioStories->getCreators($id);
        $data=$response["results"];
        //echo json_encode($data);
        $modelos = array();
        foreach ($data as $item) {
            $modelo = new Stories();
            $modelo->set($item);
            $modelos[] = $modelo;
        }
        return $modelos;
    }
    public function getEvents($id)
    {
        $response = $this->repostorioStories->getEvents($id);
        $data=$response["results"];
        //echo json_encode($data);
        $modelos = array();
        foreach ($data as $item) {
            $modelo = new Stories();
            $modelo->set($item);
            $modelos[] = $modelo;
        }
        return $modelos;
    }
    public function getSeries($id)
    {
        $response = $this->repostorioStories->getSeries($id);
        $data=$response["results"];
        //echo json_encode($data);
        $modelos = array();
        foreach ($data as $item) {
            $modelo = new Stories();
            $modelo->set($item);
            $modelos[] = $modelo;
        }
        return $modelos;
    }
}