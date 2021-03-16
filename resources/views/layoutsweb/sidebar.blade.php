<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image">
                    <img src="images/faces/astronaut.png" alt="image" />
                </div>
                <div class="profile-name">
                    <p class="name">
                        Bienvenido Lautaro
                    </p>
                    <p class="designation">
                        Administrador
                    </p>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link bold" href="{{ route('acuerdo-negocio') }}">
                <i class="fas fa-briefcase menu-icon"></i>
                <span class="menu-title">Acuerdo del Negocio</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/widgets.html">
                <i class="fas fa-cogs menu-icon"></i>
                <span class="menu-title">Plan de Marketing</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false"
                aria-controls="page-layouts">
                <i class="fas fa-check-double menu-icon"></i>
                <span class="menu-title">Aprobaciones</span>
            </a>

        </li>

    </ul>
</nav>
