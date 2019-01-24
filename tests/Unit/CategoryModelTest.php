<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Category;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CategoryModelTest extends TestCase
{
	use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCategoryCreation()
    {	

    	$category = new Category;
    	$category->name = 'career';
    	$category->save();

        $this->assertEquals($category->name, 'career');
    }
}
