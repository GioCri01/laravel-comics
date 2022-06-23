<header class="container">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/DC_Comics_logo.svg/2048px-DC_Comics_logo.svg.png" alt="">
      <ul>
          <li >
              <a class="{{ Route::currentRouteName() === 'home'? 'active': '' }}" href="{{ route("home") }}">home</a>
          </li>
          <li >
            <a class="{{ Route::currentRouteName() === 'about'? 'active': '' }}" href="{{ route("about") }}">about</a>
        </li>
        <li >
            <a class="{{ Route::currentRouteName() === 'shop'? 'active': '' }}" href="{{ route("shop") }}">shop</a>
        </li>

      </ul>
  </header>
