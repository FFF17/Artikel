@extends('layouts.template')
@section('content')

<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
 
 <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="card p-30"><a href="berita/index">
                            
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-file f-s-40 color-primary"></i></span>
                                </div>
                               <div class="media-body media-text-right">
                                    <h2>                                                                            {{$count}}                     
</h2>
                                    <p class="m-b-0">Artikel</p>
                        </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

@endsection