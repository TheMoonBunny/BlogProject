@extends('layouts.layout')
@section ('content')

@include('layouts.hotTopic')

<div class="wrapper">
 
    <div class="wrapper-text">
        {{-- <button class='btn' onclick="myFunction()">Dark Mode</button> --}}

       
        <p>
            <h1 class="titles">Hello welcome to HowToComputerLife,</h1>
            <br>
            This blog is mainly made to help people with small programm tips and tricks.
            <br>
            There will be weekly post and/or updates to previous post, so come back and check what's new!
            <br>

            <br>
            <br>
            <br>
            <h2>Latest Updates:</h2>
            <div class="wrapper-text-inner">
                <br>
                6/10/2020 = fixed layout
                <br>
                <br>
                1/10/2020 = Made category in navbar
                <br>
                <br>
                21/9/2020 = added 2 new posts (for PHP & Database).
                <br><br>
                18/9/2020 = added first post.
                <br><br>
                9/9/2020 = new content for footer and removed search function in navbar. 
                <br><br>
                5/9/2020 = Made github repository.
                <br><br>
                4/9/2020 = setup the website.

            </div>
        </p>
            

        </p>
    </div>
</div>
@endsection