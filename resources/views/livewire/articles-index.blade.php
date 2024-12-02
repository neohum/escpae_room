<div>
    <div class="grid grid-cols-3 gap-4">
        @foreach($articles as $article)
        <div class="p-4 bg-white rounded shadow">
            <div class="mb-4">
                <h3 class="mb-4 text-xl font-bold">{{ $article->title }}</h3>
                <p>{{ Str::limit($article->content, 100) }}</p>
            </div>
            <img src="{{ $article->image }}" alt="{{ $article->title }}" class="object-cover w-full h-48 mb-2">
            <div class="pt-4 font-bold">
                <a wire:navigate href="/articles/{{ $article->id }}">Read More</a>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-4">
        {{ $articles->links() }}
    </div>
</div>
