<form method="POST" action="/users/edit/{{ $user->id }}" enctype="multipart/form-data">
@csrf
@method('PATCH')

<!--Categories -->
@include('user.partials.editPartials.downDropEditUser', compact('categories'))

<!--Name -->
@include('user.partials.editPartials.nameEdit')

<!--Email -->
    @include('user.partials.editPartials.emailEdit')

    <x-button class="ml-4 mt-3">
        {{ __('Edit user') }}
    </x-button>

</form>
