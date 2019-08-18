<div class="sidebar" data-color="purple" data-background-color="black" data-image="/assets/img/sidebar-2.jpg">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
     -->
      <div class="logo">
        <a href="/admin/home" class="simple-text logo-normal">
          Creative Tim
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item {{ is_active('home') }}">
            <a class="nav-link" href="/admin/home">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item {{ is_active('users') }}  ">
            <a class="nav-link" href="/admin/users">
              <i class="material-icons">person</i>
              <p>Users</p>
            </a>
          </li>
          <!-- your sidebar here -->
          <li class="nav-item {{ is_active('categories') }}  ">
            <a class="nav-link" href="/admin/categories">
              <i class="material-icons">bubble_chart</i>
              <p>Categories</p>
            </a>
          </li>
          <!-- your sidebar here -->
          <li class="nav-item {{ is_active('skills') }}  ">
            <a class="nav-link" href="/admin/skills">
              <i class="material-icons">content_paste</i>
              <p>Skills</p>
            </a>
          </li>
          <!-- your sidebar here -->
          <li class="nav-item {{ is_active('tags') }}  ">
            <a class="nav-link" href="/admin/tags">
              <i class="material-icons">content_paste</i>
              <p>Tags</p>
            </a>
          </li>
          <!-- your sidebar here -->
          <li class="nav-item {{ is_active('pages') }}  ">
            <a class="nav-link" href="/admin/pages">
              <i class="material-icons">content_paste</i>
              <p>Pages</p>
            </a>
          </li>
          <!-- your sidebar here -->
          <li class="nav-item {{ is_active('videos') }}  ">
            <a class="nav-link" href="/admin/videos">
              <i class="material-icons">content_paste</i>
              <p>Videos</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
