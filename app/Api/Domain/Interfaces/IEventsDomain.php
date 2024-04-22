<?php

namespace App\Api\Domain\Interfaces;
Interface IEventsDomain
{
    public function getAll();
    public function get($id);
    public function getCharacters($id);
    public function getComics($id);
    public function getCreators($id);
    public function getSeries($id);
    public function getStories($id);
}