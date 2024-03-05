<x-layout.main>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            A new email verification link has been emailed to you!
        </div>
    @endif

    <form action="/email/verification-notification" method="POST">
        @csrf
        <button type="submit"> Reinvia la Mail </button>
    </form>
</x-layout.main>