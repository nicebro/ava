<h1>Articles list</h1>
@foreach($articles as $article) 
<div>
{{ $article->title }}
</div>
@endforeach

{{ $articles->links() }}