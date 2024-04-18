<?php

namespace App\Api\Models;
/**
 * @OA\Schema(
 *     schema="Character",
 *     type="object",
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *         description="ID del personaje"
 *     ),
 *     @OA\Property(
 *         property="name",
 *         type="string",
 *         description="Nombre del personaje"
 *     ),
 *     @OA\Property(
 *         property="description",
 *         type="string",
 *         description="Descripcion del personaje"
 *     ),
 *     @OA\Property(
 *         property="modified",
 *         type="string",
 *         description="Ultima modificacion del personaje"
 *     ),
 *     @OA\Property(
 *         property="resourceUri",
 *         type="string",
 *         description="Recursos del personaje"
 *     ),
 * )
 */
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

    public array $urls;


    public function set($data)
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }
}
