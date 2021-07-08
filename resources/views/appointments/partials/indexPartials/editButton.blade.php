<button type="button"
        onclick="event.preventDefault(); document.getElementById('edit-appointments-{{ $appointment->id }}').submit()"
        class="btn btn-outline-info btn-circle btn-lg btn-circle ml-10">
    <i class="fa fa-edit"></i></button>
<form id="edit-appointments-{{ $appointment->id }}"
      action="/appointments/edit/{{ $appointment->id }}"
      method="GET"
      style="display: none">
    @csrf
</form>
