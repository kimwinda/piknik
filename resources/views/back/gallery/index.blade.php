@extends('back.layouts')
@section('back.content')
<section class="content" style="padding-right: 100px; padding-left: 30px; padding-top: 30px;">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">List Gallery</h3>
          <a href="{{ route('gallery-add') }}" class="btn btn-primary" style="float: right;">Tambah Gallery</a>
        </div><!-- /.box-header -->
        <form role="form" action="{{route('gallery-search')}}" method="post">
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
          <table id="example2" class="table table-bordered table- hover dataTable" role="grid" aria-describedby="example2_info">
            <tr role="row">
              <th style="width: 15px">NO</th>
              <th>Caption</th>
              <th>Foto</th>
              <th>Action</th>
            </tr>
            @foreach($data as $key=>$value)
            <tr>
              <td>{{$key+1}}</td>
              <td>{{$value->judul}}</td>
              <td><img src="{{url('uploads/'.$value->foto)}}" alt="Image" width="10%"/></td>
              <td>
                <a href="{{ url('gallery-edit/'.$value->id_gallery) }}" class="btn btn-success">Edit</a>
                <a href="{{ url('gallery-delete/'.$value->id_gallery) }}" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            @endforeach
          </table>
        </div>
        <div class="box-footer clearfix">
          <ul class="pagination pagination-sm no-margin pull-right">
            {{ $data->links() }}
          </ul>
        </div>
      </table>
    </div>
  </div>
</div>
</section>
@stop