<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *     title="Rohit Api Documentation",
 *     version="1.0.0",
 *     @OA\Contact(
 *         name="developer",
 *         email="rohit7305.rk@gmail.com"
 *     ),
 *     @OA\License(
 *         name="Apache 2.0",
 *         url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *     )
 * )
 *     @OA\Server(
 *     description="http",
 *     url=L5_SWAGGER_CONST_HOST,
 *     description="API Server"
 *     )
 *   @OA\Server(
 *   url="http://localhost/whizzer-yii2-1836-master/api",
 *   description="local server",
 * )
 *  @OA\Server(
 *   url="http://192.168.12.233/whizzer-yii2-1836/api",
 *   description="local server",
 * )
 *  @OA\Server(
 *   url="http://192.168.11.130/whizzer-yii2-1836/api",
 *   description="local server",
 * )
 *  @OA\Server(
 *   url="http://192.168.11.243/whizzer-yii2-1836/api",
 *   description="local server",
 * )
 *  @OA\Server(
 *   url="http://192.168.2.190/whizzer-yii2-1836/api",
 *   description="local server",
 * )
 *  @OA\Server(
 *   url="http://192.168.2.67/whizzer-yii2-1836/api",
 *   description="local server",
 * )
 *     @OA\SecurityScheme(
 *     type="http",
 *     in="header",
 *     scheme="bearer",
 *     name="Token based authentication",
 *     securityScheme="sanctum"
 *     )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
