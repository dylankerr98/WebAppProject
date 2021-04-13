<!DOCTYPE html>
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : SimpleWork
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140225

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />

    <link href="css/default.css" rel="stylesheet" />
    <link href="css/fonts.css" rel="stylesheet" />
</head>
<body>
    <div id="header-wrapper">
        <div id="header" class="container">
            <div id="logo">
                <h1><a href="/">COM431 - Support Area</a></h1>
            </div>
            <div id="menu">
                <ul>
                    <li class="{{Request::path() ===  '/' ? 'current_page_item' : '' }}">
                        <a href="/" accesskey="1" title="">Homepage</a>
                    </li>
                    <li class="{{Request::path() ===  'links' ? 'current_page_item' : '' }}">
                        <a href="/links" accesskey="2" title="">Links</a>
                    </li>
                    <li class="{{Request::path() ===  'share' ? 'current_page_item' : '' }}">
                        <a href="/share" accesskey="3" title="">Share Link</a>
                    </li>
                    <li class="{{Request::path() ===  'about' ? 'current_page_item' : '' }}">
                        <a href="about" accesskey="4" title="">About Module</a>
                    </li>
                    <li class="{{Request::path() ===  'contact' ? 'current_page_item' : '' }}">
                        <a href="/contact" accesskey="5" title="">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
        @yield('header')
    </div>
    @yield('content')

    <div id="copyright" class="container">
        <p>
            &copy; 2021. All rights reserved. | Design by
            <a href="mailto:kerr-d25@ulster.ac.uk" rel="nofollow">Dylan Kerr</a>.
        </p>
    </div>
</body>
</html>
