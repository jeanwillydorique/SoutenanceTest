

<div class="card-columns mt-4">
    @foreach ($books as $book)

        <div class="card">
            <a href="/book/{{$book->id}}"><img class="card-img-top" src="{{$book->img}}" alt="Card image cap" ></a>
            <div class="card-body">
                <h5 class="card-title">{{$book->title}}</h5>
                {{-- <div class="card-text-description"><p class="card-text-description">{{$book->description}}</p></div> --}}
                <p class="card-text">
                <small class="text-muted"> Auteur :
                    @foreach ($book->authors as $author)
                            {{$author->name}}, 
                    @endforeach
                </small>
                </p>
                <p class="card-text">
                        <small class="text-muted"> Edition :
                            @foreach ($book->creators as $creator)
                                    {{$creator->name}}, 
                            @endforeach
                        </small>
                </p>
                <p class="card-text">
                        <small class="text-muted"> Genre :
                            @foreach ($book->categories as $category)
                                    {{$category->name}}, 
                            @endforeach
                        </small>
                </p>
                {{-- <p class="card-text"><small class="text-muted"> Age : {{$book->classe->name}}</small></p>
                <p class="card-text"><small class="text-muted"> Date : {{$book->date}}</small></p>
                <p class="card-text"><small class="text-muted"> Pages : {{$book->page}}</small></p>
                <p class="card-text"><small class="text-muted"> Pages : {{$book->stock}}</small></p> --}}
            </div>
          </div>
    @endforeach

</div>