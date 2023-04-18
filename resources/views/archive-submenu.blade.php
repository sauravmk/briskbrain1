<ul>
    @foreach ($posts as $post)
        <li>
            <a href="{{ url('blog/'.$post->year.'/'.$post->month) }}">
                {{ $post->month . ' ' . $post->year }} ({{ $post->published }})
            </a>
        </li>
    @endforeach
    </ul>
