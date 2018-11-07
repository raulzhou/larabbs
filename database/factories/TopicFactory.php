<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Topic::class, function (Faker $faker) {
	//随机生成一小段文字
	$sentence = $faker->sentence();
	// 随机取一个月以内的时间作为更改时间
    $updated_at = $faker->dateTimeThisMonth();
    //生成创建时间,创建时间永远比更改时间要早
    $created_at = $faker->dateTimeThisMonth($updated_at);
    return [
        'title' => $sentence,  //标题
        'body' => $faker->text(),  //内容, text()方法会随机生成一大段文字
        'excerpt' => $sentence,   //摘录
        'created_at' => $created_at,
        'updated_at' => $updated_at
    ];
});
