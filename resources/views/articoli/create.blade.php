<x-layout.main>

  @if(session()->has('success'))
  <div class="alert alert-success" role="alert">
  {{session('success')}}
  </div>
  @endif

  @if ($errors->any())
  <ul>
  @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
  @endforeach
  </ul>
@endif

    <form method='POST' action="{{route('article.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label  class="form-label">Title</label>
          <input type="text" name='title' class="form-control" value="{{@old('title')}}" required>
          @error('title')
              {{$message}}
          @enderror
        </div>
        <div class="mb-3">
            <div class="form-floating">
                <textarea class="form-control" name='content' style="height: 100px"  required>{{@old('content')}}</textarea>
                <label >Content</label>
                @error('content')
                {{$message}}
                @enderror
              </div>
              <div class="mb-3">
                <input type="file" name='image'>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</x-layout.main>