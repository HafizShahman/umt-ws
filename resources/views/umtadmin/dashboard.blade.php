@extends('layouts.app2')
@section('general-style')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
@endsection
@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="page-header">
                
            </div>

            <div class="row layout-top-spacing" id="cancel-row">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>System User Table</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area br-6">
                        <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>User Type</th>
                                    <th>Last Login</th>
                                    <th>Last Logout</th>
                                    <th class="dt-no-sorting">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $num = 1;
                                @endphp
                                @foreach ($usertable as $row)
                                    <tr>
                                        <td>{{ $num++ }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->email }}</td>
                                        <td>
                                            @if ($row->role_id != null)
                                                {{ $row->rolename }}
                                            @else
                                                <span class="badge badge-warning">Role Not Set</span>
                                            @endif
                                        </td>
                                        <td>{{ $row->user_type }}
                                            @if ($row->user_type != null)
                                                {{ $row->user_type }}
                                            @else
                                                <span class="badge badge-warning">User Type Not Available</span>
                                            @endif
                                        </td>
                                        <td>{{ $row->last_login_at }}</td>
                                        <td>{{ $row->last_logout_at }}</td>
                                        <td>
                                            <a href="javascript:void(0);"
                                                class="dropdown-toggle btn btn-light btn-sm"
                                                id="user-profile-dropdown" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <div class="media-body align-self-center">
                                                    <p>Action</p>
                                                </div>
                                            </a>

                                            <div class="dropdown-menu fw-4">
                                                <div class="dropdown-item">
                                                    <form action="{{route('assignrole')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="userid" value="{{$row->id}}">
                                                        <input type="hidden" name="roleid" value="3">
                                                        <button type="submit" class="btn">Assign as User 1</button>
                                                    </form>
                                                </div>
                                                <div class="dropdown-item">
                                                    <form action="{{route('assignrole')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="userid" value="{{$row->id}}">
                                                        <input type="hidden" name="roleid" value="4">
                                                        <button type="submit" class="btn">Assign as User 2</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        @include('general.inc.footer')
    </div>
    <!--  END CONTENT AREA  -->
    @include('general.js.feed_js')
@endsection

@section('page-script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
@endsection
