@extends('back.layouts')
@section('back.content')
<section class="content" style="padding-right: 100px; padding-left: 30px; padding-top: 30px;">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Tambah Dokumen Gallery</h3>
        </div>
            <form role="form" action="{{route('gallery-store')}}" method="post" enctype="multipart/form-data">{{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Caption</label>
                  <input type="text" class="form-control" id="judul" placeholder="Masukkan Caption" name="judul">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Foto</label>
                  <input type="file" name="foto" class="form-control" id="foto" placeholder="Pilih Foto" required="">
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
              </div>
            </form>
          </div>
      </div>
    </div>
  </div>
</section>
@stop