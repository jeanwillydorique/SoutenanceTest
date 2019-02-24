
<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <div class="logo"><a href="index.html"><!-- <img src="assets/images/logo.png" alt="" /> --><span>Focus</span></a></div>
            <ul>
                <li class="label">Main</li>
                <li class="active"><a class="sidebar-sub-toggle"><i class="ti-home"></i> Employes <span class="badge badge-primary">2</span> <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="/allusers">Tous les Utilisateurs</a></li>
                        <li><a href="/createuser">Créer un utilisateur</a></li>       
                    </ul>
                </li>
                <li class="active"><a class="sidebar-sub-toggle"><i class="ti-home"></i> Livres <span class="badge badge-primary">2</span> <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="/allbooks">Tous les livres</a></li>
                        <li><a href="/createbook">Créer un livre</a></li>       
                    </ul>
                </li>
                <li class="active"><a class="sidebar-sub-toggle"><i class="ti-home"></i> Jeux <span class="badge badge-primary">2</span> <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="/allgames">Tous les jeux</a></li>
                        <li><a href="/creategames">Créer un jeux</a></li>       
                    </ul>
                </li>
                <li><a href="/allitems" ><i class="ti-close"></i> Items </a></li>
                <li><a href="/allparams" ><i class="ti-close"></i> Parametres </a></li>
                <li><a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    <i class="ti-close"></i> {{ __('Logout') }} </a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                    </form>
            </ul>
        </div>
    </div>
</div>






