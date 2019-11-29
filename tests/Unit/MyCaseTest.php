<?php

namespace Tests\Unit;

/**
 * Create a TestCase inherited from SwaggerTestCase
 */
class MyCaseTest extends \ByJG\Swagger\SwaggerTestCase
{
    protected $filePath = 'storage/api-docs/api-docs.json';

    /**
     * Test if the REST address /path/for/get/ID with the method GET returns what is
     * documented on the "swagger.json"
     */
    public function testGet()
    {

        $request = new \ByJG\Swagger\SwaggerRequester();
        $request
            ->withMethod('GET')
            ->withPath("/api/v1/companies/5");

        $this->assertRequest($request);
    }

    /**
     * Test if the REST address /path/for/get/NOTFOUND returns a status code 404.
     */
   /* public function testGetNotFound()
    {
        $request = new \ByJG\Swagger\SwaggerRequester();
        $request
            ->withMethod('GET')
            ->withPath("/path/for/get/NOTFOUND")
            ->assertResponseCode(404);

        $this->assertRequest($request);
    }

    /**
     * Test if the REST address /path/for/post/ID with the method POST
     * and the request object ['name'=>'new name', 'field' => 'value'] will return an object
     * as is documented in the "swagger.json" file
     *//*
    public function testPost()
    {
        $request = new \ByJG\Swagger\SwaggerRequester();
        $request
            ->withMethod('POST')
            ->withPath("/path/for/post/2")
            ->withRequestBody(['name'=>'new name', 'field' => 'value']);

        $this->assertRequest($request);
    }

    /**
     * Test if the REST address /another/path/for/post/{id} with the method POST
     * and the request object ['name'=>'new name', 'field' => 'value'] will return an object
     * as is documented in the "swagger.json" file
     *//*
    public function testPost2()
    {
        $request = new \ByJG\Swagger\SwaggerRequester();
        $request
            ->withMethod('POST')
            ->withPath("/path/for/post/3")
            ->withQuery(['id'=>10])
            ->withRequestBody(['name'=>'new name', 'field' => 'value']);

        $this->assertRequest($request);
    }*/

}
