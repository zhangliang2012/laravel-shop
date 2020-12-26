<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testRegister()
    {
        $response = $this->post('wx/auth/register', [
            'username' => 'zhangliang',
            'password' => '123123',
            'mobile' => '13999999999',
            'code' => '1234'
        ]);
//        echo $response->getContent();
        $res = $response->getOriginalContent();
//        dump($res);
        $this->assertEquals(0, $res['errno']);
        $this->assertNotEmpty($res['data']);
        $response->assertStatus(200);
    }
}
//"/home/nsf0cus/new_site/bin/encrypt --hash 1234-1234-1234-1234 --in /home/nsf0cus/upgradesys/files/59434.rsas-sys-V6.0R03F01SP01.dat --out /home/nsf0cus/new_site/bin/files/aaa.dat --key /home/nsf0cus/new_site/bin/encrypt/rsa_private_key.pem"
