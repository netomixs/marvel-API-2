<?php
namespace App\Api\Models;
class Thumbnail
{
	public string $path;
	public string $extension;

	public function __construct(string $path, string $extension)
	{
		$this->path = $path;
		$this->extension = $extension;
	}
}