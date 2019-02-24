

    @include('layouts.header')

                    @if ( $role === 'admin' )
                        @include('layouts.sidebar.admin')
                    @else
                        @include('layouts.sidebar.employe')
                    @endif
                    @include('layouts.template.nav')
                    <div class="content-wrap">
                        <div class="main">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-8 p-r-0 title-margin-right">
                                        <div class="page-header">
                                            <div class="page-title">
                                                <h1>Hello, <span>Welcome Here</span></h1>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /# column -->
                                    @include('layouts.template.pageHeader')
                                </div>

                                            @if ( $page === 'user' )
                                                @include('layouts.template.table')
                                            @elseif ( $page === 'oneBook' )
                                                @include('layouts.card.book')
                                            @elseif ( $page === 'oneGame' )
                                                @include('layouts.card.game')
                                            @elseif ( $page === 'updateBook' )
                                                @include('layouts.update.book')
                                            @elseif ( $page === 'book' )
                                                @include('layouts.template.book')
                                            @elseif ( $page === 'game' )
                                                @include('layouts.template.game')
                                            @elseif ( $page === 'createuser' )
                                                @include('layouts.create.user')
                                            @elseif ( $page === 'createbook' )
                                                @include('layouts.create.book')
                                            @elseif ( $page === 'allitems' )
                                                @if ( $role === 'admin' )
                                                    @include('layouts.template.allitems')
                                                        @else
                                                    @include('layouts.sidebar.employe')
                                                @endif
                                            @else
                                                @if ( $role === 'admin' )
                                                    @include('layouts.home.admin')
                                                @else
                                                    @include('layouts.home.employe')
                                                @endif
                                            @endif
                            </div>
                        </div>
                    </div>
    
    @include('layouts.footer')








{{-- old version
    @include('layouts.header')
@include('layouts.nav')

<main>
       <div class="row homePageTemplateRow">
            <div class="col-2 col1">
                {{-- si admin = admin sidebar si employé = employé sidebar.  /
                @if ( $role === 'admin' )
                    @include('layouts.sidebar.admin')
                @else
                    @include('layouts.sidebar.employe')
                @endif
            </div>
            <div class="col-10 col2 d-flex justify-content-center flex-column mt-4">
                @if ( $page === 'user' )
                    @include('layouts.template.table')
                @elseif ( $page === 'oneBook' )
                    @include('layouts.card.book')
                @elseif ( $page === 'updateBook' )
                    @include('layouts.update.book')
                @elseif ( $page === 'book' )
                    @include('layouts.template.book')
                @elseif ( $page === 'createuser' )
                    @include('layouts.create.user')
                @elseif ( $page === 'createbook' )
                    @include('layouts.create.book')
                @else
                    @if ( $role === 'admin' )
                        @include('layouts.home.admin')
                    @else
                        @include('layouts.home.employe')
                    @endif
                @endif
            </div>
       </div>
</main>

@include('layouts.footer') --}}