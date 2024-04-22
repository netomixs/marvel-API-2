<?php

namespace App\Api\Controllers\Main;

use App\Api\Controllers\Interfaces\ISeriesMain;
use Exception;
use App\Api\Crosscuting\Respuesta;
use App\Api\Crosscuting\HttpCode;
use App\Api\Domain\Core\SeriesDomain;

class SeriesMain implements ISeriesMain
{
    private $domainSeries;
    public function __construct()
    {
        $this->domainSeries = new SeriesDomain();
    }
    /**
     * @OA\Get(
     *     path="/api/series",
     *     tags={"Series"},
     *     summary="Obtener todas la series",
     *     description="Devuelve una lista de las series disponibles",
     *     @OA\Response(
     *         response=200,
     *         description="Operación exitosa",
     *         @OA\JsonContent(ref="#/components/schemas/Series")
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
            $data = $this->domainSeries->getAll();

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
     *     path="/api/series/{id}",
     *     tags={"Series"},
     *     summary="Obtener serie por id",
     *     description="Devuelve la serie especificada por el id",
     *  @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID de la serie",
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
            $data = $this->domainSeries->get($id);

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
     *     path="/api/series/{id}/characters",
     *     tags={"Series"},
     *     summary="Obtener personajes de la serie especificado en el Id",
     *     description="Lista de personajes  que aparece la serie",
     * @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID del serie",
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
            $data = $this->domainSeries->getCharacters($id);

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
     *     path="/api/series/{id}/comics",
     *     tags={"Series"},
     *     summary="Obtener comics de la serie especificado en el Id",
     *     description="Lista de comics que aparecen en la serie",
     * @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID del serie",
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
            $data = $this->domainSeries->getComics($id);

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
     *     path="/api/series/{id}/creators",
     *     tags={"Series"},
     *     summary="Obtener creadores de la serie especificado en el Id",
     *     description="Lista de creadores que aparecen en la serie",
     * @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID del serie",
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
            $data = $this->domainSeries->getCreators($id);

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
     *     path="/api/series/{id}/events",
     *     tags={"Series"},
     *     summary="Obtener eventos de la serie especificado en el Id",
     *     description="Lista de eventos que aparecen en la serie",
     * @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID del serie",
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
            $data = $this->domainSeries->getEvents($id);

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
     *     path="/api/series/{id}/stories",
     *     tags={"Series"},
     *     summary="Obtener historias de la serie especificado en el Id",
     *     description="Lista de historias que aparecen en la serie",
     * @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID del serie",
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
            $data = $this->domainSeries->getStories($id);

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
