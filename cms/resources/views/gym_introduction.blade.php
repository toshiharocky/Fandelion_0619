@extends('layouts.menu')

@push('css')
    <!--<link href="{{ asset('css/〇〇.css') }}" rel="stylesheet">-->
@endpush

@section('content')

<?php
echo $gym_id;
?>

	<!-- Content / End -->
@push('js')
    <!--<script src="{{ asset('js/〇〇.js') }}"></script>-->

@endpush
@endsection
