<?php

namespace App\Api\Infrestructure\Interfaces;

interface ICharacterRepository
{
    public function getAll();
    public function get($id);
    public function getComic($id);
    public function getEvent($id);
    public function getSeries($id);
    public function getStories($id);
}
