@extends('errors._layout')

@section('title', 'Thao tác quá nhanh')
@section('code', '429')
@section('heading', 'Bạn thao tác quá nhanh')
@section('message', 'Có quá nhiều yêu cầu trong thời gian ngắn. Vui lòng chờ một lát rồi thử lại.')

@section('actions')
    <button type="button" class="pc-btn pc-btn--outline" onclick="location.reload()">Thử lại</button>
@endsection