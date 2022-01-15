<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(News $news)
    {
        //вывести избранные новости на Главную страницу
        return view('home', ['news' => $news->getFavorites()]);
    }

    public function allNews(News $news)
    {
        //вывести все новости на страницу 'все новости'
        return view('allNews', ['news' => $news->getAll()]);
    }

    public function showNews(News $news, $id)
    {
        //показать Новость
        return view('cardNews', ['similar' => ($news->getSimilar($id)),
            'article' => ($news->getArticle($id)),
            'flag' => $news->checkFavoriteNews($id)
        ]);
    }

    public function article(News $news, $id)
    {
        return view('cardNews', ['article' => ($news->getArticle($id))]);
    }

    public function search(News $news,Request $request)
    {
        //поиск
        $findNews = $news->searchNews($request['search_value']);

        return view('cardNews', ['similar' => ($news->getSimilar($findNews[0]['id'])),
            'article' => ($news->getArticle($findNews[0]['id'])),
            'flag' => $news->checkFavoriteNews($findNews[0]['id'])
       ]);
    }

    public function addToFavorite(Request $request, News $news)
    {
        //добавить в избранное
        $id = ($request->only(['id'])['id']);
        $news->addFavorite($id);
        return redirect()->back();
    }


}
