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
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <i class="fa fa-check-circle"></i> {{session('status')}}
                    </div>
                @endif

                @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <i class="fa fa-times-circle"></i> {{session('error')}}
                </div>
                @endif
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Syarat dan Ketentuan</h5>
                        <form action="{{ route('sk.update', $sk->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="position-relative form-group">
                                {{-- <label for="syarat_dan_ketentuan" class="">Syarat dan Ketentuan</label> --}}
                                <textarea name="syarat_dan_ketentuan" class="form-control ck-editor @error('syarat_dan_ketentuan') is-invalid @enderror">{{ old('syarat_dan_ketentuan', $sk->syarat_dan_ketentuan) }}</textarea>
                                @error('syarat_dan_ketentuan')
                                    <div class="invalid-feedback">
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
