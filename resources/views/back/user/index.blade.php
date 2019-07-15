@extends('back.layouts')
@section('back.content')
<section class="content" style="padding-right: 100px; padding-left: 30px; padding-top: 30px;">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">List Data User</h3><br><br>
                  <a href="{{ route('user-add') }}" class="btn btn-primary btn-xs">Add Data</a>
                </div><!-- /.box-header -->
                <form role="form" action="{{route('user-search')}}" method="post">
                  {{csrf_field()}}
                <div class="box-header">
                <div class="row">
                <div class="col-md-6">
                  <div class="input-group input-group">
                    <input type="text" class="form-control" name="search">
                    <span class="input-group-btn">
                      <button class="btn btn-primary btn-flat" type="submit">Cari</button>
                    </span>
                  </div>
                </div>
                </div>
                </div><!-- /.box-header -->
                </form>

                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Alamat</th>
                      <th>Password</th>
                      <th>Action</th>

                    </tr>
                    @foreach($data as $key=>$value)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$value->username}}</td>
                      <td>{{$value->email}}</td>
                      <td>{{$value->alamat}}</td>
                      <td>{{$value->password}}</td>
                      <td>
                        <a href="{{ url('user-edit/'.$value->id_users) }}" class="btn btn-success btn-xs">Edit</a>
                        <a href="{{ url('user-delete/'.$value->id_users) }}" class="btn btn-danger btn-xs">Hapus</a>
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
          </div>
        </section>
              <!-- /.box -->
@stop