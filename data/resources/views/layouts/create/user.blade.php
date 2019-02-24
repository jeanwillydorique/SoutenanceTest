
<form method="post" action="/createuser">
    @csrf
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Nom</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Nom" name="name">
          </div>
        </div>
        <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Email" name="mail">
                </div>
        </div>
        <fieldset class="form-group">
                <div class="row">
                  <legend class="col-form-label col-sm-2 pt-0">Job</legend>
                    <div class="col-sm-10">
                  @foreach ($jobs as $job)
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="job" id="gridRadios1" value="{{$job->id}}" checked>
                          <label class="form-check-label" for="gridRadios1">
                            {{$job->name}}
                          </label>
                        </div>
                  @endforeach
                    </div>
                </div>
              </fieldset>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password" value="{{$password}}">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-2">Checkbox</div>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck1" name="role">
              <label class="form-check-label" for="gridCheck1">
                Cocher si l'utisateur sera admin
              </label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Créer</button>
          </div>
        </div>
</form>