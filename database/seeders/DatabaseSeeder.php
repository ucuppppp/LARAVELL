<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // User::create([
        //     'name' => 'Dorrit Who Cares?',
        //     'email' => 'bebass@gmail.com',
        //     'password' => bcrypt('12345')

        // ]);
        // User::create([
        //     'name' => 'YorYoraa',
        //     'email' => 'yoraaaa@gmail.com',
        //     'password' => bcrypt('12345')

        // ]);

        User::factory(5)->create();


        Category::create([
            'name' => 'Gaming',
            'slug' => 'gaming'
        ]);
        Category::create([
            'name' => 'Food',
            'slug' => 'food'
        ]);
        Category::create([
            'name' => 'Travel',
            'slug' => 'travel'
        ]);

        Post::factory(25)->create();

        // Post::create([
        //     'title' => 'Pentol Mercon',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'pentol-mercon',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae beatae veritatis provident quae aspernatur. Aspernatur sit quaerat sunt ea commodi animi voluptatum molestiae qui dolorum, ipsam accusantium natus quos doloribus totam, eum aliquid explicabo voluptates! Beatae corporis, est quod reprehenderit deleniti provident modi sunt distinctio iste exercitationem voluptatum autem voluptatibus!',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid voluptatem sapiente ipsam ratione numquam soluta! Commodi enim quas eligendi dicta quae at natus aliquid iusto accusantium, obcaecati asperiores aliquam atque debitis iure quam in incidunt? Maiores eligendi eos, provident dolore voluptas nisi dicta tempora animi neque aspernatur tenetur vero fugiat optio facere.</p><p> At, iusto nesciunt beatae totam possimus est accusantium. Iusto adipisci commodi mollitia incidunt obcaecati quidem tempore libero temporibus laboriosam fugit nam beatae, perspiciatis assumenda magni, nulla veritatis neque, nisi repellendus eos nostrum. Inventore nemo, dolor dolore commodi assumenda labore excepturi quisquam impedit, deserunt ducimus quia ex ut totam.</p>'

        // ]);

        // Post::create([
        //     'title' => 'Laut Merah',
        //     'category_id' => 3,
        //     'user_id' => 2,
        //     'slug' => 'laut-merah',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae beatae veritatis provident quae aspernatur. Aspernatur sit quaerat sunt ea commodi animi voluptatum molestiae qui dolorum, ipsam accusantium natus quos doloribus totam, eum aliquid explicabo voluptates! Beatae corporis, est quod reprehenderit deleniti provident modi sunt distinctio iste exercitationem voluptatum autem voluptatibus!',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid voluptatem sapiente ipsam ratione numquam soluta! Commodi enim quas eligendi dicta quae at natus aliquid iusto accusantium, obcaecati asperiores aliquam atque debitis iure quam in incidunt? Maiores eligendi eos, provident dolore voluptas nisi dicta tempora animi neque aspernatur tenetur vero fugiat optio facere.</p><p> At, iusto nesciunt beatae totam possimus est accusantium. Iusto adipisci commodi mollitia incidunt obcaecati quidem tempore libero temporibus laboriosam fugit nam beatae, perspiciatis assumenda magni, nulla veritatis neque, nisi repellendus eos nostrum. Inventore nemo, dolor dolore commodi assumenda labore excepturi quisquam impedit, deserunt ducimus quia ex ut totam.</p>'

        // ]);
        // Post::create([
        //     'title' => 'God Of War',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'god-of-war',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae beatae veritatis provident quae aspernatur. Aspernatur sit quaerat sunt ea commodi animi voluptatum molestiae qui dolorum, ipsam accusantium natus quos doloribus totam, eum aliquid explicabo voluptates! Beatae corporis, est quod reprehenderit deleniti provident modi sunt distinctio iste exercitationem voluptatum autem voluptatibus!',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid voluptatem sapiente ipsam ratione numquam soluta! Commodi enim quas eligendi dicta quae at natus aliquid iusto accusantium, obcaecati asperiores aliquam atque debitis iure quam in incidunt? Maiores eligendi eos, provident dolore voluptas nisi dicta tempora animi neque aspernatur tenetur vero fugiat optio facere.</p><p> At, iusto nesciunt beatae totam possimus est accusantium. Iusto adipisci commodi mollitia incidunt obcaecati quidem tempore libero temporibus laboriosam fugit nam beatae, perspiciatis assumenda magni, nulla veritatis neque, nisi repellendus eos nostrum. Inventore nemo, dolor dolore commodi assumenda labore excepturi quisquam impedit, deserunt ducimus quia ex ut totam.</p>'

        // ]);
        // Post::create([
        //     'title' => 'Red Dead Redemption 2',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'red-dead-redemption-2',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae beatae veritatis provident quae aspernatur. Aspernatur sit quaerat sunt ea commodi animi voluptatum molestiae qui dolorum, ipsam accusantium natus quos doloribus totam, eum aliquid explicabo voluptates! Beatae corporis, est quod reprehenderit deleniti provident modi sunt distinctio iste exercitationem voluptatum autem voluptatibus!',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid voluptatem sapiente ipsam ratione numquam soluta! Commodi enim quas eligendi dicta quae at natus aliquid iusto accusantium, obcaecati asperiores aliquam atque debitis iure quam in incidunt? Maiores eligendi eos, provident dolore voluptas nisi dicta tempora animi neque aspernatur tenetur vero fugiat optio facere.</p><p> At, iusto nesciunt beatae totam possimus est accusantium. Iusto adipisci commodi mollitia incidunt obcaecati quidem tempore libero temporibus laboriosam fugit nam beatae, perspiciatis assumenda magni, nulla veritatis neque, nisi repellendus eos nostrum. Inventore nemo, dolor dolore commodi assumenda labore excepturi quisquam impedit, deserunt ducimus quia ex ut totam.</p>'

        // ]);
    }
}
