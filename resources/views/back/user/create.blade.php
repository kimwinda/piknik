@extends('back.layouts')
@section('back.content')
<section class="content">
<div class="row">
<div class="col-md-12">
<div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Tambah User</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{route('user-store')}}" method="post">{{csrf_field()}}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Username</label>
                      <input type="text" name="username" class="form-control" id="username" placeholder="Enter username">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">Alamat</label>
                      <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Enter Alamat">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">Password</label>
                      <input type="text" name="password" class="form-control" id="password" placeholder="Enter password">
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