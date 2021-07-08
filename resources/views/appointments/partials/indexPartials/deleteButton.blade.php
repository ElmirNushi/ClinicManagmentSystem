<button type="button"
        onclick="event.preventDefault();
            document.getElementById('delete-appointments-{{ $appointment->id }}').submit()">
    <i class="fa fa-check btn btn-outline-info btn-circle btn-lg btn-circle"
       style="color: green; padding-left: 70px"></i>
</button>
<form id="delete-appointments-{{ $appointment->id }}"
      action="/appointments/{{ $appointment->id }}"
      method="POST" style="display: none">
    @csrf
    @method("DELETE")
</form>
