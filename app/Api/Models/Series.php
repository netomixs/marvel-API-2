<?php

namespace App\Api\Models;
/**
 * @OA\Schema(
 *     schema="Series",
 *     type="object",
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *         description="The unique ID of the series resource (optional)",
 *     ),
 *     @OA\Property(
 *         property="title",
 *         type="string",
 *         description="The canonical title of the series (optional)",
 *     ),
 *     @OA\Property(
 *         property="description",
 *         type="string",
 *         description="A description of the series (optional)",
 *     ),
 *     @OA\Property(
 *         property="resourceURI",
 *         type="string",
 *         description="The canonical URL identifier for this resource (optional)",
 *     ),
 *     @OA\Property(
 *         property="urls",
 *         type="any",
 *         description="A set of public web site URLs for the resource (optional)",
 *     ),
 *     @OA\Property(
 *         property="startYear",
 *         type="integer",
 *         description="The first year of publication for the series (optional)",
 *     ),
 *     @OA\Property(
 *         property="endYear",
 *         type="integer",
 *         description="The last year of publication for the series (conventionally, 2099 for ongoing series) (optional)",
 *     ),
 *     @OA\Property(
 *         property="rating",
 *         type="string",
 *         description="The age-appropriateness rating for the series (optional)",
 *     ),
 * )
 */
class Series
{
    public int $id;
    public string $title;
    public ?string $description;
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
