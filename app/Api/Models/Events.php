<?php

namespace App\Api\Models;


/**
 * @OA\Schema(
 *     schema="Events",
 *     type="object",
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *         description="The unique identifier of the event resource (optional)",
 *     ),
 * 
 *     @OA\Property(
 *         property="title",
 *         type="string",
 *         description="The title of the event",
 *     ),
 *     @OA\Property(
 *         property="description",
 *         type="string",
 *         description="A description of the event",
 *     ),
 *     @OA\Property(
 *         property="resourceURI",
 *         type="string",
 *         description="The canonical URL identifier for this resource",
 *     ),
 *     @OA\Property(
 *         property="urls",
 *         type="any",
 *         description="A set of public web site URLs for the event",
 *     ),
 *     @OA\Property(
 *         property="modified",
 *         type="string",
 *         format="date",
 *         description="The date the resource was most recently modified",
 *     ),
 *     @OA\Property(
 *         property="start",
 *         type="string",
 *         format="date",
 *         description="The date of publication of the first issue in this event",
 *     ),
 *     @OA\Property(
 *         property="end",
 *         type="string",
 *         format="date",
 *         description="The date of publication of the last issue in this event",
 *     ),
 * )
 
 */

class Events
{
    public int $id;
    public string $title;
    public ?string $description;
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
