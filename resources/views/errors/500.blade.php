@extends('errors._layout')

@section('title', 'Lỗi máy chủ')
@section('code', '500')
@section('heading', 'Có lỗi xảy ra phía máy chủ')
@section('message', 'Chúng tôi chưa xử lý được yêu cầu của bạn. Hãy thử lại sau ít phút; nếu vẫn lỗi, vui lòng liên hệ cửa hàng.')

@section('actions')
    <button type="button" class="pc-btn pc-btn--outline" onclick="location.reload()">Thử lại</button>
@endsection