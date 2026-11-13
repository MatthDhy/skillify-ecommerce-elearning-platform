@extends('errors._layout')

@section('title', 'Phiên làm việc đã hết hạn')
@section('code', '419')
@section('heading', 'Phiên làm việc đã hết hạn')
@section('message', 'Trang đã mở quá lâu nên biểu mẫu không còn hợp lệ. Hãy tải lại trang rồi thử lại.')

@section('actions')
    <button type="button" class="pc-btn pc-btn--outline" onclick="location.reload()">Tải lại trang</button>
@endsection