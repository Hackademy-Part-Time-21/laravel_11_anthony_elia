<x-layout.main>

  @if($auth)

    <x-header :nome="$auth['name']" :cognome="$auth['surname']" />
  @else
  <h3>Non sei loggato</h3>
  @endif

  {{ config('app.mail') }}

</x-layout.main>