<ul>
@foreach($comments as $category)
    <li>{{ $category->author }}</li>
@endforeach
</ul>
