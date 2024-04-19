<?php

namespace App\Api\Models;

/**
 * @OA\Schema(
 *        schema="Creators",
 *     type="object",
 *   description="Creadores de comic",
 *   @OA\Property(property="id", type="integer", format="int32", description="The unique ID of the creator resource (optional)"),
 *   @OA\Property(property="firstName", type="string", description="The first name of the creator (optional)"),
 *   @OA\Property(property="middleName", type="string", description="The middle name of the creator (optional)"),
 *   @OA\Property(property="lastName", type="string", description="The last name of the creator (optional)"),
 *   @OA\Property(property="suffix", type="string", description="The suffix or honorific for the creator (optional)"),
 *   @OA\Property(property="fullName", type="string", description="The full name of the creator (a space-separated concatenation of the above four fields) (optional)"),
 *   @OA\Property(property="modified", type="string", format="date-time", description="The date the resource was most recently modified (optional)"),
 *   @OA\Property(property="resourceUri", type="string", format="uri", description="The canonical URL identifier for this resource (optional)"),
 * )
 */
class Creators
{
    public int $id;
    public string $firstName;
    public string $middleName;
    public string $lastName;
    public string $suffix;
    public string $fullName;
    public string $modified;
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
