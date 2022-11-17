@extends('main')

@section('container')
    <div class="text-center mb-4">
        <h3>IP : </h3>
            3.33
    </div>
    <div class="d-flex justify-content-center">
        @if (($nilai >= 0) and ($nilai <= 2.0))
            <div>
                IP kamu belum memenuhi passing grade, Semangat.
            </div>
        @else
            <div>
               Pertahankan IP kamu ya.
            </div>
        @endif
    </div>

@endsection

