<!DOCTYPE html>
<html lang="en">
<head>
   @include("components.head")
</head>
<body>
    <!-- Begin box login -->
    <div id="main">
        <div class="row">
        <!--Begin sidebar-->
            @include("components.sidebar")
        <!--End sidebar-->
        <div class="col-md-10">
            @include("components.header")
            @yield("content")
        </div>
        </div>
    </div>
    <!-- End box login -->
    @include("components.footer")
    @yield("custom-js")
</body>
</html>