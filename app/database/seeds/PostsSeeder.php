<?php 

use Faker\Factory as Faker;

class PostsSeeder extends Seeder {

    public function run(){


        $faker = Faker::create();

        $post = new Post();
        $post->title = $faker->word;
        $post->tldr = $faker->catchphrase;
        $post->body = $faker->realText;
        $post->user_id = 1;
        $post->save();

        $post1 = new Post();
        $post1->title = $faker->word;
        $post1->tldr = $faker->catchphrase;
        $post1->body = $faker->realText;
        $post1->user_id = 1;
        $post1->save();


        $post2 = new Post();
        $post2->title = $faker->word;
        $post2->tldr = $faker->catchphrase;
        $post2->body = $faker->realText;
        $post2->user_id = 1;
        $post2->save();

        $post3 = new Post();
        $post3->title = $faker->word;
        $post3->tldr = $faker->catchphrase;
        $post3->body = $faker->realText;
        $post3->user_id = 1;
        $post3->save();

        $post4 = new Post();
        $post4->title = $faker->word;
        $post4->tldr = $faker->catchphrase;
        $post4->body = $faker->realText;
        $post4->user_id = 1;
        $post4->save();

        $post5 = new Post();
        $post5->title = $faker->word;
        $post5->tldr = $faker->catchphrase;
        $post5->body = $faker->realText;
        $post5->user_id = 1;
        $post5->save();

        $post6 = new Post();
        $post6->title = $faker->word;
        $post6->tldr = $faker->catchphrase;
        $post6->body = $faker->realText;
        $post6->user_id = 1;
        $post6->save();

        $post7 = new Post();
        $post7->title = $faker->word;
        $post7->tldr = $faker->catchphrase;
        $post7->body = $faker->realText;
        $post7->user_id = 1;
        $post7->save();

        $post8 = new Post();
        $post8->title = $faker->word;
        $post8->tldr = $faker->catchphrase;
        $post8->body = $faker->realText;
        $post8->user_id = 1;
        $post8->save();

        $post9 = new Post();
        $post9->title = $faker->word;
        $post9->tldr = $faker->catchphrase;
        $post9->body = $faker->realText;
        $post9->user_id = 1;
        $post9->save();

        $post10 = new Post();
        $post10->title = $faker->word;
        $post10->tldr = $faker->catchphrase;
        $post10->body = $faker->realText;
        $post10->user_id = 1;
        $post10->save();

        $post11 = new Post();
        $post11->title = $faker->word;
        $post11->tldr = $faker->catchphrase;
        $post11->body = $faker->realText;
        $post11->user_id = 1;
        $post11->save();

    }





}