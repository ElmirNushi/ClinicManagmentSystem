<tbody>
@foreach($patients as $patient)
    <tr>
        @include('patients.partials.indexPartials.patientInfos')
        <td>

            @include('patients.partials.indexPartials.deletePatientButton')

            @include('patients.partials.indexPartials.editPatientButton')

        </td>
    </tr>
@endforeach
</tbody>
