<?php 

namespace App\Api\Controllers\Main;

use App\Api\Controllers\Interfaces\IEventsMain;
use Exception;
use App\Api\Crosscuting\Respuesta;
use App\Api\Crosscuting\HttpCode;
use App\Api\Domain\Core\EventsDomain;

class EventsMain implements IEventsMain
{
    private $domainEvents;
    public function __construct()
    {
        $this->domainEvents = new EventsDomain();
    }
    /**
     * @OA\Get(
     *     path="/api/events",
     *     tags={"Events"},
     *     summary="Obtener todos los eventos",
     *     description="Devuelve una lista de los eventos",
     *     @OA\Response(
     *         response=200,
     *         description="Operación exitosa",
     *         @OA\JsonContent(ref="#/components/schemas/Events")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="Sin contenido, no hay eventos disponibles",
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
            $data = $this->domainEvents->getAll();

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
     *     path="/api/events/{id}",
     *     tags={"Events"},
     *     summary="Obtener eventos por id",
     *     description="Devuelve evento especificado",
     *  @OA\Parameter(
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
            $data = $this->domainEvents->get($id);

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
     *     path="/api/events/{id}/characters",
     *     tags={"Events"},
     *     summary="Obtener personajes del evento especificado en el Id",
     *     description="Lista de personajes que aparecen en el evento",
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
            $data = $this->domainEvents->getCharacters($id);

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
     *     path="/api/events/{id}/comics",
     *     tags={"Events"},
     *     summary="Obtener comic del evento especificado en el Id",
     *     description="Lista de comics que aparece en el evento",
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
            $data = $this->domainEvents->getComics($id);

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
     *     path="/api/events/{id}/creators",
     *     tags={"Events"},
     *     summary="Obtener creadores del evento especificado en el Id",
     *     description="Lista de creadores en el que aparece el evento",
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
            $data = $this->domainEvents->getCreators($id);

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
     *     path="/api/events/{id}/series",
     *     tags={"Events"},
     *     summary="Obtener series del evento especificado en el Id",
     *     description="Lista de series en el que aparece el personaje",
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
            $data = $this->domainEvents->getSeries($id);

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
     *     path="/api/events/{id}/stories",
     *     tags={"Events"},
     *     summary="Obtener historias del evento especificado en el Id",
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
            $data = $this->domainEvents->getStories($id);

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
