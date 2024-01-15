<div class="sidebar">
    <div class="navigation">
      <ul>
        <li>
          <a href="#">
          <span class="icon"></span>
          <span class="title"><h2>Bakerlistik</h2></span>
        </a>
        </li>
        <li>
          <a href="{{ route('index') }}">
          <span class="icon"><i class="bi bi-grid-fill"></i></span>
          <span class="title">Dashboard</span>
        </a>
        </li>
        <li>
          <a href="{{ route('product') }}">
          <span class="icon"><i class="bi bi-cake2-fill"></i></span>
          <span class="title">Products</span>
        </a>
        </li>
        <li>
          <a href="{{ route('orders') }}">
          <span class="icon"><i class="fa-solid fa-cart-shopping"></i></span>
          <span class="title">Pesanan</span>
        </a>
        </li>
        <li>
          <a href="{{ route('feedback') }}">
          <span class="icon"><i class="fa-solid fa-message"></i></span>
          <span class="title">Feedback</span>
        </a>
        </li>
        <li>
          <a href="">
          <span class="icon"><i class="fa-solid fa-right-from-bracket"></i></span>
          <span class="title">Sign Out</span>
        </a>
        </li>
      </ul>
    </div>

    <div class="main">
      <div class="topbar">
        <div class="toggle" onclick="toggleMenu();"></div>
        <div class="user">
          <img src="{{ Vite::asset('resources/images/admin.jpg') }}">
        </div>
      </div>
