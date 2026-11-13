{{--
    Khung chung cho các trang lỗi (độc lập, KHÔNG dùng layouts.app).
    Lý do: với URL không khớp route nào, hoặc khi chính header gây lỗi 500, session/DB có thể chưa sẵn sàng;
    trang lỗi mà lại phụ thuộc vào session/DB thì sẽ lỗi tiếp. Ở đây chỉ dùng config(), asset(), route(), url().
    Mỗi trang con định nghĩa: title, code, heading, message, và (tùy chọn) actions.
--}}
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <title>@yield('title') · {{ config('app.name', 'Văn Phòng Phẩm') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@800&family=Be+Vietnam+Pro:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/pages/error.css') }}" rel="stylesheet">
</head>
<body class="er-body">
    <main class="er">
        <a class="er-brand" href="{{ url('/') }}">
            <i class="bi bi-pencil-fill" aria-hidden="true"></i> {{ config('app.name', 'Văn Phòng Phẩm') }}
        </a>

        <section class="er-card" aria-labelledby="er-title">
            <p class="er-code" aria-hidden="true">@yield('code')</p>
            <h1 id="er-title" class="er-title">@yield('heading')</h1>
            <p class="er-text">@yield('message')</p>

            <div class="er-actions">
                <a href="{{ url('/') }}" class="pc-btn pc-btn--primary">Về trang chủ</a>
                @yield('actions')
            </div>
        </section>
    </main>
</body>
</html>