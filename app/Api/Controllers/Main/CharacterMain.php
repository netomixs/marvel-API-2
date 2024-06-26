<?php

namespace App\Api\Controllers\Main;

use App\Api\Controllers\Interfaces\ICharacterMain;
use Exception;
use App\Api\Crosscuting\Respuesta;
use App\Api\Crosscuting\HttpCode;
use App\Api\Domain\Core\CharacterDomain;

class CharacterMain implements ICharacterMain
{
    private $domainChareacter;
    public function __construct()
    {
        $this->domainChareacter = new CharacterDomain();
    }
    /**
     * @OA\Get(
     *     path="/api/character",
     *     tags={"Character"},
     *     summary="Obtener todos los personajes",
     *     description="Devuelve una lista de personajes",
     *     @OA\Response(
     *         response=200,
     *         description="Operación exitosa",
     *         @OA\JsonContent(ref="#/components/schemas/Character")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="Sin contenido, no hay personajes disponibles",
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Error interno del servidor",
     *     )
     * )
     */
    public function getAll()
    {
        $response = new Respuesta();;
        try {
            $data = $this->domainChareacter->getAll();

            if ($data) {
                $response->respuesta(200, true, HttpCode::getMessageForCode(200), $data);
            } else {
                $response->respuesta(204, true, HttpCode::getMessageForCode(204), $data);
            }
        } catch (Exception $e) {
            $response->respuesta(500, false, "Error en el servidor", null);
        }
        return $response->toJson();
    }
    /**
     * @OA\Get(
     *     path="/api/character/{id}",
     *     tags={"Character"},
     *     summary="Obtener todos los personajes",
     *     description="Devuelve una lista de personajes",
     *  @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID del personaje",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Operación exitosa",
     *         @OA\JsonContent(ref="#/components/schemas/Character")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Personaje  no encontrado",
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Error interno del servidor",
     *     )
     * )
     */
    public function get($id)
    {
        $response = new Respuesta();
        try {
            $data = $this->domainChareacter->get($id);
      
            if ($data) {
                $response->respuesta(200, true, HttpCode::getMessageForCode(200), $data);
            } else {
                $response->respuesta(404, true, HttpCode::getMessageForCode(404), $data);
            }
        } catch (Exception $e) {
            $response->respuesta(500, false, "Error en el servidor", null);
        }
        return $response->toJson();
    }
    /**
     * @OA\Get(
     *     path="/api/character/{id}/comics",
     *     tags={"Character"},
     *     summary="Obtener comics del personaje especificado en el Id",
     *     description="Lista de comics en el que aparece el personaje",
     * @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID del personaje",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Operación exitosa",
     *         @OA\JsonContent(ref="#/components/schemas/Comics")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="Si elementos disponibles",
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Error interno del servidor",
     *     )
     * )
     */
    public function getComic($id)
    {
        $response = new Respuesta();
        try {
            $data = $this->domainChareacter->getComic($id);

            if ($data) {
                $response->respuesta(200, true, HttpCode::getMessageForCode(200), $data);
            } else {
                $response->respuesta(204, true, HttpCode::getMessageForCode(204), $data);
            }
        } catch (Exception $e) {
            $response->respuesta(500, false, "Error en el servidor", null);
        }
        return $response->toJson();
    }
        /**
     * @OA\Get(
     *     path="/api/character/{id}/events",
     *     tags={"Character"},
     *     summary="Obtener eventos del personaje especificado en el Id",
     *     description="Lista de eventos en el que aparece el personaje",
     * @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID del personaje",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Operación exitosa",
     *         @OA\JsonContent(ref="#/components/schemas/Events")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="Si elementos disponibles",
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Error interno del servidor",
     *     )
     * )
     */
    public function getEvent($id)
    {
        $response = new Respuesta();
        try {
            $data = $this->domainChareacter->getEvent($id);

            if ($data) {
                $response->respuesta(200, true, HttpCode::getMessageForCode(200), $data);
            } else {
                $response->respuesta(204, true, HttpCode::getMessageForCode(204), $data);
            }
        } catch (Exception $e) {
            $response->respuesta(500, false, "Error en el servidor", null);
        }
        return $response->toJson();
    }
        /**
     * @OA\Get(
     *     path="/api/character/{id}/series",
     *     tags={"Character"},
     *     summary="Obtener series del personaje especificado en el Id",
     *     description="Lista de series en el que aparece el personaje",
     * @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID del personaje",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Operación exitosa",
     *         @OA\JsonContent(ref="#/components/schemas/Series")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="Si elementos disponibles",
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Error interno del servidor",
     *     )
     * )
     */
    public function getSeries($id)
    {
        $response = new Respuesta();
        try {
            $data = $this->domainChareacter->getSeries($id);

            if ($data) {
                $response->respuesta(200, true, HttpCode::getMessageForCode(200), $data);
            } else {
                $response->respuesta(204, true, HttpCode::getMessageForCode(204), $data);
            }
        } catch (Exception $e) {
            $response->respuesta(500, false, "Error en el servidor", null);
        }
        return $response->toJson();
    }
        /**
     * @OA\Get(
     *     path="/api/character/{id}/stories",
     *     tags={"Character"},
     *     summary="Obtener historias del personaje especificado en el Id",
     *     description="Lista de historias en el que aparece el personaje",
     * @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID del personaje",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Operación exitosa",
     *         @OA\JsonContent(ref="#/components/schemas/Stories")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="Si elementos disponibles",
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Error interno del servidor",
     *     )
     * )
     */
    public function getStories($id)
    {
        $response = new Respuesta();
        try {
            $data = $this->domainChareacter->getStories($id);

            if ($data) {
                $response->respuesta(200, true, HttpCode::getMessageForCode(200), $data);
            } else {
                $response->respuesta(204, true, HttpCode::getMessageForCode(204), $data);
            }
        } catch (Exception $e) {
            $response->respuesta(500, false, "Error en el servidor", null);
        }
        return $response->toJson();
    }
}
