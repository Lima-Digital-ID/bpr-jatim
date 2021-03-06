@extends('backend.template')

@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="metismenu-icon fa fa-{{ $pageIcon }} icon-gradient bg-arielle-smile">
                        </i>
                    </div>
                    <div>
                        {{ $pageTitle }}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2 mb-3">
                        <a href="{{$btnRight['link']}}"><button class="btn btn-lg btn-primary"> <i class="fa fa-arrow-left mr-2"></i>{{$btnRight['text']}}</button></a>
                    </div>
                </div>
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Wilayah</h5>
                        <form action="{{ route('kota.update', $kota->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="position-relative form-group">
                                <label for="name" class="">Nama Wilayah</label>
                                <input name="name" id="name" placeholder="Nama Wilayah" type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name', $kota->nama_kota)}}">
                                @error('name')
                                    <div class="span text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="position-relative form-group">
                                <label for="alamat" class="">Alamat</label>
                                <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control @error('alamat') is-invalid @enderror">{{old('alamat', $kota->alamat)}}</textarea>
                                @error('name')
                                    <div class="span text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="position-relative form-group">
                                <label for="kode_area" class="">Kode Area</label>
                                <input name="kode_area" id="kode_area" placeholder="Kode Area" type="number" class="form-control @error('kode_area') is-invalid @enderror" value="{{old('kode_area', $kota->kode_area)}}">
                                @error('kode_area')
                                    <div class="span text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="position-relative form-group">
                                <label for="telp" class="">Telp.</label>
                                <input name="telp" id="telp" placeholder="Nomor Telepon" type="number" class="form-control @error('telp') is-invalid @enderror" value="{{old('telp', $kota->telp)}}">
                                @error('telp')
                                    <div class="span text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="position-relative form-group">
                                <label for="fax" class="">Faksimile</label>
                                <input name="fax" id="fax" placeholder="Faksimile" type="number" class="form-control @error('fax') is-invalid @enderror" value="{{old('fax', $kota->fax)}}">
                                @error('fax')
                                    <div class="span text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="position-relative form-group">
                                <label for="longitude" class="">Longitude</label>
                                <input name="longitude" id="longitude" placeholder="Longitude" type="text" class="form-control @error('longitude') is-invalid @enderror" value="{{old('longitude', $kota->longitude)}}">
                                @error('longitude')
                                    <div class="span text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="position-relative form-group">
                                <label for="latitude" class="">Latitude</label>
                                <input name="latitude" id="latitude" placeholder="Latitude" type="text" class="form-control @error('latitude') is-invalid @enderror" value="{{old('latitude', $kota->latitude)}}">
                                @error('latitude')
                                    <div class="span text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="mt-1 btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
