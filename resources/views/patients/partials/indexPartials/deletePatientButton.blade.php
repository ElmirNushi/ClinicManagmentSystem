<button type="button"
        onclick="event.preventDefault();
            document.getElementById('delete-patient-{{ $patient->id }}').submit();">
    <i class="fa fa-trash btn btn-outline-info btn-circle btn-lg btn-circle ml-2"
       style="color: darkred;"></i>
</button>
<form id="delete-patient-{{ $patient->id }}"
      action="/patients/{{ $patient->id }}"
      method="POST" style="display: none">
    @csrf
    @method("DELETE")
</form>
