@extends('back.layouts')
@section('back.content')
<section class="content" style="padding-right: 100px; padding-left: 30px; padding-top: 30px;">
<div class="row">
<div class="col-md-12">
        <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Tambah Kategori</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{route('kategori-store')}}" method="post">{{csrf_field()}}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Kategori</label>
                      <input type="text" name="kategori" class="form-control" id="kategori" placeholder="Enter kategori">
                    </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                  </div>
                </form>
              </div>
          </div>
      </div>
  </section>
@stop