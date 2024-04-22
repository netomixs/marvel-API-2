<?php

namespace App\Api\Infrestructure\Repository;

use App\Api\Infrestructure\Interfaces\ICharacterRepository;
use App\Api\Crosscuting\Api;

class CharacterRepository implements ICharacterRepository
{

    public function getAll()
    {
        $api = new Api();
        $data = $api->get("v1/public/characters");

        $data = json_decode($data, true);

        $results = $data['data'];
        return  $results;
    }
    public function get($id)
    {
        $api = new Api();
        $data = $api->get("v1/public/characters/" . $id);
        $data = json_decode($data, true);
        $results = $data['data'];
        return  $results;
    }
    public function getComic($id)
    {
        $api = new Api();
        $data = $api->get("v1/public/characters/" . $id . "/comics");
        $data = json_decode($data, true);
        $results = $data['data'];
        return  $results;
    }
    public function getEvent($id)
    {
        $api = new Api();
        $data = $api->get("v1/public/characters/" . $id . "/events");
        $data = json_decode($data, true);
        $results = $data['data'];
        return  $results;
    }
    public function getSeries($id)
    {
        $api = new Api();
        $data = $api->get("v1/public/characters/" . $id . "/series");
        $data = json_decode($data, true);
        $results = $data['data'];
        return  $results;
    }
    public function getStories($id)
    {
        $api = new Api();
        $data = $api->get("v1/public/characters/" . $id . "/stories");
        $data = json_decode($data, true);
        $results = $data['data'];
        return  $results;
    }
}
