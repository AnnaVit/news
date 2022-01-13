<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FirstMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //создать таблицу с городами
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('city', 255)->unique();
            $table->softDeletes();
            $table->timestamps();
        });


        //добавить поле с городом пользователя
        Schema::table('users', function (Blueprint $table) {
            $table->bigInteger('city_id')->unsigned();;
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('no action');
        });

        //добавить таблицу с новостями
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('heading', 255)->unique();
            $table->string('short_description', 500);
            $table->text('text')->nullable();
            $table->string('photo', 255)->nullable();
            $table->bigInteger('city_id')->unsigned();
            $table->tinyInteger('favorites_news');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('no action');
            $table->softDeletes();
            $table->timestamps();
        });

        //добавить pivot-таблицу users_favorite_news
        Schema::create('users_favorite_news', function (Blueprint $table)
        {
            $table->bigInteger('users_id')->unsigned();
            $table->bigInteger('news_id')->unsigned();


            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('news_id')->references('id')->on('news');

        });

        //добавить таблицу c рекомендованными новостями similar_news
        Schema::create('similar_news', function (Blueprint $table)
        {
            $table->bigInteger('news_id')->unsigned();
            $table->bigInteger('similar_news_id')->unsigned();

            $table->foreign('news_id')->references('id')->on('news');
            $table->foreign('similar_news_id')->references('id')->on('news');

        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //удалить внешние ключи из similar_news
        Schema::table('similar_news', function (Blueprint $table) {
            $table->dropForeign(['news_id']);
            $table->dropForeign(['similar_news_id']);
        });

        //удалить таблицу similar_news
        Schema::dropIfExists('similar_news');


        //удалить внешние ключи из таблицы users_favorite_news
        Schema::table('users_favorite_news', function (Blueprint $table) {
            $table->dropForeign(['users_id']);
            $table->dropForeign(['news_id']);
        });

        //удалить таблицу users_favorite_news
        Schema::dropIfExists('users_favorite_news');

        //удалить внешний ключ из users
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['city_id']);

        });

        //удалить внешний ключ из 'news'
        Schema::table('news', function (Blueprint $table) {
            $table->dropForeign(['city_id']);

        });

        //удалить таблицу с городами
        Schema::dropIfExists('cities');

        //удаляем столбец с городом у пользователя
        Schema::table('users', function (Blueprint $table) {
           // $table->dropForeign(['city_id']);
            $table->dropColumn('city_id');

        });

        //удалить таблицу news
        Schema::dropIfExists('news');


    }
}
