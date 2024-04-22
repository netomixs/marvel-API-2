<?php

namespace App\Api\Infrestructure\Interfaces;

interface IEventsRepository
{
    public function getAll();
    public function get($id);
    public function getCharacters($id);
    public function getComics($id);
    public function getCreators($id);
    public function getSeries($id);
    public function getStories($id);
}