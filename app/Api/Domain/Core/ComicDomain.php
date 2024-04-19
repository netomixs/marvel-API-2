<?php

namespace App\Api\Domain\Core;
use App\Api\Domain\Interfaces\IComicDomain;
use App\Api\Infrestructure\Repository\ComicRepository;
use  App\Api\Models\Characters;
use App\Api\Models\Comics;
use App\Api\Models\Creators;
use App\Api\Models\Events;
use App\Api\Models\Series;
use App\Api\Models\Stories;

class ComicDomain implements IComicDomain
{
    private $repostorioChareacter;
    public function __construct()
    {
        $this->repostorioChareacter = new ComicRepository();
    }
    public function getAll()
    {
        $response = $this->repostorioChareacter->getAll();
        $data = $response["results"];
        //echo json_encode($data);
        $modelos = array();
        foreach ($data as $item) {
            $modelo = new Comics();
            $modelo->set($item);
            $modelos[] = $modelo;
        }
        return $modelos;
    }
    public function get($id)
    {
        $response = $this->repostorioChareacter->get($id);
        $data = $response["results"];

        foreach ($data as $item) {
            $modelo = new Comics();
            $modelo->set($item);
            $modelos[] = $modelo;
        }
        return $modelos;
    }
    public function getCharacters($id)
    {
        $response = $this->repostorioChareacter->getCharacters($id);
        $data = $response["results"];
        $modelos = array();
        foreach ($data as $item) {
            $modelo = new Characters();
            $modelo->set($item);
            $modelos[] = $modelo;
        }
        return $modelos;
    }
    public function getEvents($id)
    {
        $response = $this->repostorioChareacter->getEvents($id);
        $data = $response["results"];
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
        $response = $this->repostorioChareacter->getCreators($id);
        $data = $response["results"];
        $modelos = array();
        foreach ($data as $item) {
            $modelo = new Creators();
            $modelo->set($item);
            $modelos[] = $modelo;
        }
        return $modelos;
    }
    public function getStories($id)
    {
        $response = $this->repostorioChareacter->getStories($id);
        $data = $response["results"];
        $modelos = array();
        foreach ($data as $item) {
            $modelo = new Stories();
            $modelo->set($item);
            $modelos[] = $modelo;
        }
        return $modelos;
    }
}
