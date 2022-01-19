<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Post::factory(10)->create();

        // User::create([
        //     'name' => 'Riska Amelia',
        //     'email' => 'riska@gmail.com',
        //     'password' => bcrypt('12345678'),
        // ]);

        // User::create([
        //     'name' => 'Sila Ramadina',
        //     'email' => 'sila@gmail.com',
        //     'password' => bcrypt('87654321'),
        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'pudul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, tempora.',
        //     'body' => '<p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae rem dolor sed commodi inventore explicabo undeneque culpa dignissimos, deserunt laudantium dolore, quibusdam perferendis recusandae numquam voluptas sapiente odionihil. Quaerat modi nisi laboriosam magnam dolore ratione aspernatur libero consequuntur officia minus inventoredolorem rem illo, impedit laborum reiciendis dolores molestias praesentium, autem voluptates eveniet eaque nihildoloribus?</p> <p> Sit excepturi laboriosam deserunt? Quas, vel assumenda temporibus similique veniam, quae ducimus minuslaudantium blanditiis est facilis. Eaque, amet quisquam optio labore sunt alias ipsam aspernatur ut ab itaque veniamratione est quam distinctio quo maiores deleniti veritatis facilis aperiam.</p><p> Saepe necessitatibus nulla reprehenderitmodi sed accusamus, qui temporibus libero distinctio debitis quam animi porro fugiat sapiente. Similique autincidunt vitae nihil maxime, repellat molestiae tenetur nemo possimus quo modi alias praesentium et ab aperiam estvoluptas adipisci eos? Culpa reprehenderit eligendi nulla aperiam quidem dicta nesciunt, consequuntur sit aliquidprovident consectetur!</p>',
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'pudul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, tempora.',
        //     'body' => '<p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae rem dolor sed commodi inventore explicabo undeneque culpa dignissimos, deserunt laudantium dolore, quibusdam perferendis recusandae numquam voluptas sapiente odionihil. Quaerat modi nisi laboriosam magnam dolore ratione aspernatur libero consequuntur officia minus inventoredolorem rem illo, impedit laborum reiciendis dolores molestias praesentium, autem voluptates eveniet eaque nihildoloribus?</p> <p> Sit excepturi laboriosam deserunt? Quas, vel assumenda temporibus similique veniam, quae ducimus minuslaudantium blanditiis est facilis. Eaque, amet quisquam optio labore sunt alias ipsam aspernatur ut ab itaque veniamratione est quam distinctio quo maiores deleniti veritatis facilis aperiam.</p><p> Saepe necessitatibus nulla reprehenderitmodi sed accusamus, qui temporibus libero distinctio debitis quam animi porro fugiat sapiente. Similique autincidunt vitae nihil maxime, repellat molestiae tenetur nemo possimus quo modi alias praesentium et ab aperiam estvoluptas adipisci eos? Culpa reprehenderit eligendi nulla aperiam quidem dicta nesciunt, consequuntur sit aliquidprovident consectetur!</p>',
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'pudul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, tempora.',
        //     'body' => '<p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae rem dolor sed commodi inventore explicabo undeneque culpa dignissimos, deserunt laudantium dolore, quibusdam perferendis recusandae numquam voluptas sapiente odionihil. Quaerat modi nisi laboriosam magnam dolore ratione aspernatur libero consequuntur officia minus inventoredolorem rem illo, impedit laborum reiciendis dolores molestias praesentium, autem voluptates eveniet eaque nihildoloribus?</p> <p> Sit excepturi laboriosam deserunt? Quas, vel assumenda temporibus similique veniam, quae ducimus minuslaudantium blanditiis est facilis. Eaque, amet quisquam optio labore sunt alias ipsam aspernatur ut ab itaque veniamratione est quam distinctio quo maiores deleniti veritatis facilis aperiam.</p><p> Saepe necessitatibus nulla reprehenderitmodi sed accusamus, qui temporibus libero distinctio debitis quam animi porro fugiat sapiente. Similique autincidunt vitae nihil maxime, repellat molestiae tenetur nemo possimus quo modi alias praesentium et ab aperiam estvoluptas adipisci eos? Culpa reprehenderit eligendi nulla aperiam quidem dicta nesciunt, consequuntur sit aliquidprovident consectetur!</p>',
        // ]);

    }
}
