@forelse ($news as $item)
    @php
    //dd($item['id']);
       $url = route('show::id', ['id' => $item['id']]);

    @endphp
    <div class="news_block">
        <div class="row justify-content-center small-news">
            <div class="content small-content">
                <div class="card" style="width: 18rem;">
                    <img src="{{$item['photo']}}" class="card-img-top" alt="...">
                    <div class="card-body ">
                        <h5 class="card-title">{{$item['heading']}}</h5>
                            <div class="restrict">
                            <p class="card-text">{{$item['short_description']}}</p>
                            </div>

                        <a href="{{$url}}" class="btn btn-primary">Прочитать</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
        @empty
    Новостей нет
@endforelse
