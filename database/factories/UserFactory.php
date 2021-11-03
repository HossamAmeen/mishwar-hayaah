<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;




$users = App\Models\User::pluck('id')->toArray();



$factory->define(App\Models\User::class, function (Faker $faker) {

    return [
        'user_name' => $faker->name,
        'full_name' => $faker->name,
        'password' => '$2y$10$mXwEFI/nQub9PmCejn59zuozRujElm4bu5D01y.wXpciRnKjHRWNm', // admin
        'email' => Str::random(10). $faker->email,
        'role' => $faker->randomElement($array = range (0,1))
    ];
});
$factory->define(App\Models\Configration::class, function (Faker $faker) {
    return [
        'email' => $faker->safeEmail,
        'title' => "مشوار حياه",
        'en_title' =>  $faker->name,
        // 'description' => $faker->text,
        // 'en_description' => $faker->text,
        // 'home_description' => $faker->text,
        // 'en_home_description' => $faker->text,
        'phone' => $faker->e164PhoneNumber,
        'address' =>$faker->address ,
        'facebook' => "https://www.facebook.com/",
        'twitter' => "https://twitter.com/",
        'instagram' => "https://www.instagram.com/", //
        'video' =>"https://www.youtube.com/embed/AnBHcM-tZsM" ,
        'video2' =>"https://www.youtube.com/embed/AnBHcM-tZsM" ,
        'youtube' =>"https://www.youtube.com" ,
        'user_id' =>1 ,


    ];
});

$factory->define(App\Models\News::class, function (Faker $faker) {

    return [
        'title' => "افتتاح مقر المنيا",
        'en_title' => $faker->name,
        'description' => "قام محافظ المنيا مع الاستاذ محمد محمود بافتتاح فرع المنيا الجديد ",
        'user_id' =>1 ,
    ];
});

$factory->define(App\Models\Partner::class, function (Faker $faker) {

    return [        
        'user_id' =>1 ,
    ];
});

$factory->define(App\Models\Gallery::class, function (Faker $faker) {
    return [
        'description'=>"حفل ايتام المقام في محافظة اسيوط - مدينه الفتح - حديقة الفتح",
        'user_id' =>1 ,
    ];
});