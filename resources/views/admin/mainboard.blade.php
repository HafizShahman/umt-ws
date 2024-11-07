@extends('layouts.app2')
@section('general-style')
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
@endsection
@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <iframe height="1080px" width="100%"
            src="http://wsumtkenyir.net:8080/dashboard/04a69090-8ebe-11ef-bec9-c7a144088036?publicId=cef145a0-8ff6-11ef-bec9-c7a144088036"
            frameborder="0"></iframe>


        @include('general.inc.footer')
    </div>
    <!--  END CONTENT AREA  -->
@endsection
