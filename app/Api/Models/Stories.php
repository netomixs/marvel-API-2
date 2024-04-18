<?php
namespace App\Api\Models;
class Stories
{
	public int $id;
	public string $title;
	public string $description;
	public string $resourceUri;
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