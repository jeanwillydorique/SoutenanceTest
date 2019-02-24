{{-- Auteur --}}
<div class="row">
    <div class="col-lg-8 p-r-0 title-margin-right">
        <div class="page-header">
            <div class="page-title">
                <h1>Auteur</h1>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="card nestable-cart">
            <div class="card-title">
                <h4>Rechercher un auteur</h4>
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="tagsAuthor" placeholder="Taper les premières lettres">
                    <div class="input-group-prepend">
                        <div class="input-group-text plus">+</div>
                        <input type="hidden" value="author">
                    </div>
                </div>
                <div class="card-title-right-icon">
                </div>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <!-- /# column -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-title">
                <h4> List </h4>
            </div>
            <div>
            <input type="hidden" value="Author">
            {{-- <div class="formAlpha">
                @include('layouts.alpha')
            </div> --}}
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($authors as $author)
                                @include('layouts.table.items.authors')
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Creator --}}

<div class="row">
    <div class="col-lg-8 p-r-0 title-margin-right">
        <div class="page-header">
            <div class="page-title">
                <h1>Createur</h1>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="card nestable-cart">
            <div class="card-title">
                <h4>Rechercher un éditeur / entreprise</h4>
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="tagsCreator" placeholder="Taper les premières lettres">
                    <div class="input-group-prepend">
                        <div class="input-group-text plus">+</div>
                        <input type="hidden" value="category">
                    </div>
                  </div>
                <div class="card-title-right-icon">
                </div>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <!-- /# column -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-title">
                <h4> List </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($creators as $creator)
                                @include('layouts.table.items.creators')
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Classe --}}

<div class="row">
    <div class="col-lg-8 p-r-0 title-margin-right">
        <div class="page-header">
            <div class="page-title">
                <h1>Classe</h1>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="card nestable-cart">
            <div class="card-title">
                <h4>USA</h4>
                <div class="card-title-right-icon">
                </div>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <!-- /# column -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-title">
                <h4> List </h4>
            </div>
            <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($classes as $classe)
                                    @include('layouts.table.items.classes')
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
</div>

{{-- category --}}

<div class="row">
    <div class="col-lg-8 p-r-0 title-margin-right">
        <div class="page-header">
            <div class="page-title">
                <h1>Categories</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="card nestable-cart">
            <div class="card-title">
                <h4> Rechercher un genre </h4>
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="tagsCategory" placeholder="Taper les premières lettres">
                    <div class="input-group-prepend">
                        <div class="input-group-text plus">+</div>
                        <input type="hidden" value="creator">
                    </div>
                </div>
                <div class="card-title-right-icon">
                </div>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <!-- /# column -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-title">
                <h4> List </h4>
            </div>
            <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    @include('layouts.table.items.categories')
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
</div>