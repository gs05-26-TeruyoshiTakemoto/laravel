<?php // database/seeds/DatabaseSeeder.php
 
use App\User;
use App\Article;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
 
class DatabaseSeeder extends Seeder
{
 
    public function run()
    {
        Model::unguard();

        $this->call('UsersTableSeeder');
        $this->call('ArticlesTableSeeder');

        Model::reguard();
    }
}

class UsersTableSeeder extends Seeder
{
 
    public function run()
    {
        DB::table('users')->delete();
 
        User::create([
            'name' => 'root',
            'email' => 'root@sample.com',
            'password' => bcrypt('password')
        ]);
    }
}

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('articles')->delete();
        // 
        // for ($i = 0; $i < 10; $i++) {
        //     \App\Article::create([
        //         'title' => 'タイトル'. $i,
        //         'body' => '内容'. $i,
        //         'published_at' => Carbon::today()
        //     ]);
        // }
        
        $now = \Carbon\Carbon::now();
        $user = User::all()->first();
        
        for ($i = 1; $i <= 10; $i++){
            $article = new Article([
                'title' => 'タイトル'. $i,
                'body' => '内容'. $i,
                'published_at' => Carbon::now(),
            ]);
            $user->articles()->save($article);
        }
    }
}

