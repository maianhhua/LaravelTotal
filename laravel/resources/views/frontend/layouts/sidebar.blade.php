
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--head-->
@include('frontend.partials.head')
<!--//head-->

<body>
<!-- header-starts -->
@include('frontend.partials.header')
<!-- //header-ends -->
<div class="sub-banner my-banner2">

</div>
<div class="content">
    <div class="container">
@include('frontend.partials.sidebar')
@yield('content')
    </div>
</div>
<!-- newsletter -->
@include('frontend.partials.newsletter')
<!-- //newsletter-ends -->

<!--footer-->
@include('frontend.partials.footer')
<!--//footer-->

</body>
</html>