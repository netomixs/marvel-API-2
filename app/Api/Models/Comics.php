<?php
namespace App\Api\Models;
class Comics
{
	public int $id;
	public int $digitalId;
	public string $title;
	public int $issueNumber;
	public string $variantDescription;
	public string $description;
	public string $modified;
	public string $isbn;
	public string $upc;
	public string $diamondCode;
	public string $ean;
	public string $issn;
	public string $format;
	public int $pageCount;
	public array $textObjects;
	public string $resourceUri;
 
    public function set($data)
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }
}