@extends('layouts.default')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Customer CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('crud.create') }}"> Create New Customer</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Customer Name</th>
            <th>Retail Miti</th>
            <th>Days Ecp.</th>
            <th>Model</th>
            <th>Mobile No.</th>
            <th>Sales Exe</th>
            <th>Sales Price</th>
            <th>Amount Received</th>
            <th>Principle Due</th>
            <th>Interest</th>
            <th>Total Due</th>
            <th>Remarks</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($custom as $cust)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $cust->customerName}}</td>
            <td>{{ $cust->retailMiti}}</td>
            <td>{{ $cust->daysEcp}}</td>
            <td>{{ $cust->model}}</td>
            <td>{{ $cust->mobileNo}}</td>
            <td>{{ $cust->salesExe}}</td>
            <td>{{ $cust->salesPrice}}</td>
            <td>{{ $cust->amountReceived}}</td>
            <td>{{ $cust->principleDue}}</td>
            <td>{{ $cust->interest}}</td>
            <td>{{ $cust->totalDue}}</td>
            <td>{{ $cust->remarks}}</td>
            <td>
                <a class="btn btn-warning btn-sm" href="{{ route('crud.edit',$cust->id) }}">Edit</a>

            <form action="{{action('CRUDController@destroy', $cust['id'])}}" method="post">
              {{csrf_field()}}
              <input name="_method" type="hidden" value="DELETE">
              <button class="btn btn-danger btn-sm" type="submit">Delete</button>
            </form>
            
        </tr>
        @endforeach
    </table>
    {!! $custom->render() !!}

@endsection