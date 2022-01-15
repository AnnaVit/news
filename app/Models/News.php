<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;

    protected $fillable = [

        'id',
        'heading',
        'short_description',
        'text',
        'photo',
        'favorites_news',
        'cities_id'
    ];

    public function city()
    {
        //у одной новости один город
        return $this->belongsTo(City::class);//у одной новости один город
    }

    public function users()
    {
        //у многих пользователей много любимых новостей
        return $this->belongsToMany(User::class, 'users_favorite_news', 'news_id');
    }

    public function similarNews()
    {
        //многие ко многим
        return $this->belongsToMany(News::class, 'similar_news', 'similar_news_id');
    }

    public function getAll()
    {
        //вывести все новости
        return $this::query()
            ->orderBy('updated_at', 'desc')
            ->get();
            //->paginate(4);
    }

    public function getFavorites()
    {
        //вывести избранные новости
        $findNews =  DB::table('users_favorite_news')
            ->where(['users_id' => 1])
            ->get()->unique()->pluck('news_id');

        return $this::query()
           ->whereIn('id', $findNews)
            ->orderBy('updated_at', 'desc')
            ->paginate(4);
    }

    public function getGeneral()
    {
        //вывести общие новости
        return $this::query()
            ->where('favorites_news', 1)
            ->orderBy('updated_at', 'desc')
            ->paginate(4);
    }

    public function getArticle($id)
    {
        //найти статью
        return $this::find($id);
    }

    public function getSimilar($id)
    {
        // вывести похожие новости
        $news = News::find($id);
        return $news->similarNews()->get();

    }

    public function addFavorite($NewsId){
        //Добавить в избранное
        DB::table('users_favorite_news')->insert([
            'users_id' => 1,
            'news_id' => $NewsId
        ]);
    }

    public function searchNews($find){
        //найти новость
        return News::where('heading', 'LIKE', '%' . $find . '%')->get();
    }

    public function checkFavoriteNews($newsId){
        //проверить, есть ли новость в избранном
        return
            DB::table('users_favorite_news')
            ->where([
                ['users_id', '=', 1],
                ['news_id', '=', $newsId]
            ])->get()->isEmpty();

    }


}
