
@foreach ($book as $item)


<form method="post" action="/updatebook">
    @csrf
        <input type="hidden" name="id" value="{{$item->id}}">
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Titre</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" name="title" value="{{$item->title}}">
          </div>
        </div>
        <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Résumé</label>
                <div class="col-sm-10">
                    <textarea class="form-control" value="{{$item->description}}" name="description">{{$item->description}}</textarea>
                    {{-- <input type="text" class="form-control" id="inputEmail3" placeholder="Résumé" name="description"> --}}
                </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Date</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" value="{{$item->date}}" name="date">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Stock</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="inputEmail3" value="{{$item->stock}}" name="stock">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Nombre de pages</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="inputEmail3" value="{{$item->page}}" name="pages">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Image</label>
            <div class="col-sm-10">
                <img src="{{$item->img}}" alt="..." class="img-thumbnail">
                <input type="text" class="form-control" id="inputEmail3" value="{{$item->img}}" name="img">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1" name="imgDefault">
                    <label class="form-check-label" for="gridCheck1">
                      Cocher pour utiliser l'image par défault
                    </label>
                  </div>
            </div>
        </div>
        <fieldset class="form-group">
                <div class="row">
                  <legend class="col-form-label col-sm-2 pt-0">Age</legend>
                    <div class="col-sm-10">
                  @foreach ($classes as $classe)
                        @if ( $item->classe_id === $classe->id)
                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="classe" id="gridRadios1" value="{{$classe->id}}" checked >
                                <label class="form-check-label" for="gridRadios1">
                                  {{$classe->name}}
                                </label>
                        </div>
                        @else
                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="classe" id="gridRadios1" value="{{$classe->id}}" >
                                <label class="form-check-label" for="gridRadios1">
                                  {{$classe->name}}
                                </label>
                        </div>
                        @endif
                  @endforeach
                    </div>
                </div>
        </fieldset>
        <fieldset class="form-group">
            <div class="row">
              <legend class="col-form-label col-sm-2 pt-0">Auteur</legend>
              <div class="col-auto">
                  <label class="sr-only" for="inlineFormInputGroup">Taper les premières lettres</label>
                  <div class="input-group mb-2">
                    <input type="text" class="form-control" id="tagsAuthor" placeholder="Taper les premières lettres">
                    <div class="input-group-prepend">
                        <div class="input-group-text plus">+</div>
                        <input type="hidden" value="author">
                    </div>
                  </div>
              </div>
              <div class="data-check">
                  @foreach ($authors as $author)
                    @foreach ($item->authors as $authorBook)
                        @if ( $author->name === $authorBook->name)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="author[]" id="gridRadios1" value="{{$author->name}}" checked >
                                <label class="form-check-label" for="gridRadios1">{{$author->name}}</label>
                                <form class="d-flex justify-content-center align-item-center" method="post" action="/deleteAuthorBook" id="myform">
                                  @csrf
                                  <input type="hidden" name="author_id" value="{{$author->id}}">
                                  <input type="hidden" name="book_id" value="{{$item->id}}">
                                  <a onclick="document.getElementById('myform').submit()"><small>Supp</small></a>
                                </form>
                            </div>
                        @endif
                     @endforeach
                  @endforeach
              </div>

            </div>
        </fieldset>
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Genre</legend>
                <div class="col-auto">
                    <label class="sr-only" for="inlineFormInputGroup">Taper les premières lettres</label>
                    <div class="input-group mb-2">
                      <input type="text" class="form-control" id="tagsCategory" placeholder="Taper les premières lettres">
                      <div class="input-group-prepend">
                          <div class="input-group-text plus">+</div>
                          <input type="hidden" value="category">
                      </div>
                    </div>
                </div>
                <div class="data-check">
                        @foreach ($categories as $category)
                        @foreach ($item->categories as $categoryBook)
                            @if ( $category->name === $categoryBook->name)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="category[]" id="gridRadios1" value="{{$category->name}}" checked >
                                    <label class="form-check-label" for="gridRadios1">{{$category->name}}</label>
                                </div>
                            @endif
                         @endforeach
                      @endforeach
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Editeur</legend>
                <div class="col-auto">
                    <label class="sr-only" for="inlineFormInputGroup">Taper les premières lettres</label>
                    <div class="input-group mb-2">
                      <input type="text" class="form-control" id="tagsCreator" placeholder="Taper les premières lettres">
                      <div class="input-group-prepend">
                          <div class="input-group-text plus">+</div>
                          <input type="hidden" value="creator">
                      </div>
                    </div>
                </div>
                <div class="data-check">
                        @foreach ($creators as $creator)
                        @foreach ($item->creators as $creatorBook)
                            @if ( $creator->name === $creatorBook->name)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="creator[]" id="gridRadios1" value="{{$creator->name}}" checked >
                                    <label class="form-check-label" for="gridRadios1">{{$creator->name}}</label>
                                </div>
                            @endif
                         @endforeach
                      @endforeach
                </div>
            </div>
        </fieldset>
        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Modifier</button>
          </div>
        </div>
</form>

@endforeach