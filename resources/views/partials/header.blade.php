<header>


<ul id="myLink">
  <li class="{{ Request::routeIs('home') ? 'active' : '' }}">

      <a href="{{ route('home') }}">HOME</a>
  </li>

  <li class="{{ Request::routeIs('paganti.index') ? 'active' : '' }}">
      <a href="{{ route('paganti.index') }}">PAGANTI</a>
  </li>

<li class="{{ Request::routeIs('pagamenti.index') ? 'active' : '' }}">
      <a href="{{ route('pagamenti.index') }}">PAGAMENTI</a>
  </li>

  <li class="{{ Request::routeIs('posts.index') ? 'active' : '' }}">
      <a href="{{ route('posts.index') }}">RECENSIONI</a>
  </li>


</ul>

</header>
