<?php

namespace App\Api\Controllers\Interfaces;
interface IEventsMain
{
    public function getAll();
    public function get($id);
    public function getCharacters($id);
    public function getComics($id);
    public function getCreators($id);
    public function getSeries($id);
    public function getStories($id);
}