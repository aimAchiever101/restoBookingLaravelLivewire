<div>
@if($result["success"])
<table border="1" width="100%">
    <thead>
        <th>id</th>
        <th>status</th>
        <th>total amount</th>
        <th>refunded amount</th>
    </thead>
    <tbody>
        @foreach($result['refunds'] as $refund)
        <tr>
            <td>
                {{$refund['id']}}
            </td>
            <td>
                {{$refund['status']}}
            </td>
            <td>
                {{$refund['total_amount']}}
            </td>
            <td>
                {{$refund['refund_amount']}}
            </td>
            <td>
            <a href="{{url('/refund_details'.$result['refunds'][0]['payment_id'])}}">get refund</a>
               
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
Something seems wrong
@endif 

</div>
