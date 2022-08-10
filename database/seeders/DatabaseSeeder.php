<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
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
       

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Daffa Rizmawan',
            'username' => 'mdaffarh',
            'email' => 'daffarizmawan@gmail.com',
            'password' => bcrypt('3001')
        ]);
        // User::create([
        //     'name' => 'Dika Satria',
        //     'email' => 'dikaganteng@gmail.com',
        //     'password' => bcrypt('1231')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

       

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro ad quibusdam sunt dolores vel voluptatum facere possimus, in dolorum nulla obcaecati minus! Eveniet, fugit. Eaque, aspernatur! Itaque iure cum expedita ut reprehenderit.',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro ad quibusdam sunt dolores vel voluptatum facere possimus, in dolorum nulla obcaecati minus! Eveniet, fugit. Eaque, aspernatur! Itaque iure cum expedita ut reprehenderit. Quia omnis reiciendis, ullam ex possimus illum esse eaque amet maxime facere quas vel enim assumenda asperiores consequuntur. Obcaecati quidem quasi nemo repellendus.</p><p>Minima commodi facere deserunt veritatis id iure eum harum numquam non alias odit voluptatum neque, rerum cum autem dolores quos officiis officia praesentium? Aut quam facere culpa odit ducimus sint? Reprehenderit dicta hic provident tempore. Dolor veritatis beatae minus maxime praesentium. Excepturi error assumenda, molestias odit est unde autem quod quam nostrum laboriosam exercitationem quae dolore molestiae inventore ut ipsum eligendi quaerat explicabo sit nisi quos. Pariatur veniam consequuntur asperiores, ad a consectetur eius doloremque ipsa porro fugiat molestiae tenetur perspiciatis corporis error magni magnam expedita incidunt reiciendis fugit? Deleniti qui quae consectetur quisquam quo, enim dolore voluptas aut neque eius.</p><p>Recusandae voluptas odio beatae. Obcaecati, placeat! Omnis maxime culpa commodi aliquid, dolorem numquam ducimus. Sunt accusamus autem odio, voluptatem quo soluta, placeat eveniet quae in quidem atque laborum libero, dolorum unde. Autem dolore, et quam qui voluptatem nam mollitia, nostrum quaerat, ratione harum at.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro ad quibusdam sunt dolores vel voluptatum facere possimus, in dolorum nulla obcaecati minus! Eveniet, fugit. Eaque, aspernatur! Itaque iure cum expedita ut reprehenderit.',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro ad quibusdam sunt dolores vel voluptatum facere possimus, in dolorum nulla obcaecati minus! Eveniet, fugit. Eaque, aspernatur! Itaque iure cum expedita ut reprehenderit. Quia omnis reiciendis, ullam ex possimus illum esse eaque amet maxime facere quas vel enim assumenda asperiores consequuntur. Obcaecati quidem quasi nemo repellendus.</p><p>Minima commodi facere deserunt veritatis id iure eum harum numquam non alias odit voluptatum neque, rerum cum autem dolores quos officiis officia praesentium? Aut quam facere culpa odit ducimus sint? Reprehenderit dicta hic provident tempore. Dolor veritatis beatae minus maxime praesentium. Excepturi error assumenda, molestias odit est unde autem quod quam nostrum laboriosam exercitationem quae dolore molestiae inventore ut ipsum eligendi quaerat explicabo sit nisi quos. Pariatur veniam consequuntur asperiores, ad a consectetur eius doloremque ipsa porro fugiat molestiae tenetur perspiciatis corporis error magni magnam expedita incidunt reiciendis fugit? Deleniti qui quae consectetur quisquam quo, enim dolore voluptas aut neque eius.</p><p>Recusandae voluptas odio beatae. Obcaecati, placeat! Omnis maxime culpa commodi aliquid, dolorem numquam ducimus. Sunt accusamus autem odio, voluptatem quo soluta, placeat eveniet quae in quidem atque laborum libero, dolorum unde. Autem dolore, et quam qui voluptatem nam mollitia, nostrum quaerat, ratione harum at.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro ad quibusdam sunt dolores vel voluptatum facere possimus, in dolorum nulla obcaecati minus! Eveniet, fugit. Eaque, aspernatur! Itaque iure cum expedita ut reprehenderit.',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro ad quibusdam sunt dolores vel voluptatum facere possimus, in dolorum nulla obcaecati minus! Eveniet, fugit. Eaque, aspernatur! Itaque iure cum expedita ut reprehenderit. Quia omnis reiciendis, ullam ex possimus illum esse eaque amet maxime facere quas vel enim assumenda asperiores consequuntur. Obcaecati quidem quasi nemo repellendus.</p><p>Minima commodi facere deserunt veritatis id iure eum harum numquam non alias odit voluptatum neque, rerum cum autem dolores quos officiis officia praesentium? Aut quam facere culpa odit ducimus sint? Reprehenderit dicta hic provident tempore. Dolor veritatis beatae minus maxime praesentium. Excepturi error assumenda, molestias odit est unde autem quod quam nostrum laboriosam exercitationem quae dolore molestiae inventore ut ipsum eligendi quaerat explicabo sit nisi quos. Pariatur veniam consequuntur asperiores, ad a consectetur eius doloremque ipsa porro fugiat molestiae tenetur perspiciatis corporis error magni magnam expedita incidunt reiciendis fugit? Deleniti qui quae consectetur quisquam quo, enim dolore voluptas aut neque eius.</p><p>Recusandae voluptas odio beatae. Obcaecati, placeat! Omnis maxime culpa commodi aliquid, dolorem numquam ducimus. Sunt accusamus autem odio, voluptatem quo soluta, placeat eveniet quae in quidem atque laborum libero, dolorum unde. Autem dolore, et quam qui voluptatem nam mollitia, nostrum quaerat, ratione harum at.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        
    }
}