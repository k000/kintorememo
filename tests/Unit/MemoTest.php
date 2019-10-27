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
            'isprivate' => false,
            'memo' => '凄い疲れた'
        ];


        $response = $this->call('post','memo/create',$data);
        $this->assertDatabaseHas('memos',$data);

    }


    /**
     * @test
     */
    public function test_postでバリデーションエラーで失敗すること()
    {
        $hoge = array(
            'shumoku' => 'ラットプルダウン',
            'rep' => 12,
            'set' => 3
        );

        $me = serialize($hoge);
        
        $data = [
            'event' => '胸と背中のトレーニングとにかく疲れたが文字稼ぎ文字稼ぎ',
            'data' => $me,
            'day' => 20191026,
            'place' => 'ゴールドジム',
            'isprivate' => true,
            'memo' => '前のコミットのmemoが大変なことになっている。'
        ];


        $response = $this->call('post','memo/create',$data);
        $this->assertDatabaseMissing('memos', $data);//テーブルに期待値がないこと
    }
}
