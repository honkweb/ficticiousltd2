
hello


    <h1 class="display-6">client</h1>
    <a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"> Home </a>
    @if($searchcontact->isNotEmpty())
    @foreach ($searchcontact as $post)
        <div class="post-list">
            <p><a href="{{ url('contact', $post->id) }}" class="btn btn-info">{{ $post->name }}</a></p>           
        </div>
    @endforeach
@else 
    <div>
        <h2>No posts found</h2>
    </div>
@endif