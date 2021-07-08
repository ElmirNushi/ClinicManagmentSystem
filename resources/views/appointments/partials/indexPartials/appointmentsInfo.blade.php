<td>
    <h5 class="font-medium mb-0 pl-8">{{ $appointment->patient->first_name }} {{ $appointment->patient->last_name }}</h5>
</td>
<td>
    <span
        class="text-muted ml-5">{{ $appointment->time }}</span><br>
</td>
<td>
    <span
        class="text-muted ml-4" style="max-width: 5px;">{{ $appointment->date }}</span><br>
</td>
<td>

    <span
        class="pl-5" style="max-height: 1%;">{{ $appointment->reason }}</span>

</td>
