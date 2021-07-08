<tbody>
@foreach($payments as $payment)
    <tr>
        @include('payments.partials.showPartials.showBody')
        <td>
            <button type="button"
                    onclick="event.preventDefault();
                        document.getElementById('delete-payment-{{ $payment->id }}').submit();">
                <i class="fa fa-trash btn btn-outline-info btn-circle btn-lg btn-circle mr-5"
                   style="color: darkred;"></i>
            </button>
            <form id="delete-payment-{{ $payment->id }}"
                  action="/payments/view/{{ $payment->id }}"
                  method="POST" style="display: none">
                @csrf
                @method("DELETE")
            </form>

        </td>
    </tr>
@endforeach
</tbody>
