<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  
    public function run()
    {

     //   factory('App\Models\User',10)->create();
     $this->call([
        UserSeed::class,
    ]);
       factory('App\Models\Configration',1)->create();
       factory('App\Models\News',90)->create();
      //  factory('App\Models\Article',90)->create();
      //  factory('App\Models\Service',90)->create();
       factory('App\Models\Complaint',10)->create();
       factory('App\Models\Gallery',19)->create();
       factory('App\Models\Partner',19)->create();
    //    factory('App\Models\Video',5)->create();

    }
}
