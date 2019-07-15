@extends('back.layouts')
@section('back.content')
<section class="content">
<div class="row">
<div class="col-md-12">
<div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Edit User</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{route('user-update')}}" method="post">{{csrf_field()}}
                  <input type="hidden" name="id" value="{{$data->id_users}}">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">User</label>
                      <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username" required="" value="{{$data->username}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email" required="" value="{{$data->email}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Alamat</label>
                      <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Enter Alamat" required="" value="{{$data->alamat}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Password</label>
                      <input type="text" name="password" class="form-control" id="password" placeholder="Enter Password" required="" value="{{$data->password}}">
                    </div>
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
</div>
</div>
</section>
 @stop