@extends('back.layouts')
@section('back.content')
<section class="content" style="padding-right: 100px; padding-left: 30px; padding-top: 30px;">
<div class="row">
<div class="col-md-12">
<div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">List Data Event</h3>
                  <a href="{{ route('event-add') }}" class="btn btn-primary" style="float: right;">Tambah Event</a>
                </div><!-- /.box-header -->
                <form role="form" action="{{route('event-search')}}" method="post">
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
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Judul</th>
                      <th>Deskripsi</th>
                      <th>Gambar</th>
                      <th>Aksi</th>
                    </tr>
                    @foreach($data as $key=>$value)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$value->judul}}</td>
                      <td>{{$value->deskripsi}}</td>
                      <td><img src="{{url('uploads/'.$value->foto)}}" alt="Image" width="10%"/></td>
                      <td>
                        <a href="{{ url('event-edit/'.$value->id_event) }}" class="btn btn-success">Edit</a>
                        <a href="{{ url('event-delete/'.$value->id_event) }}" class="btn btn-danger">Hapus</a>
                      </td>
                    </tr>
                    @endforeach
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <ul class="pagination pagination-sm no-margin pull-right">
                    {{ $data->links() }}
                  </ul>
                </div>
              </div>
          </div>
  </section>
@stop