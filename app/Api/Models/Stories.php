<?php

namespace App\Api\Models;

/**
 *@OA\Schema(
 *     schema="Stories",
 *     type="object",
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *         description="The unique ID of the story resource (optional)",
 *     ),
 *     @OA\Property(
 *         property="title",
 *         type="string",
 *         description="The story title (optional)",
 *     ),
 *     @OA\Property(
 *         property="description",
 *         type="string",
 *         description="A short description of the story (optional)",
 *     ),
 *     @OA\Property(
 *         property="resourceURI",
 *         type="string",
 *         description="The canonical URL identifier for this resource (optional)",
 *     ),
 *     @OA\Property(
 *         property="type",
 *         type="string",
 *         description="The story type e.g. interior story, cover, text story (optional)",
 *     ),
 *     @OA\Property(
 *         property="modified",
 *         type="string",
 *         format="date",
 *         description="The date the resource was most recently modified (optional)",
 *     ),
 * )
 */
class Stories
{
    public int $id;
    public string $title;
    public ?string $description;
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
