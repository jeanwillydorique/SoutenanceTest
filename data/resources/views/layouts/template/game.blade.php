

<div class="card-columns mt-4">
    @foreach ($games as $game)

        <div class="card">
            <a href="/game/{{$game->id}}">{{$game->name}}</a>
            <div class="card-body">
                <h5 class="card-title">{{$game->name}}</h5>
                {{-- <div class="card-text-description"><p class="card-text-description">{{$book->description}}</p></div> --}}
                <p class="card-text">
                <small class="text-muted"> Createur :
                    @foreach ($game->creators as $creator)
                            {{$creator->name}}, 
                    @endforeach
                </small>
                </p>
            </div>
          </div>
    @endforeach

</div>