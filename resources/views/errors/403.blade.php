@extends('errors._layout')

@section('title', 'Không có quyền truy cập')
@section('code', '403')
@section('heading', 'Bạn không có quyền truy cập')
@section('message', 'Nội dung này thuộc về tài khoản khác hoặc cần quyền cao hơn. Nếu bạn nghĩ đây là nhầm lẫn, hãy đăng nhập lại bằng đúng tài khoản.')

@section('actions')
    <button type="button" class="pc-btn pc-btn--outline" onclick="history.length > 1 ? history.back() : (location.href = '{{ url('/') }}')">Quay lại</button>
@endsection