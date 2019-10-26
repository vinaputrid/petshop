@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        Foods
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Form Add Food</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Food Name</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Food Name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Food Merk</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Food Merk">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Food Type</label>
                <select class="form-control">
                  <option>Karnivor</option>
                  <option>Omnivor</option>
                  <option>Herbivor</option>
                </select>
              </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Price</label>
              <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Please input in Rp">
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary  pull-right">Submit</button>
          </div>
        </form>
      </div>

    </section>
@endsection