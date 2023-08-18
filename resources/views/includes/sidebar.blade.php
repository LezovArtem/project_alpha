<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
            <a href="{{route('posts.create')}}" class="nav-link">
                <i class="nav-icon far fa-solid fa-plus"></i>
                <p>
                    Create a post
                </p>
            </a>
        </li>

        {{--Categories treeview--}}
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Categories
                    <i class="right fas fa-angle-right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('posts.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>All categories</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('posts.categories.ut')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Ut</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('posts.categories.placeat')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Placeat</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('posts.categories.vel')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Vel</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('posts.categories.qui')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Qui</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('posts.categories.nisi')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Nisi</p>
                    </a>
                </li>
            </ul>
        </li>

        {{--Tags treeview--}}
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Tags
                    <i class="right fas fa-angle-right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('posts.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>All tags</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('posts.tags.voluptatem')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Voluptatem</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('posts.tags.assumenda')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Assumenda</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('posts.tags.non')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Non</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('posts.tags.aspernatur')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Aspernatur</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('posts.tags.velit')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Velit</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('posts.tags.idax')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Idax</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('posts.tags.vero')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Vero</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('posts.tags.et')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Et</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('posts.tags.eum')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Eum</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('posts.tags.argent')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Argent</p>
                    </a>
                </li>
            </ul>
        </li>


        @can('view', auth()->user())
        <li class="nav-item">
            <a href="{{route('admin.posts.index')}}" class="nav-link">
                <i class="nav-icon far fa-regular fa-user"></i>
                <p>
                    Admin Panel
                </p>
            </a>
        </li>
        @endcan


</nav>
