
<x-layout.main>

    <h1> I nostri articoli </h1>

    <div class="container">
        <div class="row">
            @foreach($articoli as $articolo)
            <div class="col-4">
                <x-article-card :articolo="$articolo"/>
            </div>            
            @endforeach
        </div>
    </div>

</x-layout.main>