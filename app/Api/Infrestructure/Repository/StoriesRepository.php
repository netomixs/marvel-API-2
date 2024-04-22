<?php

namespace App\Api\Infrestructure\Repository;
use App\Api\Infrestructure\Interfaces\IStoriesRpository;
use App\Api\Crosscuting\Api;

class StoriesRepository implements IStoriesRpository
{

    public function getAll()
    {
        $api = new Api();
        $data = $api->get("v1/public/stories");
        $data=json_decode($data, true);
        $results = $data['data'];
        return  $results;
    }
    public function get($id)
    {
        $api = new Api();
        $data = $api->get("v1/public/stories/". $id);
        $data=json_decode($data, true);
        $results = $data['data'];
        return  $results;
    }
    public function getCharacters($id)
    {
        $api = new Api();
        $data = $api->get("v1/public/stories/". $id . "/chracters");
        $data=json_decode($data, true);
        $results = $data['data'];
        return  $results;
    }
    public function getComics($id)
    {
        $api = new Api();
        $data = $api->get("v1/public/stories/".$id."/comics");
        $data=json_decode($data, true);
        $results = $data['data'];
        return  $results;
    }
    public function getCreators($id)
    {
        $api = new Api();
        $data = $api->get("v1/public/stories/".$id."/creators");
        $data=json_decode($data, true);

        $results = $data['data'];
        return  $results;
    }
    public function getEvents($id)
    {
        $api = new Api();
        $data = $api->get("v1/public/stories/".$id."/events");
        $data=json_decode($data, true);
 
        $results = $data['data'];
        return  $results;
    }
    public function getSeries($id)
    {
        $api = new Api();
        $data = $api->get("v1/public/stories/".$id."/series");
        $data=json_decode($data, true);
        $results = $data['data'];
        return  $results;
    }
}