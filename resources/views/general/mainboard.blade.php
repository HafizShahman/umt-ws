@extends('layouts.app2')
@section('general-style')
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
@endsection
@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <iframe class="position-absolute w-100"
            src="http://wsumtkenyir.net:8080/dashboard/d280c820-9da3-11ef-ae08-d3a4a66f3550?publicId=cef145a0-8ff6-11ef-bec9-c7a144088036"
            frameborder="0" style="position: absolute; top: 0; left: 0;right: 0; overflow: hidden; height:1600px;">
        </iframe>
    </div>
    <!--  END CONTENT AREA  -->
@endsection
