<?php

namespace App\Api\Controllers\Interfaces;
interface IComicMain
{
    public function getAll();
    public function get($id);
    public function getCharacters($id);
    public function getEvents($id);
    public function getCreators($id);
    public function getStories($id);
}
