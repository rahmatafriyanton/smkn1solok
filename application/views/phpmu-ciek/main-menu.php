<nav class="navbar navbar-expand-lg navbar-light navbar-custom">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="<?= base_url('template/custom/assets/img/logo.png'); ?>" alt="" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <?php
        $botm = $this->model_utama->mainmenu();
        foreach ($botm->result_array() as $row) {
          $dropdown = $this->model_utama->submenu($row['id_main'])->num_rows();
          $menuLink = preg_match("/^http/", $row['link']) ? $row['link'] : base_url() . $row['link'];

          echo '<li class="nav-item ' . ($dropdown > 0 ? 'dropdown' : '') . '">';
          echo '<a href="' . $menuLink . '" class="nav-link ' . ($dropdown > 0 ? 'dropdown-toggle' : '') . '"';
          if ($dropdown > 0) {
            echo ' data-toggle="dropdown"';
          }
          echo ' role="button" aria-haspopup="true" aria-expanded="false">';
          echo $row['nama_menu'];
          if ($dropdown > 0) {
            echo '<span class="caret"></span>';
          }
          echo '</a>';

          if ($dropdown > 0) {
            echo '<ul class="dropdown-menu">';
            $dropmenu = $this->model_utama->submenu($row['id_main']);
            foreach ($dropmenu->result_array() as $subMenuRow) {
              $dropdown1 = $this->model_utama->submenu1($subMenuRow['id_sub'])->num_rows();
              $subMenuLink = preg_match("/^http/", $subMenuRow['link_sub']) ? $subMenuRow['link_sub'] : base_url() . $subMenuRow['link_sub'];

              echo '<li class="dropdown-submenu">';
              echo '<a class="dropdown-item" href="' . $subMenuLink . '">';
              echo $subMenuRow['nama_sub'];
              echo '</a>';

              if ($dropdown1 > 0) {
                echo '<ul class="dropdown-menu">';
                $dropmenu1 = $this->model_utama->submenu1($subMenuRow['id_sub']);
                foreach ($dropmenu1->result_array() as $subSubMenuRow) {
                  $subSubMenuLink = preg_match("/^http/", $subSubMenuRow['link_sub']) ? $subSubMenuRow['link_sub'] : base_url() . $subSubMenuRow['link_sub'];
                  echo '<li><a href="' . $subSubMenuLink . '">' . $subSubMenuRow['nama_sub'] . '</a></li>';
                }
                echo '</ul>';
              }

              echo '</li>';
            }
            echo '</ul>';
          }

          echo '</li>';
        }
        ?>
      </ul>
      <ul class="navbar-nav ml-auto">
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fa-regular fa-lightbulb"></i>
          </a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link nav-link-search" href="#">
            <i class="fa fa-search navbar-search search-trigger"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script>
  $(document).ready(function() {
    $('.nav-link-search').click(function(e) {
      e.preventDefault()
      $(".search-input").focus()
    })
  });
</script>
