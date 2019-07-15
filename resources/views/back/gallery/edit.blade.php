@extends('back.layouts')
@section('back.content')
<section class="content" style="padding-right: 100px; padding-left: 30px; padding-top: 30px;">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Edit Dokumen Gallery</h3>
        </div>
            <form role="form" action="{{route('gallery-update')}}" method="post" enctype="multipart/form-data">{{csrf_field()}}
              <input type="hidden" name="id" value="{{$data->id_gallery}}">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Caption</label>
                  <input type="text" class="form-control" id="judul" placeholder="Masukkan Caption" name="judul" value="{{$data->judul}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Foto</label>
                  <input type="file" name="foto" class="form-control" id="foto" placeholder="Pilih Foto" required="" value="{{$data->foto}}">
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
      </div>
    </div>
  </div>
</section>
@stop