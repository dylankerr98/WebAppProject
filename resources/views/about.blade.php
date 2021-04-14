@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <div class="title">
                    <h2>Welcome to our website</h2>
                    <br />
                    <br />
                    <span class="byline">What's the module is about?</span>
                </div>
                <p>
                    The industry requires robust, well-managed and relevant techniques in server-side web
                    programming. This module will expand on students' knowledge and skills necessary for
                    developing software systems to be deployed over the World Wide Web, with a specific
                    focus on server side technologies and techniques. Students will also be introduced to
                    important design pattern considerations for web applications.
                </p>
                <br />
                <p>
                    <b>Aims:</b> To introduce students to the main server-side programming languages and techniques
                    for implementing software to be deployed over the World Wide Web. To examine the factors
                    contributing to web application effectiveness and usability. To provide students with
                    experience in implementing and testing web applications using a specific server-side web
                    programming language.
                </p>
                <br />
                <p>
                    <b>Assignment 1:</b> Class Test [40%]. Theory based test to assess knowledge and understanding
                    of key concepts and provide early feedback to students. The test will be administered online,
                    with marks and feedback available according to University regulations.
                </p>
                <br />
                <p>
                    <b>Assignment 2:</b> Portfolio [60%]. Building upon early practical sessions and the feedback
                    received, students will work on a group-based web development exercise. This will be a problem
                    solving and programming task designed to assess students' grasp of the programming terminology,
                    the development environment, the integration of high-level concepts and the production of a
                    product at a professional level. Starting from week 6 and every two weeks after that, students
                    will be required to submit a reflective document, integrating new material learned with the
                    development of a group project. This should be a 3-page-maximum document showing new code,
                    integration with the project and includes brief reflection. Feedback on this work will be given
                    at opportune times and it is expected that the students will act upon this feedback in preparation
                    for their group work portfolio submission.
                </p>

            </div>
            <div id="sidebar">
                <ul class="style1">
                    @foreach($links as $link)
                    <li class="first">
                        <h3><a href="/links/{{ $link->id }}">{{ $link->title }}</a></h3>
                        <p>Published: {{$link->publication_date}}</p>
                    </li>
                    @endforeach
                </ul>
                <div id="stwo-col">
                    <div class="sbox1">
                        <h2>Technologies</h2>
                        <ul class="style2">
                            <li><a href="https://www.docker.com" target="_blank">Docker</a></li>
                            <li><a href="https://www.php.net" target="_blank">Php</a></li>
                            <li><a href="https://laravel.com" target="_blank">Laravel</a></li>
                            <li><a href="https://www.mysql.com" target="_blank">MySQL</a></li>
                        </ul>
                    </div>
                    <div class="sbox2">
                        <h2>Tools</h2>
                        <ul class="style2">
                            <li><a href="https://code.visualstudio.com" target="_blank">Visual Studio Code</a></li>
                            <li><a href="https://www.jetbrains.com/phpstorm/" target="_blank">Phpstorm</a></li>
                            <li><a href="https://www.phpmyadmin.net" target="_blank">PhpMyAdim</a></li>
                            <li><a href="https://getcomposer.org" target="_blank">Composer</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
