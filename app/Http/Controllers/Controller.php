<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *     description="API to download everything from the Internet.",
 *     version="1.0.0",
 *     title="Downloader API",
 *     @OA\Contact(email="mail@nikitakiselev.ru"),
 *     @OA\License(
 *         name="Apache 2.0",
 *         url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *     )
 * )
 *
 * @OA\SecurityScheme(
 *      type="apiKey",
 *      in="header",
 *      securityScheme="api_key",
 *      name="api_key"
 *  )
 *
 * @OA\Server(url="/api")
 */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
