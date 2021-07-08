<td>
    <h5 class="font-medium pl-5 mr-5">{{ $payment->patient->first_name }}</h5>
</td>
<td>
    <h5 class="font-medium pl-5 mr-5">{{ $payment->patient->last_name }}</h5>
</td>
<td>
                                                            <span
                                                                class="text-muted pl-12">{{ $payment->appointment }} €</span><br>
</td>
<td>
                                                            <span
                                                                class="text-muted pl-12">{{ $payment->therapy }} €</span>
</td>

<td>
                                                            <span
                                                                class="text-muted pl-2"> {{ $payment->appointment + $payment->therapy }} €</span>
</td>
