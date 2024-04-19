<?php

namespace App\Api\Controllers\Main;

use App\Api\Controllers\Interfaces\IComicMain;
use App\Api\Domain\Core\ComicDomain;
use Exception;
use App\Api\Crosscuting\Respuesta;
use App\Api\Crosscuting\HttpCode;
use App\Api\Domain\Core\CharacterDomain;

class ComicMain implements IComicMain
{
    private $domainComic;
    public function __construct()
    {
        $this->domainComic = new ComicDomain();
    }
    /**
     * @OA\Get(
     *     path="/api/comic",
     *     tags={"Comic"},
     *     summary="Obtener todos los comics",
     *     description="Devuelve una lista de comics",
     *     @OA\Response(
     *         response=200,
     *         description="Operación exitosa",
     *         @OA\JsonContent(ref="#/components/schemas/Comics")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="Sin contenido, no hay comics disponibles",
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
            $data = $this->domainComic->getAll();

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
     *     path="/api/comic/{id}",
     *     tags={"Comic"},
     *     summary="Obtener comic ",
     *     description="Devuelve una comic con el id especificado",
     *  @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID del comic",
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
            $data = $this->domainComic->get($id);

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
     *     path="/api/comic/{id}/character",
     *     tags={"Comic"},
     *     summary="Obtener personajes del comic",
     *     description="Lista de personajes en el que aparece el comic",
     * @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID del comic",
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
     *         response=204,
     *         description="Elementos no disponibles",
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Error interno del servidor",
     *     )
     * )
     */
    public function getCharacters($id)
    {
        $response = new Respuesta();
        try {
            $data = $this->domainComic->getCharacters($id);

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
     *     path="/api/comic/{id}/events",
     *     tags={"Comic"},
     *     summary="Eventos relacionados al comic",
     *     description="Lista de eventos en el que aparece el comic",
     * @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID del Comic",
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
     *         description=" elementos no disponibles",
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Error interno del servidor",
     *     )
     * )
     */
    public function getEvents($id)
    {
        $response = new Respuesta();
        try {
            $data = $this->domainComic->getEvents($id);

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
     *     path="/api/comic/{id}/creators",
     *     tags={"Comic"},
     *     summary="Obtener los creadores del comic especificado en el Id",
     *     description="Lista de los creadores  en el que aparece el comic",
     * @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID del Comic",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Operación exitosa",
     *         @OA\JsonContent(ref="#/components/schemas/Creators")
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
    public function getCreators($id)
    {
        $response = new Respuesta();
        try {
            $data = $this->domainComic->getCreators($id);

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
     *     path="/api/comic/{id}/stories",
     *     tags={"Comic"},
     *     summary="Obtener historias del comic especificado en el Id",
     *     description="Lista de historias en el que aparece el comic",
     * @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID del comic",
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
            $data = $this->domainComic->getStories($id);

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
