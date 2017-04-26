<?php

use Faker\Generator;
use App\Models\Access\Role\Role;
use App\Models\Access\User\User;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(User::class, function (Generator $faker) {
    static $password;

    return [
        'name'              => $faker->name,
        'email'             => $faker->safeEmail,
        'password'          => $password ?: $password = bcrypt('secret'),
        'remember_token'    => str_random(10),
        'confirmation_code' => md5(uniqid(mt_rand(), true)),
    ];
});

$factory->state(User::class, 'active', function () {
    return [
        'status' => 1,
    ];
});

$factory->state(User::class, 'inactive', function () {
    return [
        'status' => 0,
    ];
});

$factory->state(User::class, 'confirmed', function () {
    return [
        'confirmed' => 1,
    ];
});

$factory->state(User::class, 'unconfirmed', function () {
    return [
        'confirmed' => 0,
    ];
});

/*
 * Roles
 */
$factory->define(Role::class, function (Generator $faker) {
    return [
        'name' => $faker->name,
        'all'  => 0,
        'sort' => $faker->numberBetween(1, 100),
    ];
});

$factory->state(Role::class, 'admin', function () {
    return [
        'all' => 1,
    ];
});


$factory->define(App\Models\Brand::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
		'country_id' => $faker->randomNumber(8)
    ];
});

$factory->define(App\Models\Product::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
		'price' => $faker->randomNumber(8),
		'material' => str_random(100),
		'category_id' => $faker->randomNumber(8),
		'brand_id' => $faker->randomNumber(8),
		'country_id' => $faker->randomNumber(8),
		'tag' => str_random(100),
		'main_img' => str_random(100),
		'is_available' => $faker->boolean(),
		'is_visible' => $faker->boolean(),
		'mini_description' => $faker->text(),
		'middle_description' => $faker->text(),
		'description' => $faker->text(),
		'is_homepage' => $faker->boolean(),
		'cnt_view' => $faker->randomNumber(8),
		'cnt_vote' => $faker->randomNumber(8),
		'seo_title' => str_random(100),
		'seo_keywords' => str_random(100),
		'seo_description' => str_random(100),
		'is_new' => $faker->boolean(),
		'is_sale' => $faker->boolean(),
		'price_sale' => $faker->randomNumber(8),
		'is_action' => $faker->boolean(),
		'price_action' => $faker->randomNumber(8),
		'is_bonus' => $faker->boolean(),
		'sum_bonus' => $faker->randomNumber(8),
		'action_id' => $faker->randomNumber(8),
		'bonusaction_id' => $faker->randomNumber(8),
		'is_leader' => $faker->boolean(),
		'collection_id' => $faker->randomNumber(8),
		'is_collection_visible' => $faker->boolean()
    ];
});

$factory->define(App\Models\Showcase\Brand::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
		'country_id' => $faker->randomNumber(8)
    ];
});

$factory->define(App\Models\Showcase\Product::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
		'price' => $faker->randomNumber(8),
		'material' => str_random(100),
		'category_id' => $faker->randomNumber(8),
		'brand_id' => $faker->randomNumber(8),
		'country_id' => $faker->randomNumber(8),
		'tag' => str_random(100),
		'main_img' => str_random(100),
		'is_available' => $faker->boolean(),
		'is_visible' => $faker->boolean(),
		'mini_description' => $faker->text(),
		'middle_description' => $faker->text(),
		'description' => $faker->text(),
		'is_homepage' => $faker->boolean(),
		'cnt_view' => $faker->randomNumber(8),
		'cnt_vote' => $faker->randomNumber(8),
		'seo_title' => str_random(100),
		'seo_keywords' => str_random(100),
		'seo_description' => str_random(100),
		'is_new' => $faker->boolean(),
		'is_sale' => $faker->boolean(),
		'price_sale' => $faker->randomNumber(8),
		'is_action' => $faker->boolean(),
		'price_action' => $faker->randomNumber(8),
		'is_bonus' => $faker->boolean(),
		'sum_bonus' => $faker->randomNumber(8),
		'action_id' => $faker->randomNumber(8),
		'bonusaction_id' => $faker->randomNumber(8),
		'is_leader' => $faker->boolean(),
		'collection_id' => $faker->randomNumber(8),
		'is_collection_visible' => $faker->boolean()
    ];
});

$factory->define(App\Models\Showcase\Brand::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
		'country_id' => $faker->randomNumber(8)
    ];
});