<?php

use Illuminate\Database\Seeder;

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
        
        $articles = [];
        $now = \Carbon\Carbon::now();
        
        for ($i = 1; $i <= 10; $i++){
            $articles[] = [
                'title' => 'タイトル'. $i,
                'body' => '内容'. $i,
            ];
        }
        foreach ($articles as $article){
            $article['published_at'] = $now;
            $article['created_at'] = $now;
            $article['updated_at'] = $now;
            DB::table('articles')->insert($article);
        }
    }
}
