@extends('layouts.app2')
@section('general-style')
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
@endsection
@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="page-header">
                <nav class="breadcrumb-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Improvement
                                Table</a></li>
                    </ol>
                </nav>
            </div>

            <div class="row layout-top-spacing" id="cancel-row">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Improvement Table</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area br-6">
                        <div class="mt-4 ml-4">
                            <button type="button" class="btn btn-primary mb-2 mr-2" data-toggle="modal"
                                data-target="#newdata">
                                Add New Improvement
                            </button>
                        </div>
                        <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Improvement</th>
                                    <th class="dt-no-sorting">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $num = 1;
                                @endphp
                                @foreach ($improve as $row)
                                    <tr>
                                        <td>{{ $num++ }}</td>
                                        <td>{{ $row->improvement }}</td>
                                        <td>
                                            <ul class="table-controls">
                                                <li class="mr-4">
                                                    <a data-placement="top" title="Edit" data-toggle="modal"
                                                        data-target="#editdata{{ $row->id }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-edit-2">
                                                            <path
                                                                d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-toggle="tooltip" data-placement="top" title="Delete"
                                                        href="{{ url('softdelete/improve/' . $row->id) }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-trash-2">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                            </path>
                                                            <line x1="10" y1="11" x2="10"
                                                                y2="17"></line>
                                                            <line x1="14" y1="11" x2="14"
                                                                y2="17"></line>
                                                        </svg>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- Modal edit -->
                                            <div class="modal fade" id="editdata{{ $row->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                Modal title
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-x">
                                                                    <line x1="18" y1="6" x2="6"
                                                                        y2="18">
                                                                    </line>
                                                                    <line x1="6" y1="6" x2="18"
                                                                        y2="18">
                                                                    </line>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <form action="{{ route('edit_update_table') }}" method="POST">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="form-group row mb-4">
                                                                    <label for="hEmail"
                                                                        class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Improvement</label>
                                                                    <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                        <input type="hidden" name="iid"
                                                                            value="{{ $row->id }}">
                                                                        <input type="text" class="form-control"
                                                                            id="hEmail" name="improvement"
                                                                            value="{{ $row->improvement }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn" data-dismiss="modal"><i
                                                                        class="flaticon-cancel-12"></i>
                                                                    Discard</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Soft Deleted Improvement</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area br-6">
                        <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Improvement</th>
                                    <th>Delete date</th>
                                    <th class="dt-no-sorting">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $num = 1;
                                @endphp
                                @foreach ($improvetrash as $row)
                                    <tr>
                                        <td>{{ $num++ }}</td>
                                        <td>{{ $row->improvement }}</td>
                                        <td>{{ Carbon\Carbon::parse($row->deleted_at)->DiffForHumans() }}
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button"
                                                    class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split"
                                                    id="dropdownMenuReference1" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-chevron-down">
                                                        <polyline points="6 9 12 15 18 9"></polyline>
                                                    </svg>
                                                    Action
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuReference1">
                                                    <a class="dropdown-item"
                                                        href="{{ url('restore/improve/' . $row->id) }}">Restore</a>
                                                    <a class="dropdown-item"
                                                        href="{{ url('pdelete/improve/' . $row->id) }}">Soft
                                                        Delete</a>
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
            <!-- Modal new data -->
            <div class="modal fade" id="newdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                    <line x1="18" y1="6" x2="6" y2="18">
                                    </line>
                                    <line x1="6" y1="6" x2="18" y2="18">
                                    </line>
                                </svg>
                            </button>
                        </div>
                        <form action="{{ route('save_update_table') }}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group row mb-4">
                                    <label for="hEmail"
                                        class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Improvement</label>
                                    <div class="col-xl-10 col-lg-9 col-sm-10">
                                        <input type="text" class="form-control" id="hEmail"
                                            placeholder="Improvement" name="improvement">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>
                                    Discard</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        @include('general.inc.footer')
    </div>
    <!--  END CONTENT AREA  -->
@endsection
