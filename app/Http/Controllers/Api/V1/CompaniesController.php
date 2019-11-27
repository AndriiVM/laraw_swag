<?php

namespace App\Http\Controllers\Api\V1;

use App\Company;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CompaniesController extends Controller
{
    /**
      @OA\Post(
          path="/api/v1/login",
          tags={"Login1"},
          summary="Login",
          description="A sample ... to test out the API",
          operationId="login",

          @OA\Parameter(
              name="email",
              in="query",
              required=true,
              @OA\Schema(
                  type="string"
              )
          ),
          @OA\Parameter(
              name="password",
              in="query",
              required=true,
              @OA\Schema(
                  type="string"
              )
          ),
          @OA\Response(
              response=200,
              description="Success",
              @OA\MediaType(
                  mediaType="application/json",
     *            @OA\Schema(
                    type="array",
     *              @OA\Items(type="string"),
     *              )
     *
              )
          ),
          @OA\Response(
              response=401,
              description="Unauthorized"
          ),
          @OA\Response(
              response=400,
              description="Invalid request"
          ),
          @OA\Response(
              response=404,
              description="not found"
          ),
      )
     */

    /**
     * @OA\Get(
     *      path="/api/v1/companies",
     *      tags={"Companies"},
     *      summary="List of all companies.",
            description="A sample ... to test out the API",
     *      operationId="index",
     *
     *      @OA\Response(
     *          response=200,
     *          description="Success",
     *          @OA\MediaType(
     *              mediaType="application/json",
     *          )
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthorized"
     *      ),
     *      @OA\Response(
     *          response=400,
     *          description="Invalid request"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="not found"
     *      ),
     * )
     */
    public function index()
    {
        return Company::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * @OA\Post(
     *      path="/api/v1/companies",
     *      tags={"Companies"},
     *      summary="Create a company.",
            description="A sample ... to test out the API",
     *      operationId="store",
     *      @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="name",
     *                     type="string"
     *                 ),
     *                 example={"name": "Jessica Smith"}
     *             )
     *         )
     *      ),
     *
     *      @OA\Response(
     *          response=201,
     *          description="Success a company creation.",
     *          @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(
     *                  @OA\Property(
     *                      property="name",
     *                      type="string",
     *                      description="Company name."
     *                  ),
     *                  @OA\Property(
     *                      property="updated_at",
     *                      type="string",
     *                      description="Date of update."
     *                  ),
     *                  @OA\Property(
     *                      property="created_at",
     *                      type="string",
     *                      description="Date of create.",
     *                  ),
     *                  @OA\Property(
     *                      property="Id",
     *                      type="integer",
     *                      description="Record ID.",
     *                  ),
     *                  example={
                            "name": "Jessica Smith",
                            "updated_at": "2019-11-21 16:41:42",
                            "created_at": "2019-11-21 16:41:42",
                            "id": 7
                        }
     *              )
     *          )
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthorized"
     *      ),
     *      @OA\Response(
     *          response=400,
     *          description="Invalid request"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="not found"
     *      ),
     * )
     */
    public function store(Request $request)
    {
        $company = Company::create($request->all());
        return $company;
    }


    /**
     * @OA\Get(
     *      path="/api/v1/companies/{id}",
     *      operationId="show",
     *      tags={"Companies"},
     *      summary="Get company information",
     *      description="A sample ... to test out the API",
     *      @OA\Parameter(
     *          name="id",
     *          description="Company id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="successful operation",
                @OA\MediaType(
                     mediaType="application/json",
                     @OA\Schema(
                         @OA\Property(
                              property="id",
                              type="integer",
                              description="Company identifier."
                          ),
                          @OA\Property(
                              property="name",
                              type="string|null",
                              description="Company name."
                          ),
                          @OA\Property(
                              property="address",
                              type="string",
                              description="Address."
                          ),
                          @OA\Property(
                              property="website",
                              type="string",
                              description="Website.",
                          ),
                          @OA\Property(
                              property="email",
                              type="string",
                              description="Email.",
                          ),
                          @OA\Property(
                              property="updated_at",
                              type="string",
                              description="Date of update."
                          ),
                          @OA\Property(
                              property="created_at",
                              type="string",
                              description="Date of create.",
                          ),
                          example={
                           "id": 1,
                           "name": null,
                           "address": null,
                           "website": null,
                           "email": null,
                           "created_at": "2019-11-21 15:59:00",
                           "updated_at": "2019-11-21 15:59:00"
                           }
     *                  )
                     )
                 ),
     *
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     *      security={
     *         {
     *             "oauth2_security_example": {"write:projects", "read:projects"}
     *         }
     *     },
     * )
     */
    public function show($id)
    {
        return Company::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * @OA\Patch(
     *      path="/api/v1/companies/{company}",
     *      tags={"Companies"},
     *      summary="Update a company.",
            description="A sample ... to test out the API",
     *      operationId="update",
     *      @OA\Parameter(
     *          name="company",
     *          description="Company id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="company",
     *                     type="string"
     *                 ),
     *                 example={"name": "Jessica Smith"}
     *             )
     *         )
     *      ),
     *
     *      @OA\Response(
     *          response=200,
     *          description="Success a company update.",
     *          @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(
     *                  @OA\Property(
     *                      property="name",
     *                      type="string",
     *                      description="Company name."
     *                  ),
     *                  @OA\Property(
     *                      property="updated_at",
     *                      type="string",
     *                      description="Date of update."
     *                  ),
     *                  @OA\Property(
     *                      property="created_at",
     *                      type="string",
     *                      description="Date of create.",
     *                  ),
     *                  @OA\Property(
     *                      property="Id",
     *                      type="integer",
     *                      description="Record ID.",
     *                  ),
     *                  example={
                            "name": "Jessica Smith",
                            "updated_at": "2019-11-21 16:41:42",
                            "created_at": "2019-11-21 16:41:42",
                            "id": 7
                        }
     *              )
     *          )
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthorized"
     *      ),
     *      @OA\Response(
     *          response=400,
     *          description="Invalid ID supplied"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Company not found"
     *      ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     * )
     */
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);
        $company->update($request->all());

        return $company;
    }

    /**
     * @OA\Delete(
     *     path="/api/v1/companies/{company}",
     *     tags={"Companies"},
     *     summary="deletes a company.",
     *     description="deletes a single company based on the ID supplied",
     *     operationId="destroy",
     *     @OA\Parameter(
     *         description="ID of company to delete",
     *         in="path",
     *         name="company",
     *         required=true,
     *         @OA\Schema(
     *             format="int64",
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Company not found"
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="company deleted"
     *     ),
     *     @OA\Response(
     * 		   response=200,
     * 	       description="success",
     * 	   ),
     *     @OA\Response(
     *         response="default",
     *         description="unexpected error",
     *         @OA\Schema(ref="#/components/schemas/ErrorModel")
     *     )
     * )
     */
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();
        return '';
    }
}
