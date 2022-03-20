@extends('layouts.index')

@section('contents')
<div class="row">
 <div class="col-md-12">
  <div class="slim-pageheader">
      <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Kategori</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Kategori</li>
      </ol>
      <h6 class="slim-pagetitle">EDIT MATERI</h6>
  </div>
 </div>
 <div class="col-md-12">
  <div class="section-wrapper">
     
     <form action="{{route('material.update', $material->id)}}" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
         <div class="form-layout">
             @csrf
             @method('PUT')
             <div class="row form-group col-md-4">
				<div class="form-group mg-b-10-force">
				  <label class="form-control-label">Kategori : <span class="tx-danger">*</span></label>
				  <select name="category_id" class="form-control select2-show-search" data-placeholder="Kategori">
					<option label="Choose country"></option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}" {{$material->category_id == $category->id  ? 'selected' : ''}}>{{$category->name}}</option>
                    @endforeach
				  </select>
				</div>
			  </div><!-- col-4 -->
             <div class="row form-group col-md-4">
                <label class="form-control-label">Nama Materi : <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="name" placeholder="Name" value="{{$material->name}}" autofocus required>
             </div>
             
             <div class="row form-group col-md-4">
                <label class="form-control-label">Deskripsi : <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="description" placeholder="Deskripsi" value="{{$material->description}}" autofocus required>
             </div>
             <div class="row form-group col-md-4">
				<div class="form-group mg-b-10-force">
				<div class="custom-file">
				<input name="img" type="file" class="custom-file-input" id="customFile">
				<label class="custom-file-label" for="customFile">Masukkan Photo</label>
			  </div><!-- custom-file -->
              <img src="{{asset('storage/'.$material->img)}}" width="100">
				</div>
			  </div>
              <div class="row form-group col-md-4">
				<div class="form-group mg-b-10-force">
				<div class="custom-file">
				<input name="sound" type="file" class="custom-file-input" id="customFile">
				<label class="custom-file-label" for="customFile">Masukkan Sound</label>
			  </div><!-- custom-file -->
                <audio controls>
                    <source src="{{asset('storage/'.$material->sound)}}" type="audio/mpeg">
                    </audio>
				</div>
			  </div>
         </div>
         <div class="form-layout-footer">
             <button type="submit" class="btn btn-danger bd-0" onclick="return confirm('Simpan data ?')">Simpan</button>
         </div>
     </form>
 </div>
 
 </div>
</div>


@endsection