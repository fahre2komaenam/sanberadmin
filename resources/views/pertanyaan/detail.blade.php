@extends('adminlte.master')

@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pertanyaan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">Pertanyaan</li>
              <li class="breadcrumb-item active">Detail Data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Detail Pertanyaan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/pertanyaan" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control" name="judul" value="{{$tanya->judul}}" placeholder="Judul" disabled>
                </div>
                  <div class="form-group">
                    <label>Pertanyaan</label>
                    <textarea class="form-control" rows="3" name="isi" value="{{old('isi','')}}" placeholder="Isi" disabled>{{$tanya->isi}}</textarea>
                </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="/pertanyaan/{{$tanya->id}}/edit" class="btn btn-warning">Edit</a> |
                  <a href class="btn btn-primary">Back</a>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
    </div>
</div>
@endsection

