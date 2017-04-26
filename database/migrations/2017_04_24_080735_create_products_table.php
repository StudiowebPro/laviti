<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function(Blueprint $table) {
            $table->increments('id');
			$table->string('name')->nullable()->index('idx_name');
			$table->integer('price')->nullable()->default(0);
			$table->string('material')->nullable();
			$table->integer('category_id')->nullable()->default(0)->index('idx_category');
			$table->integer('brand_id')->nullable()->default(0)->index('idx_brand');
			$table->integer('country_id')->unsigned()->nullable()->default(0000000000)->index('idx_country');
			$table->string('tag')->nullable();
			$table->string('main_img')->nullable();
			$table->boolean('is_available')->nullable()->default(1);
			$table->boolean('is_visible')->nullable()->default(1);
			$table->text('mini_description', 65535)->nullable();
			$table->text('middle_description', 65535)->nullable();
			$table->text('description', 65535)->nullable();
			$table->boolean('is_homepage')->nullable()->default(0);
			$table->integer('cnt_view')->nullable()->default(0);
			$table->integer('cnt_vote')->unsigned()->nullable()->default(0);
			$table->float('vote_score', 2, 1)->unsigned()->nullable()->default(0.0);
			$table->string('seo_title')->nullable();
			$table->string('seo_keywords')->nullable();
			$table->string('seo_description')->nullable();
			$table->boolean('is_new')->nullable()->default(0);
			$table->boolean('is_sale')->nullable()->default(0);
			$table->integer('price_sale')->unsigned()->nullable()->default(0);
			$table->boolean('is_action')->nullable()->default(0);
			$table->integer('price_action')->unsigned()->nullable()->default(0);
			$table->boolean('is_bonus')->nullable()->default(0);
			$table->integer('sum_bonus')->unsigned()->nullable()->default(0);
			$table->integer('action_id')->unsigned()->nullable()->default(0);
			$table->integer('bonusaction_id')->unsigned()->nullable()->default(0);
			$table->boolean('is_leader')->nullable()->default(0);
			$table->integer('collection_id')->unsigned()->nullable()->default(0);
			$table->boolean('is_collection_visible')->nullable()->default(0);
			$table->timestamps();
			$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }

}
