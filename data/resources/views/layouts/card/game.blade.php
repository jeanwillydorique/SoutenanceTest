


@foreach ($game as $item)
    
<div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <a href="/updateGame/{{$item->id}}"><button class="btn btn-success" type="submit"><i class="fas fa-edit"></i></a>
            <form class="d-flex justify-content-center align-item-center" method="post" action="/deletebook">
                @csrf
                <input type="hidden" name="id" value="{{$item->id}}">
                <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
            </form>
          </div>
          <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{$item->name}}</h5>
                <p class="card-text-description">{{$item->description}}</p>
                <p class="card-text">
                    <small class="text-muted"> Edition :
                                    @foreach ($item->creators as $creator)
                                            {{$creator->name}}, 
                                    @endforeach
                    </small>
                </p>
                <p class="card-text"><small class="text-muted"> Age : {{$item->classe->name}}</small></p>
            </div>
          </div>
        </div>
</div>

@endforeach