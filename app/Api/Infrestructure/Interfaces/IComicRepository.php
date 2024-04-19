<?php

namespace App\Api\Infrestructure\Interfaces;

interface IComicRepository
{
    public function getAll();
    public function get($id);
    public function getCharacters($id);
    public function getEvents($id);
    public function getCreators($id);
    public function getStories($id);
}
