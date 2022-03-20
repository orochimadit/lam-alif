@extends('layouts.index')

@section('contents')
<div class="row">
  <div class="col-md-12">
    <div class="slim-pageheader">
        <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Category</li>
        </ol>
        <h6 class="slim-pagetitle">PENGATURAN Materi</h6>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <a href="{{route('material.create')}}" class="btn btn-outline-danger btn-block mg-b-10">TAMBAH MATERI</a>
  </div>
</div>
   <div class="section-wrapper mg-t-20">
          <div class="table-responsive">
            <table class="table table-hover mg-b-0">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>img</th>
                  <th>Sound</th>
                  <th>Category</th>
                  <th>Deskripsi</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($materials as $item)
                    <tr>
                    <td>{{$loop->iteration}}</td>
                    <td><a href="{{route('material.show',[$item->id])}}">{{$item->name}}</a></td>
                    <td> @if($item->img)
                    <img src="{{asset('storage/'.$item->img)}}"  width="100px"alt="">
                    @else
                    <img src="http://via.placeholder.com/500x500" alt="">
                    @endif
                </td>
                    <td>{{$item->category->name}}</td>
                    <td>

                    <audio controls>
                    <source src="{{asset('storage/'.$item->sound)}}" type="audio/mpeg">
                    </audio>
                    </td>
                    <td>{{$item->description}}</td>
                    <td>
                        <div class="dropdown">
                            <a class="btn btn-outline-info btn-icon rounded-circle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div><i class="fa fa-bars"></i></div></a>
                            <div class="dropdown-menu" >
                            {{-- <button class="dropdown-item">Edit</button>  --}}
                         
                            <a class="dropdown-item" href="{{route('material.edit', $item->id)}}">Edit</a>
                              <form action="{{route('material.destroy', $item->id)}}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="dropdown-item" onclick="return confirm('Hapus Data?')">Hapus</button>                 
                              </form>
                            </div>
                        </div>
                    </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- table-responsive -->
        </div><!-- section-wrapper -->
@endsection