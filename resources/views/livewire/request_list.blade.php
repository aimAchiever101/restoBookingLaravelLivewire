<div>
    
    @if ($result['success'])
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>payment id</th>
                <th>name</th>
                <th>phone number</th>
                <th>amount</th>
                <th>status</th>
            </tr>
        </thead>
        <tbody>
       @foreach ($result["payment_requests"] as $payment_request)    
            <tr>
                <td>
                    <a href="{{$payment_request['longurl']}}">
                        {{$payment_request['id']}}
                    </a>
                
                    <a href="{{url('/payment_request_details/'.$payment_request['id'])}}">
                    get payment request datails</a>
                    
                </td>

                <td>
                    {{$payment_request['buyer_name']}}
                </td>
                <td>
                    {{$payment_request['phone']}}
                </td>
                <td>
                    {{$payment_request['amount']}}
                </td>
                <td>
                    {{ $payment_request['status']}}
                </td>
            </tr>
           @endforeach
        </tbody>
    </table>
    
    @else
        there is no recored here

    @endif
    
</div>
