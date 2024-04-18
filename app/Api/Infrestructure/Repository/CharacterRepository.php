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
        $data=json_decode($data, true);
        $results = $data['data'];
        return  $results;
    }
    public function get($id)
    {
    }
    public function getComic($id)
    {
    }
    public function getEvent($id)
    {
    }
    public function getSeries($id)
    {
    }
    public function getStories($id)
    {
    }
}
