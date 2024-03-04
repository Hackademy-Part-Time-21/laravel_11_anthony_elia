<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$articolo->title}}</h5>
        <p class="card-text">{{$articolo->content}}</p>
        <a href="{{route('articolo',$articolo->id)}}" class="btn btn-primary">Apri Dettaglio</a>
    </div>
</div>