<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MemoTest extends TestCase
{
    
    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }


    /**
     * @test
     */
    public function test_postでメモが作成できる(){

        $hoge = array(
            'shumoku' => 'ラットプルダウン',
            'rep' => 12,
            'set' => 3
        );

        $me = serialize($hoge);
        
        $data = [
            'event' => '背中',
            'data' => $me,
            'day' => 20191026,
            'place' => 'ゴールドジム',
            'isprivate' => true,
            'memo' => '前回の背中トレーニングよりも集中力が切れずに行えた。'
        ];


        $response = $this->call('post','memo/create',$data);
        $this->assertDatabaseHas('memos',$data);

    }
}
