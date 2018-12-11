@extends('layouts.template')
@section('content')

<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">List Artikel</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">List Artikel</li>
                    </ol>
                </div>
            </div>
 <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Export</h4>
                              <a href="{{route('downloadpdf_allberita')}}"><button type="button" class="btn btn-info btn-sm m-b-10 m-l-5">Export PDF</button></a>

                                <div class="table-responsive m-t-40">
                                    <table id="example232" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Gambar</th>
                                                <th>Isi</th>
                                                <th>Waktu Dibuat</th>
                                                <th>Pilihan</th>
                                            </tr>
                                        </thead> 
                                        <tbody>
                                        
                                             @php($no = 1 )

                                @foreach($berita as $data)	
                                        
                                      <tr>
                                                	
                                             <td>{{$no++}}</td>
                                             <td><a href="{{ url('berita/show/'.$data->id) }}">{{$data->judul}}</a></td>
                                             <td><img  style="height: 50px;width: 50px; "src= "{{asset('image/'.$data->image)}}"></td>
            								 <td>{!!substr($data->isi,0,5) !!}....</td>
                                             <td>{{$data->created_at}}</td>
                                             	<td>
                                       <a href="{{ url('berita/edit/'.$data->id) }}" class="btn btn-warning btn-rounded m-b-10 m-l-5"><i class="fa fa-edit"></i>Edit</a>

          
                              
                                    <a href="{{ route('deleteberita',[$data->id]) }}"  class="btn btn-danger btn-rounded m-b-10 m-l-5" onclick="return confirm('Hapus data ?')">  <i class="fa fa-trash-o">Hapus</i></a>
                                             </td>
                                            </tr>
                                        </tbody>
                        @endforeach
                        
                                    </table>
                                </div>
                            </div>
                        </div>



@endsection