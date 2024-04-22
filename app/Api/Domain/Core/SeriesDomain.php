<?php

namespace App\Api\Domain\Core;

use App\Api\Domain\Interfaces\ISeriesDomain;
use App\Api\Crosscuting\Api;
use App\Api\Infrestructure\Repository\SeriesRepository;
use  App\Api\Models\Series;

class SeriesDomain implements ISeriesDomain
{
    private $repostorioSeries;
    public function __construct()
    {
        $this->repostorioSeries = new SeriesRepository();
    }
    public function getAll()
    {
        $response = $this->repostorioSeries->getAll();
        $data=$response["results"];
        //echo json_encode($data);
        $modelos = array();
        foreach ($data as $item) {
            $modelo = new Series();
            $modelo->set($item);
            $modelos[] = $modelo;
        }
        return $modelos;
    }
    public function get($id)
    {
        $response = $this->repostorioSeries->get($id);
        $data=$response["results"];
        //echo json_encode($data);
        $modelos = array();
        foreach ($data as $item) {
            $modelo = new Series();
            $modelo->set($item);
            $modelos[] = $modelo;
        }
        return $modelos;
    }
    public function getCharacters($id)
    {
        $response = $this->repostorioSeries->getCharacters($id);
        $data=$response["results"];
        //echo json_encode($data);
        $modelos = array();
        foreach ($data as $item) {
            $modelo = new Series();
            $modelo->set($item);
            $modelos[] = $modelo;
        }
        return $modelos;
    }
    public function getComics($id)
    {
        $response = $this->repostorioSeries->getComics($id);
        $data=$response["results"];
        //echo json_encode($data);
        $modelos = array();
        foreach ($data as $item) {
            $modelo = new Series();
            $modelo->set($item);
            $modelos[] = $modelo;
        }
        return $modelos;
    }
    public function getCreators($id)
    {
        $response = $this->repostorioSeries->getCreators($id);
        $data=$response["results"];
        //echo json_encode($data);
        $modelos = array();
        foreach ($data as $item) {
            $modelo = new Series();
            $modelo->set($item);
            $modelos[] = $modelo;
        }
        return $modelos;
    }
    public function getEvents($id)
    {
        $response = $this->repostorioSeries->getEvents($id);
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
        $response = $this->repostorioSeries->getStories($id);
        $data=$response["results"];
   
        $modelos = array();
        foreach ($data as $item) {
            $modelo = new Series();
            $modelo->set($item);
            $modelos[] = $modelo;
        }
        return $modelos;
    }
}

//HISTORIES SERIES Y EVENTS (DOMINIO, REPOSITORIO Y CONTROLADORES)

//127814013148671787