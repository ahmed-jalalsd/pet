<header class="nav-side-menu">
  <!-- <div class="brand">
    <img src="/icons/logo_menu_white.svg" alt="">
  </div> -->
  <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  <div class="menu-list">
    <ul id="menu-content" class="menu-content collapse out">
      <li>
        <a href="#">
        <i class="fa fa-dashboard fa-lg"></i>
        Dashboard
        </a>
      </li>

      <li  data-toggle="collapse" data-target="#media" class="collapsed">
        <a href="#"><i class="fa fa-gift fa-lg"></i> Manage Media<span class="arrow"></span></a>
      </li>
      <ul class="sub-menu collapse" id="media">
          <li ><a href="{{ route('galleries.create') }}">Add New Image</a></li>
          <li><a href="{{ route('galleries.index') }}">Library</a></li>
      </ul>

      <li data-toggle="collapse" data-target="#product" class="collapsed">
        <a href="#"><i class="fa fa-globe fa-lg"></i> Manage Products <span class="arrow"></span></a>
      </li>
      <ul class="sub-menu collapse" id="product">
        <li><a href="{{ route('products.create') }}">Add New Product</a></li>
        <li><a href="{{ route('products.index') }}">Products</a></li>
      </ul>

      <li data-toggle="collapse" data-target="#categories" class="collapsed">
        <a href="#"><i class="fa fa-car fa-lg"></i> Manage Categories <span class="arrow"></span></a>
      </li>
      <ul class="sub-menu collapse" id="categories">
        <li><a href="{{ route('categories.create') }}">Add New Category</a></li>
        <li><a href="{{ route('categories.index') }}">Categories</a></li>
      </ul>

      <li data-toggle="collapse" data-target="#attribute" class="collapsed">
        <a href="#"><i class="fa fa-car fa-lg"></i> Manage Attribute <span class="arrow"></span></a>
      </li>
      <ul class="sub-menu collapse" id="attribute">
        <li><a href="{{ route('attributes.create') }}">Add New Attribute</a></li>
        <li><a href="{{ route('attributes.index') }}">Attributes</a></li>
      </ul>

      <li data-toggle="collapse" data-target="#promotion" class="collapsed">
        <a href="#"><i class="fa fa-car fa-lg"></i> Manage promotion products <span class="arrow"></span></a>
      </li>
      <ul class="sub-menu collapse" id="promotion">
        <li><a href="{{ route('newProducts.create') }}">Add New Promotion</a></li>
        <li><a href="{{ route('newProducts.index') }}">All Promotion</a></li>
      </ul>
    </ul>
  </div>

</header>
