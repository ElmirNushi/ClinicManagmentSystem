<button type="button"
        onclick="event.preventDefault(); document.getElementById('edit-user{{ $user->id }}').submit()"
        class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2">
    <i class="fa fa-edit"></i></button>
<form id="edit-user{{ $user->id }}"
      action="/users/edit/{{ $user->id }}"
      method="GET"
      style="display: none">
    @csrf
</form>
