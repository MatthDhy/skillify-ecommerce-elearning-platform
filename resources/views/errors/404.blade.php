@extends('errors._layout')

@section('title', 'Không tìm thấy trang')
@section('code', '404')
@section('heading', 'Không tìm thấy trang')
@section('message', 'Trang bạn tìm không tồn tại, đã bị gỡ hoặc đường dẫn bị nhập sai.')

@section('actions')
    <a href="{{ route('products.index') }}" class="pc-btn pc-btn--outline">Xem sản phẩm</a>
@endsection