<?php

namespace App\Api\Models;

class Characters
{
    public int $id;
    public string $name;
    public string $description;
    public string $modified;
    //public Thumbnail $thumbnail;
    public string $resourceUri;
   // public Comics $comics;
   // public Series $series;
   // public Stories $stories;
   // public Events $events;
    /** @var Urls[] */
    public array $urls;

    /**
     * @param Urls[] $urls
     */ 
    public function set($data)
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }
}
