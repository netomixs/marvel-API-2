<?php

namespace App\Api\Models;

class Events
{
    public int $id;
    public string $title;
    public string $description;
    public string $resourceUri;
    public array $urls;
    public string $modified;
    public string $start;
    public string $end;
    public function set($data)
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }
}
