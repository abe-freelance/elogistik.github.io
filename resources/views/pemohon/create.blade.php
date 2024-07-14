@extends('layouts.template')
<!-- START FORM -->
@section('konten')
@if ($errors->any())
    <div class="pt-3">
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{$item}}</li>
                    
                @endforeach
            </ul>

        </div>
    </div>
@endif
<form action='{{url('pemohon')}}' method='post'>
@csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="nim" class="col-sm-2 col-form-label">Nomor Permohonan</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='nomor_permohonan' value="{{Session::get('nomor_permohonan')}}" id="nomor_permohonan">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nim" class="col-sm-2 col-form-label">Tipe Permohonan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='tipe_permohonan' value="{{Session::get('tipe_permohonan')}}" id="tipe_permohonan">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="latar_belakang" class="col-sm-2 col-form-label">Latar Belakang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='latar_belakang' value="{{Session::get('latar_belakang')}}" id="latar_belakang">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tujuan" class="col-sm-2 col-form-label">Tujuan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='tujuan' value="{{Session::get('tujuan')}}" id="tujuan">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="simpan" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
    </div>
</form>
    <!-- AKHIR FORM -->    
@endsection
