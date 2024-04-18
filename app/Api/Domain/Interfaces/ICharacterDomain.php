<?php

namespace App\Api\Domain\Interfaces;
interface ICharacterDomain
{
    public function getAll();
    public function get($id);
    public function getComic($id);
    public function getEvent($id);
    public function getSeries($id);
    public function getStories($id);
}
