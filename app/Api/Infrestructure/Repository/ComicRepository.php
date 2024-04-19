<?php

namespace App\Api\Infrestructure\Repository;

use App\Api\Infrestructure\Interfaces\IComicRepository;
use App\Api\Crosscuting\Api;

class ComicRepository implements IComicRepository
{

    public function getAll()
    {
        $api = new Api();
        $data = $api->get("v1/public/comics");
        $data = json_decode($data, true);
        $results = $data['data'];
        return  $results;
    }
    public function get($id)
    {
        $api = new Api();
        $data = $api->get("v1/public/comics/" . $id);
        $data = json_decode($data, true);
        $results = $data['data'];
        return  $results;
    }
    public function getCharacters($id)
    {
        $api = new Api();
        $data = $api->get("v1/public/comics/" . $id . "/characters");
        $data = json_decode($data, true);
        $results = $data['data'];
        return  $results;
    }
    public function getEvents($id)
    {
        $api = new Api();
        $data = $api->get("v1/public/comics/" . $id . "/events");
        $data = json_decode($data, true);
        $results = $data['data'];
        return  $results;
    }
    public function getCreators($id)
    {
        $api = new Api();
        $data = $api->get("v1/public/comics/" . $id . "/creators");
        $data = json_decode($data, true);
        $results = $data['data'];
        return  $results;
    }
    public function getStories($id)
    {
        $api = new Api();
        $data = $api->get("v1/public/comics/" . $id . "/stories");
        $data = json_decode($data, true);
        $results = $data['data'];
        return  $results;
    }
}
