<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Http\Controllers\ListarIDController;

use Tests\TestCase;
 #php artisan test --filter=ListarIDControllerTest
class ListarIDControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */


    
    public function test_listandoID()
    {
        $controller = new ListarIDController();

        
        $controller->listandoID(11);
       
        $this->assertTrue(true);

    }

    // public function test_souArray(){
    //     $controller2 = new ListarIDController();
    //     $controller2->souArray();
    //     $this->assertCount(2, $controller2);

    // }
}
