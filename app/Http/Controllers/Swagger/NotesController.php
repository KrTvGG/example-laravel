<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *     path="/note/",
 *     summary="Создание",
 *     tags={"Notes"},
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
 *             @OA\Property(property="id", type="integer", example=1),
 *             @OA\Property(property="note", type="string", example="Text note"),
 *             @OA\Property(property="user_id", type="integer", example=1),
 *         ),
 *     ),
 * ),
 * 
 * @OA\Get(
 *     path="/note/",
 *     summary="Список",
 *     tags={"Notes"},
 * 
 *     @OA\Parameter(
 *         name="created_at",
 *         in="query",
 *         required=false,
 *         description="Фильтр по дате создания записки",
 *         @OA\Schema(type="string", format="date-time", example="2025-06-07T00:00:00Z")
 *     ),
 *     @OA\Parameter(
 *         name="per_page",
 *         in="query",
 *         required=false,
 *         description="Количество записок на странице",
 *         @OA\Schema(type="integer", example=6)
 *     ),
 * 
 *     @OA\Response(
 *         response=200,
 *         description="OK, возвращает HTML-страницу с записями", 
 *         @OA\JsonContent(
 *             @OA\Property(property="html", type="string", example="<html>...</html>")
 *         ),
 *     ),
 * ),
 */
class NotesController extends Controller
{

}
