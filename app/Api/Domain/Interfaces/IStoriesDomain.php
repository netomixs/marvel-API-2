<?php

namespace App\Api\Domain\Interfaces;
Interface IStoriesDomain
{
    public function getAll();
    public function get($id);
    public function getCharacters($id);
    public function getComics($id);
    public function getCreators($id);
    public function getEvents($id);
    public function getSeries($id);
}