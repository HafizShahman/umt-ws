@extends('layouts.app2')
@section('general-style')
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
@endsection
@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <iframe
                src="http://wsumtkenyir.net:8080/dashboard/1d89a6a0-93ec-11ef-bec9-c7a144088036?publicId=cef145a0-8ff6-11ef-bec9-c7a144088036"
                frameborder="0"></iframe>
        </div>

        @include('general.inc.footer')
    </div>
    <!--  END CONTENT AREA  -->
@endsection
