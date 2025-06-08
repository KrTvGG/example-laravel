<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *     path="/api/note",
 *     summary="Создание заметки",
 *     tags={"Note"},
 * 
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="note", type="string", example="Text note"),
 *                     @OA\Property(property="user_id", type="integer", example=1),
 *                 ),
 *             }
 *         ),
 *     ),
 * 
 *     @OA\Response(
 *         response=200,
 *         description="OK", 
 *         @OA\JsonContent(
 *             @OA\Property(property="data", type="object",
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="note", type="string", example="Text note"),
 *                 @OA\Property(property="user_id", type="integer", example=1),
 *                 @OA\Property(property="updated_at", type="date-time", example="2025-06-08T17:49:40.000000Z"),
 *                 @OA\Property(property="created_at", type="date-time", example="2025-06-08T17:49:40.000000Z"),
 *             ),
 *         ),
 *     ),
 * ),
 * 
 * @OA\Get(
 *     path="/api/note",
 *     summary="Список заметок",
 *     tags={"Note"},
 * 
 *     @OA\Response(
 *         response=200,
 *         description="OK", 
 *         @OA\JsonContent(
 *             @OA\Property(property="data", type="array", @OA\Items(       
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="note", type="string", example="Text note"),
 *                 @OA\Property(property="user_id", type="integer", example=1),
 *                 @OA\Property(property="updated_at", type="date-time", example="2025-06-08T17:49:40.000000Z"),
 *                 @OA\Property(property="created_at", type="date-time", example="2025-06-08T17:49:40.000000Z"),
 *             )),
 *         ),
 *     ),
 * ),
 * 
 * @OA\Get(
 *     path="/api/note/{note}",
 *     summary="Единичная заметка",
 *     tags={"Note"},
 * 
 *     @OA\Parameter(
 *         description="ID заметки",
 *         in="path",
 *         name="note",
 *         required=true,
 *         example=1
 *     ),
 * 
 *     @OA\Response(
 *         response=200,
 *         description="OK", 
 *         @OA\JsonContent(
 *             @OA\Property(property="data", type="object",
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="note", type="string", example="Text note"),
 *                 @OA\Property(property="user_id", type="integer", example=1),
 *                 @OA\Property(property="updated_at", type="date-time", example="2025-06-08T17:49:40.000000Z"),
 *                 @OA\Property(property="created_at", type="date-time", example="2025-06-08T17:49:40.000000Z"),
 *             ),
 *         ),
 *     ),
 * ),
 * 
 * @OA\Patch(
 *     path="/api/note/{note}",
 *     summary="Обновление заметки",
 *     tags={"Note"},
 * 
 *     @OA\Parameter(
 *         description="ID заметки",
 *         in="path",
 *         name="note",
 *         required=true,
 *         example=1
 *     ),
 * 
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="note", type="string", example="Text note for update"),
 *                     @OA\Property(property="user_id", type="integer", example=1),
 *                 ),
 *             }
 *         ),
 *     ),
 * 
 *     @OA\Response(
 *         response=200,
 *         description="OK", 
 *         @OA\JsonContent(
 *             @OA\Property(property="data", type="object",
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="note", type="string", example="Text note for update"),
 *                 @OA\Property(property="user_id", type="integer", example=1),
 *                 @OA\Property(property="updated_at", type="date-time", example="2025-06-08T17:49:40.000000Z"),
 *                 @OA\Property(property="created_at", type="date-time", example="2025-06-08T17:49:40.000000Z"),
 *             ),
 *         ),
 *     ),
 * ),
 * 
 * @OA\Delete(
 *     path="/api/note/{note}",
 *     summary="Удаление заметки",
 *     tags={"Note"},
 * 
 *     @OA\Parameter(
 *         description="ID заметки",
 *         in="path",
 *         name="note",
 *         required=true,
 *         example=1
 *     ),
 * 
 *     @OA\Response(
 *         response=200,
 *         description="OK", 
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="done"),
 *         ),
 *     ),
 * ),
 */
class NotesApiController extends Controller
{

}
