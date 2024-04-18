<?php

namespace App\Api\Models;

class Series
{
    public int $id;
    public string $title;
    public string $description;
    public string $resourceUri;
    public array $urls;
    public int $startYear;
    public int $endYear;
    public string $rating;
    public string $type;
    public string $modified;
    public function set($data)
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }
}
