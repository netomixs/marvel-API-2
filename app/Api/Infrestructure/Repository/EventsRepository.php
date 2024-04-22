<?php

namespace App\Api\Infrestructure\Repository;

use App\Api\Infrestructure\Interfaces\IEventsRepository;
use App\Api\Crosscuting\Api;

class EventsRepository implements IEventsRepository
{

    public function getAll()
    {
        $api = new Api();
        $data = $api->get("v1/public/events");
        $data=json_decode($data, true);
       // echo json_encode($data);
        $results = $data['data'];
        return  $results;
    }
    public function get($id)
    {
        $api = new Api();
        $data = $api->get("v1/public/events/". $id);
        $data=json_decode($data, true);
        $results = $data['data'];
        return  $results;
    }
    public function getCharacters($id)
    {
        $api = new Api();
        $data = $api->get("v1/public/events/". $id."/characters");
        $data=json_decode($data, true);
        $results = $data['data'];
        return  $results;
    }
    public function getComics($id)
    {
        $api = new Api();
        $data = $api->get("v1/public/events/". $id. "/comics");
        $data=json_decode($data, true);
        $results = $data['data'];
        return  $results;
    }
    public function getCreators($id)
    {
        $api = new Api();
        $data = $api->get("v1/public/events/". $id."/creators");
        $data=json_decode($data, true);
        $results = $data['data'];
        return  $results;
    }
    public function getSeries($id)
    {
        $api = new Api();
        $data = $api->get("v1/public/events/". $id ."/series");
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