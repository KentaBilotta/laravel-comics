<nav>
    <ul>
      @foreach ($menu as $item)
        <li>{{ $item['label'] }}</li>
      @endforeach
    </ul>
</nav>
