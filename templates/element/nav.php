<?php
$c_name = $this->request->getParam('controller');
$a_name = $this->request->getParam('action');

// echo $a_name;
// exit;
?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Logo</a>

  <!-- Links -->
  <ul class="navbar-nav">

    <?php foreach ($menus as $key => $menu) : ?>

      <?php if (empty($menu->submenus)) : ?>
        <li class="nav-item">
          <a class="nav-link" href="#"><?= $menu->name; ?></a>
        </li>
      <?php else : ?>

        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            <?= $menu->name; ?>
          </a>
          <div class="dropdown-menu">
            <?php foreach ($menu->submenus as $key => $submenu) : ?>
              <a class="dropdown-item" href="#"><?= $submenu->name ?></a>
            <?php endforeach; ?>
          </div>
        </li>

      <?php endif; ?>

    <?php endforeach; ?>

  </ul>
</nav>


<!-- <nav class="navbar navbar-expand-lg navbar-light ">
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav mx-auto">

    <li class=<?= $a_name == 'home' ? 'bg-warning' : '' ?>>
        <a class="nav-link" href=<?= $this->Url->build(['controller' => 'blogs', 'action' => 'home']); ?>>Home</a>
    </li>

    <li class=<?= $a_name == 'about' ? 'bg-warning' : '' ?>>
        <a class="nav-link" href=<?= $this->Url->build(['controller' => 'blogs', 'action' => 'about']); ?>>About</a>
    </li>
    <li class=<?= $a_name == 'contact' ? 'bg-warning' : '' ?>>
        <a class="nav-link" href=<?= $this->Url->build(['controller' => 'blogs', 'action' => 'contact']); ?>>Contact</a>
    </li>
</ul>
</div>

</nav>  -->