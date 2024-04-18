<?php

namespace App\Api\Controllers\Interfaces;
interface ICharacterMain
{
    public function getAll();
    public function get($id);
    public function getComic($id);
    public function getEvent($id);
    public function getSeries($id);
    public function getStories($id);
}
