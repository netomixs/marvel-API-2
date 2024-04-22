<?php

namespace App\Api\Controllers\Main;

use App\Api\Controllers\Interfaces\IStoriesMain;
use Exception;
use App\Api\Crosscuting\Respuesta;
use App\Api\Crosscuting\HttpCode;
use App\Api\Domain\Core\StoriesDomain;

class StoriesMain implements IStoriesMain
{
    private $domainStories;
    public function __construct()
    {
        $this->domainStories = new StoriesDomain();
    }
    /**
     * @OA\Get(
     *     path="/api/stories",
     *     tags={"Stories"},
     *     summary="Obtener todas las historias",
     *     description="Devuelve una lista las historias",
     *     @OA\Response(
     *         response=200,
     *         description="Operación exitosa",
     *         @OA\JsonContent(ref="#/components/schemas/Stories")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="Sin contenido, no hay series disponibles",
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
            $data = $this->domainStories->getAll();

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
     *     path="/api/stories/{id}",
     *     tags={"Stories"},
     *     summary="Obtener historia por id",
     *     description="Devuelve la historia especificada",
     *  @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID de la historia",
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
            $data = $this->domainStories->get($id);

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
     *     path="/api/stories/{id}/characters",
     *     tags={"Stories"},
     *     summary="Obtener personajes de la historia especificado en el Id",
     *     description="Lista de personajes que aparece en la historia",
     * @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID de la historia",
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
     *         description="Si elementos disponibles",
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
            $data = $this->domainStories->getCharacters($id);

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
     *     path="/api/stories/{id}/comics",
     *     tags={"Stories"},
     *     summary="Obtener comics del personaje especificado en el Id",
     *     description="Lista de comics en el que aparece el personaje",
     * @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID de la historia",
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
    public function getComics($id)
    {
        $response = new Respuesta();
        try {
            $data = $this->domainStories->getComics($id);

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
     *     path="/api/stories/{id}/creators",
     *     tags={"Stories"},
     *     summary="Obtener creadores de la historia especificado en el Id",
     *     description="Lista de creadores en el que aparece el historia",
     * @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID de la historia",
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
            $data = $this->domainStories->getCreators($id);

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
     *     path="/api/stories/{id}/events",
     *     tags={"Stories"},
     *     summary="Obtener eventos de la  especificado en el Id",
     *     description="Lista de eventos en el que aparece el personaje",
     * @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID del evento",
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

    public function getEvents($id)
    {
        $response = new Respuesta();
        try {
            $data = $this->domainStories->getEvents($id);

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
     *     path="/api/stories/{id}/series",
     *     tags={"Stories"},
     *     summary="Obtener series de la historia  especificado en el Id",
     *     description="Lista de series en el que aparece el historia",
     * @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID del stories",
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
            $data = $this->domainStories->getSeries($id);

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
}
