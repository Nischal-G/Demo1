@extends('layouts.default')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit New Customer</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('crud.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



    <form method="PATCH" action="{{ action('CRUDController@update', $custom->id) }}">
   

      <div class="form-group">
         <strong>Customer name :</strong>
        <input type="text" class="form-control" id="customerName" name="customerName" placeholder="Enter customer name"  value="{{$custom->customerName}}">
      </div>

      <div class="form-group">
        <strong>Amount Received:</strong>
        <input type="text" class="form-control" id="amountReceived" name="amountReceived" placeholder="Amount Received"  value="{{$custom->amountReceived}}">
      </div>

       <!-- <form action="{{action('CRUDController@update', $custom['id'])}}" method="post">
              {{csrf_field()}}
              <input name="_method" type="hidden" value="EDIT"> -->
              <button class="btn btn-success btn-sm" type="submit">Change</button>
           <!--  </form> -->
    </form>

@endsection