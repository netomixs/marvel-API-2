<?php

namespace App\Api\Infrestructure\Repository;

use App\Api\Infrestructure\Interfaces\ISeriesRepository;
use App\Api\Crosscuting\Api;

class SeriesRepository implements ISeriesRepository
{

    public function getAll()
    {
        $api = new Api();
        $data = $api->get("v1/public/series");
        $data=json_decode($data, true);
        $results = $data['data'];
        return  $results;
    }
    public function get($id)
    {
        $api = new Api();
        $data = $api->get("v1/public/series/". $id);
        $data=json_decode($data, true);
        $results = $data['data'];
        return  $results;
    }
    public function getCharacters($id)
    {
        $api = new Api();
        $data = $api->get("v1/public/series/". $id."/characters");
        $data=json_decode($data, true);
        $results = $data['data'];
        return  $results;
    }
    public function getComics($id)
    {
        $api = new Api();
        $data = $api->get("v1/public/series/". $id. "/comics");
        $data=json_decode($data, true);
        $results = $data['data'];
        return  $results;
    }
    public function getCreators($id)
    {
        $api = new Api();
        $data = $api->get("v1/public/series/". $id."/creators");
        $data=json_decode($data, true);
        $results = $data['data'];
        return  $results;
    }
    public function getEvents($id)
    {
        $api = new Api();
        $data = $api->get("v1/public/series/". $id ."/events");
        $data=json_decode($data, true);
 
        $results = $data['data'];
        return  $results;
    }
    public function getStories($id)
    {
        $api = new Api();
        $data = $api->get("v1/public/events/". $id ."/stories");
        $data=json_decode($data, true);
        $results = $data['data'];
        return  $results;
    }
}