<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
/**
 * @OA\Info(
 *     title="API Laravel 6.5",
 *     version="0.1",
 *     description="This is a sample server for ...",
 *     @OA\Contact(
 *         name="API Support",
 *         url="http://www.swagger.io/support",
 *         email="support@swagger.io"
 *     )
 * ),
 * @OA\Server(url="http://127.0.0.1:8000/")
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
