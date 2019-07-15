@extends('back.layouts')
@section('back.content')
<section class="content" style="padding-right: 100px; padding-left: 30px; padding-top: 30px;">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">List Data Kategori</h3>
          <a href="{{ route('kategori-add') }}" class="btn btn-primary" style="float: right;">Tambah Kategori</a>
        </div><!-- /.box-header -->
        <form role="form" action="{{route('kategori-search')}}" method="post">
          {{csrf_field()}}
          <div class="box-header">
            <div class="row">
              <div class="col-md-6">
                <div class="input-group input-group">
                  <input type="text" class="form-control" name="search">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">Cari</button>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </form>
        <div class="box-body">
          <table class="table table-bordered">
            <th style="width: 15px">NO</th>
            <th>Kategori</th>
            <th>Action</th>
          </tr>
          @foreach($data as $key=>$value)
          <tr>
            <td>{{$key+1}}</td>
            <td>{{$value->kategori}}</td>
            <td>
              <a href="{{ url('kategori-edit/'.$value->id_kategori) }}" class="btn btn-success ">Edit</a>
              <a href="{{ url('kategori-delete/'.$value->id_kategori) }}" class="btn btn-danger ">Hapus</a>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
      <div class="box-footer clearfix">
        <ul class="pagination pagination-sm no-margin pull-right">
          <li><a href="#">«</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">»</a></li>
        </ul>
      </div>
    </table>
  </div>
</div>
</div>
</section>
@stop