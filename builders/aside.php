<div class="container__aside">
  <div class="sidebar "> 
    <ul class="nav-links">
    <?php foreach ( $pages as $page_link => $page ) { ?>
      <?php
        $sub_pages = isset($page['sub_pages']) && is_array($page['sub_pages']) ? $page['sub_pages'] : [];
      ?>
        <li>
          <div class="icon-link">
            <a href="#">
              <i class='bx bx-collection' ></i>

              <a class="link_name" href='?page=<?php echo $page_link ?>'>
                <?php echo $page['page_data'] ?>
              </a>
            </a>
            <i class='bx bxs-chevron-down arrow' ></i>
          </div>
          <?php if ( count($sub_pages) ) { ?>
          <ul class="sub-menu">
            <?php foreach ( $sub_pages as $sub_page_link => $sub_page ) { ?>
            <li>
              <a href='?page=<?php echo $sub_page_link ?>'>
                <?php echo $sub_page['page_data'] ?>
              </a>
            </li>
            <?php } ?>
          </ul>
          <?php } ?>
        </li>
        <?php } ?>
    </ul>
  </div>
</div>
