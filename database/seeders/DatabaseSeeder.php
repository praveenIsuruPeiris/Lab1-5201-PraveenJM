<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{


    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        User::truncate();
//        Post::truncate();
//        Category::truncate();

   $user =  User::factory()->create(
            [
                'name' => 'John Doe'
            ]  );
          Post::factory(5)->create([
              'user_id' =>$user->id
          ]);



//     $user =  User::factory()->create();

//        $personal=    Category::create([
//                'name' => 'Personal',
//                'slug' => 'Personal'
//            ]);
//
//        $family =Category::create([
//            'name' => 'Family',
//            'slug' => 'Family'
//        ]);
//       $work = Category::create([
//            'name' => 'work',
//            'slug' => 'work'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $family->id,
//            'title' => 'My Family Post',
//            'slug'  => 'my-first-post',
//            'excerpt' => '<p> Lorem ipsum dolar sit amet.</P>',
//            'body' => '<p> hfwd dewicfwkjdf ckucwkjcw ckjwcnwkcsw coicncscs oshjcscscj pjscs9pocsccsoc csckspocscsc pjcsc </p>'
//
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $personal->id,
//            'title' => 'My personal Post',
//            'slug'  => 'my-personal-post',
//            'excerpt' => '<p> Lorem ipsum dolar sit amet.</P>',
//            'body' => '<p> hfwd dewicfwkjdf ckucwkjcw ckjwcnwkcsw coicncscs oshjcscscj pjscs9pocsccsoc csckspocscsc pjcsc </p>'
//
//        ]);
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $work->id,
//            'title' => 'My work Post',
//            'slug'  => 'my-work-post',
//            'excerpt' => '<p> Lorem ipsum dolar sit amet.</P>',
//            'body' => '<p> hfwd dewicfwkjdf ckucwkjcw ckjwcnwkcsw coicncscs oshjcscscj pjscs9pocsccsoc csckspocscsc pjcsc </p>'
//
//        ]);
    }
}
