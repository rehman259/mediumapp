<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Post;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PostrModelTest extends TestCase
{
   use DatabaseTransactions;
   
   /**
    * A basic test example.
    *
    * @return void
    */
   public function testPostCreation()
   {	

		$post = new Post;
		$post->title = 'This is test article';
		$post->slug = 'test-article';
		$post->category_id = 1;
		$post->featured = 'testing_image';
		$post->user_id = 1;
		$post->content = 'This is article description';
		$post->save();

		$this->assertEquals($post->title, 'This is test article');
   }
}
