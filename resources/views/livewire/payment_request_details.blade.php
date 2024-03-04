<div>
     <table border="1" width="100%">
        <thead>
            <th>Payment Request Id</th>
            <th>Buyer's name</th>
            <th>Amount</th>
            <th>Status</th>
            <th>phone number</th>
            <th>refund request</th>

        </thead>
        <tbody>
        @if($result['success'])
            
        
            

            <tr>
                <td>
                    {{$result['payment_request']['id']}}

                </td>
                <td>
                    {{$result['payment_request']['buyer_name']}}
                </td>
                <td>
                    {{$result['payment_request']['amount']}}
                </td>
                <td>
                    {{$result['payment_request']['status']}}
                </td>
                <td>
                    {{$result['payment_request']['phone']}}
                </td>
                <td>
                <a href="{{url('/refund/'.$result['payment_request']['payments'][0]['payment_id'])}}">get refund</a>
                </td>
            </tr>
            
        </tbody>
    </table>
    @else
    Something seems wrong....
    @endif
</div>
