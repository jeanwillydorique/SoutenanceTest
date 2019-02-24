
<form method="post" action="/createbook">
    @csrf
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Titre</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Titre" name="title">
          </div>
        </div>
        <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Résumé</label>
                <div class="col-sm-10">
                    <textarea class="form-control" placeholder="" name="description">
                    </textarea>
                    {{-- <input type="text" class="form-control" id="inputEmail3" placeholder="Résumé" name="description"> --}}
                </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Date</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" placeholder="Format 1-Jan-1990 " name="date">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Stock</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="inputEmail3" placeholder="100" name="stock">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Nombre de pages</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="inputEmail3" placeholder="334" name="pages">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Image</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" placeholder="copier-coller le lien" name="img">
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
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="classe" id="gridRadios1" value="{{$classe->id}}" >
                          <label class="form-check-label" for="gridRadios1">
                            {{$classe->name}}
                          </label>
                        </div>
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
              </div>
                {{-- <div class="col-sm-10">
              @foreach ($authors as $author)
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="author[]" id="gridRadios1" value="{{$author->id}}">
                      <label class="form-check-label" for="gridRadios1">
                        {{$author->name}}
                      </label>
                    </div>
              @endforeach
                </div> --}}
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
                </div>
            </div>
        </fieldset>
        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Créer</button>
          </div>
        </div>
</form>