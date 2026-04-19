<!DOCTYPE html>
<html lang="en">
<head>
    @include("components.head")
</head>
<body>
    <!-- Begin box login -->
   {{-- Tạo 1 khung để có thể kế thừa từ các file blade khác --}}
   @yield("content")
    <!-- End box login -->
    @include("components.footer")
</body>
</html>