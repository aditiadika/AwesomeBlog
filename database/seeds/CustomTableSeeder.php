<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Tag;
use App\Post;


class CustomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (['Financial Advisor, Banking'] as $i => $blogCategory) {
            $master = new Category;
            $master->name = $blogCategory;
            $master->save();
        }

        foreach (['Premium', 'Basic'] as $i => $blogTag) {
            $master = new Tag;
            $master->tag = $blogTag;
            $master->save();
        }

        $faker = Faker\Factory::create('id_ID');
        foreach (range(1, 3) as $i) {
            $blog = new Post;
            $blog->title = $faker->sentence();
            $blog->slug = str_slug($blog->title);
            $blog->content = $faker->text(500);
            $blog->category_id = rand(1, 2);
            $blog->featured = 'uploads/posts/1532155217100686484-excited-young-stock-trader-gettyp.1910x1000.jpg';
            $blog->save();

            $blog->tags()->sync([rand(1, 2), rand(1, 2)]);
        }
    }
}
