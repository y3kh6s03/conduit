<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class CreateInputTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_login_input_empty_valid(): void
    {
        $type=[
            'email'=>'',
            'password'=>'',
        ];

        $response=$this->get(route('conduit.create',$type));
        $response->assertStatus(200);
    }
}
