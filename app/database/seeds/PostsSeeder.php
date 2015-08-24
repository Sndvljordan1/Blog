<?php 

use Faker\Factory as Faker;

class PostsSeeder extends Seeder {

    public function run(){
        $faker = Faker::create();

        $post = new Post();
        $post->title = $faker->word;
        $post->tldr = $faker->catchphrase;
        $post->body = $faker->realText;
        $post->save();

        $post1 = new Post();
        $post1->title = $faker->word;
        $post1->tldr = $faker->catchphrase;
        $post1->body = $faker->realText;
        $post1->save();


        $post2 = new Post();
        $post2->title = $faker->word;
        $post2->tldr = $faker->catchphrase;
        $post2->body = $faker->realText;
        $post2->save();

        $post3 = new Post();
        $post3->title = $faker->word;
        $post3->tldr = $faker->catchphrase;
        $post3->body = $faker->realText;
        $post3->save();

    }





}