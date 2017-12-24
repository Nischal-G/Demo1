@extends('layouts.default')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New Customer</h2>
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


    <form action="{{ route('crud.store') }}" method="POST">

      <div class="form-group">
         <strong>Customer name :</strong>
        <input type="text" class="form-control" id="customerName" name="customerName" placeholder="Enter customer name">
      </div>

      <div class="form-group">
        <strong>Description:</strong>
        <input type="text" class="form-control" id="amountRecived" name="amountRecived" placeholder="Password">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection