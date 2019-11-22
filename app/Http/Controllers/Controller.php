<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
/**
 * @OA\Info(title="API Laravel VueJS", version="0.1")
 */
/**
 * @SWG\Swagger(
 *   schemes={"http"},
 *   host="localhost:8000",
 *   basePath="/as",
 *   @SWG\Info(
 *     title="My API",
 *     version="1.0.0"
 *   )
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
