@extends('layouts.index')

@section('contents')
<div class="row">
 <div class="col-md-12">
  <div class="slim-pageheader">
      <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('category.index')}}">Kategori</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ubah</li>
      </ol>
      <h6 class="slim-pagetitle">UBAH KATEGORI</h6>
  </div>
 </div>
 <div class="col-md-12">
  <div class="section-wrapper">
     
     <form action="{{route('category.update', $category->id)}}" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
         <div class="form-layout">
             @csrf
             @method('PUT')
             <div class="row form-group col-md-4">
                 <label class="form-control-label">Nama : <span class="tx-danger">*</span></label>
                 <input class="form-control" type="text" name="name" placeholder="Nama Kategori" value="{{$category->name}}" autofocus required>
             </div>
             <div class="row form-group col-md-4">
                 <label class="form-control-label">Deskripsi <span class="tx-danger">*</span></label>
                 <input class="form-control" type="text" name="description" placeholder="Deskripsi" value="{{$category->description}}" autofocus required>
             </div>
         </div>
         <div class="form-layout-footer">
             <button type="submit" class="btn btn-primary bd-0" onclick="return confirm('Simpan data ?')">Simpan</button>
         </div>
     </form>
 </div>
 
 </div>
</div>


@endsection