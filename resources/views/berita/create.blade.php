 @extends('layouts.template')
@section('content')
 
<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Tambah Artikel</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Artikel</li>
                    </ol>
                </div>
            </div>
 <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Tambah Artikel</h4>

                            </div>
                            <div class="card-body">
                                <div class="basic-elements">
                                    <form action="{{url('berita/create')}}" method="post" enctype="multipart/form-data">

                                    {!! csrf_field() !!}
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Judul</label>
                                                    <input type="text" class="form-control" name="judul" >
                                                </div>
                                               <label class="help-block">Gambar</label>
                                                    <input type="file" name="image">
                                                <div class="form-group">
                                                </div>
                                                <div class="form-group">
                                                    <label>Isi</label>
                                                    <textarea class="form-control" rows="6"  name="isi"></textarea>
                                                </div>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

</div>                
@endsection