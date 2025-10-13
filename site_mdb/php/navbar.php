<nav class="navbar navbar-expand-lg bg-dark fixed-top" data-mdb-theme="dark">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      data-mdb-collapse-init
      class="navbar-toggler"
      type="button"
      data-mdb-target="#navbarRightAlignExample"
      aria-controls="navbarRightAlignExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarRightAlignExample">
      <!-- Left links -->
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./mainPage.php">Home</a>
        </li>
        <?php if ($role == 'admin'): ?>
        <li class="nav-item">
          <a class="nav-link" href="#">Gerenciar Alunos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./manageGames.php">Gerenciar Jogos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Gerenciar Escolas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Gerenciar Categorias</a>
        </li>
        <!-- Navbar dropdown -->
        <li class="nav-item dropdown">
          <a
            data-mdb-dropdown-init
            class="nav-link dropdown-toggle"
            href="#"
            id="navbarDropdown"
            role="button"
            aria-expanded="false"
          >
            Meu Perfil
          </a>
          <!-- Dropdown menu -->
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <a class="dropdown-item" href="./profile.php">Ver Perfil</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Configurações</a>
            </li>
            <li>
              <a class="dropdown-item" href="mainPage.php?logout=1">Sair</a>
            </li>
          </ul>
        </li>
        <?php elseif ($role == 'professor'): ?>
        <li class="nav-item">
          <a class="nav-link" href="#">Gerenciar Alunos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./manageGames.php">Gerenciar Jogos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Gerenciar Escola</a>
        </li>
        <!-- Navbar dropdown -->
        <li class="nav-item dropdown">
          <a
            data-mdb-dropdown-init
            class="nav-link dropdown-toggle"
            href="#"
            id="navbarDropdown"
            role="button"
            aria-expanded="false"
          >
            Meu Perfil
          </a>
          <!-- Dropdown menu -->
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <a class="dropdown-item" href="./profile.php">Ver Perfil</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Configurações</a>
            </li>
            <li>
              <a class="dropdown-item" href="mainPage.php?logout=1">Sair</a>
            </li>
          </ul>
        </li>
        <?php elseif ($role == 'aluno'): ?>
        <li class="nav-item">
          <a class="nav-link" href="./manageGames.php">Gerenciar Jogos</a>
        </li>
        <!-- Navbar dropdown -->
        <li class="nav-item dropdown">
          <a
            data-mdb-dropdown-init
            class="nav-link dropdown-toggle"
            href="#"
            id="navbarDropdown"
            role="button"
            aria-expanded="false"
          >
            Meu Perfil
          </a>
          <!-- Dropdown menu -->
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <a class="dropdown-item" href="./profile.php">Ver Perfil</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Configurações</a>
            </li>
            <li>
              <a class="dropdown-item" href="mainPage.php?logout=1">Sair</a>
            </li>
          </ul>
        </li>
        <?php else: ?>
        <!-- Navbar dropdown -->
        <li class="nav-item dropdown">
          <a
            data-mdb-dropdown-init
            class="nav-link dropdown-toggle"
            href="#"
            id="navbarDropdown"
            role="button"
            aria-expanded="false"
          >
            Meu Perfil
          </a>
          <!-- Dropdown menu -->
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <a class="dropdown-item" href="./profile.php">Ver Perfil</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Configurações</a>
            </li>
            <li>
              <a class="dropdown-item" href="mainPage.php?logout=1">Sair</a>
            </li>
          </ul>
        </li>
        <?php endif; ?>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->