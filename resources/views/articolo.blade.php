<x-layout.main>

    <img src="{{Storage::url($articolo->image)}}">
    <h1> {{$articolo->title}} </h1>

    <p> {{$articolo->content}}</p>
</x-layout.main>