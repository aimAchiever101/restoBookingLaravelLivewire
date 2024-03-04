<div>
    <div class="row">
        <div class="col-sm-12">
            <h1>Registered cusotmers</h1>
            <table class="table" border="1">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>state</th>
                        <th>email-id</th>
                        <th>delete data</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customers as $customer)
                    <tr>
                    <td>{{$customer['name']}}</td>
                    <td>{{$customer['state']}}</td>
                    <td>{{$customer['email']}}</td>
                    <td>
                    <button wire:click="delete({{ $customer['id']}})"
                        type="button" class="btn btn-danger"
                        >Delete</button>
                    </td>

                    </tr>
                    @endforeach
                    

                </tbody>
            </table>

        </div>
    </div>
</div>
