<button type="button"
        onclick="event.preventDefault(); document.getElementById('edit-patient{{ $patient->id }}').submit()"
        class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2">
    <i class="fa fa-edit"></i></button>
<form id="edit-patient{{ $patient->id }}"
      action="/patients/edit/{{ $patient->id }}"
      method="GET"
      style="display: none">
    @csrf
</form>
