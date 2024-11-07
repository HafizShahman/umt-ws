
<?php $__env->startSection('general-style'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="page-header">
                <nav class="breadcrumb-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Setting</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Profile</a></li>
                    </ol>
                </nav>
            </div>

            <div class="account-settings-container layout-top-spacing">

                <div class="account-content">
                    <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll"
                        data-offset="-100">
                        <div class="row">
                            
                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                <form id="general-info" class="section general-info"
                                    action="<?php echo e(route('updatepersonalinfo')); ?>" method="post"
                                    enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="info">
                                        <h6 class="">General Information</h6>
                                        <div class="row">
                                            <div class="col-lg-10 mx-auto">
                                                <div class="row">
                                                    <div class="col-xl-2 col-lg-12 col-md-4">
                                                        <?php if(isset($user->profile_photo_path)): ?>
                                                            <div class="upload mt-4 pr-md-4">
                                                                <input type="file" id="input-file-max-fs" class="dropify"
                                                                    name="image"
                                                                    data-default-file="<?php echo e(asset($user->profile_photo_path)); ?>"
                                                                    data-max-file-size="2M" />
                                                                <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i>
                                                                    Upload Picture</p>
                                                            </div>
                                                        <?php else: ?>
                                                            <div class="upload mt-4 pr-md-4">
                                                                <input type="file" id="input-file-max-fs" class="dropify"
                                                                    name="image"
                                                                    data-default-file="<?php echo e(asset('assets/assets/img/200x200.jpg')); ?>"
                                                                    data-max-file-size="2M" />
                                                                <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i>
                                                                    Upload Picture</p>
                                                            </div>
                                                        <?php endif; ?>

                                                    </div>
                                                    <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                        <div class="form">
                                                            <div class="form-group">
                                                                <label for="fullName">Full Name</label>
                                                                <input type="text" class="form-control mb-4"
                                                                    id="fullName" value="<?php echo e($user->name); ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="profession">Email</label>
                                                                <input type="email" class="form-control mb-4"
                                                                    id="email" value="<?php echo e($user->email); ?>">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-8 col-lg-12 col-md-8">
                                                    </div>
                                                    <div class="col-xl-2 col-lg-12 col-md-8">
                                                        <div class="form">
                                                            <div class="form-group">
                                                                <input type="reset" class="form-control btn btn-danger"
                                                                    value="Reset">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-12 col-md-8">
                                                        <div class="form">
                                                            <div class="form-group">
                                                                <input type="submit" class="form-control btn btn-primary"
                                                                    value="Save">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            

                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                <form id="general-info" class="section general-info" enctype="multipart/form-data"
                                    method="POST" action="<?php echo e(route('users.destroy', $user->id)); ?>">
                                    <div class="info">
                                        <?php echo csrf_field(); ?>
                                        <h6 class="">Delete Account</h6>
                                        <div class="row">
                                            <div class="col-lg-10 mx-auto">
                                                <div class="row">

                                                    <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                        <div class="form">
                                                            <div class="form-group">
                                                                <p for="fullName">Are you sure you want to delete your
                                                                    account? Once your account is deleted, all of its
                                                                    resources and data will be permanently deleted. Please
                                                                    enter your password to confirm you would like to
                                                                    permanently delete your account.</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-2 col-lg-12 col-md-8">
                                                        <div class="form">
                                                            <div class="form-group">
                                                                <input name="_method" type="hidden" value="DELETE">
                                                                <button
                                                                    class="form-control btn btn-primary warning cancel html-jquery"
                                                                    type="submit" data-toggle="tooltip"
                                                                    title='Delete'>Delete
                                                                    Account</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <?php echo $__env->make('general.inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!--  END CONTENT AREA  -->
    <?php echo $__env->yieldPushContent('modals'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('general-script'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <script type="text/javascript">
        $('.widget-content .warning .cancel .html-jquery').on('click', function() {
            const swalWithBootstrapButtons = swal.mixin({
                confirmButtonClass: 'btn btn-success btn-rounded',
                cancelButtonClass: 'btn btn-danger btn-rounded mr-3',
                buttonsStyling: false,
            })

            swalWithBootstrapButtons({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true,
                padding: '2em'
            }).then(function(result) {
                if (result.value) {
                    swalWithBootstrapButtons(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }
            })
        })
    </script>
    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script src="<?php echo e(asset('assets/plugins/table/datatable/datatables.js')); ?>"></script>
    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
    <script src="<?php echo e(asset('assets/plugins/table/datatable/button-ext/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/table/datatable/button-ext/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/table/datatable/button-ext/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/table/datatable/button-ext/buttons.print.min.js')); ?>"></script>
    <script>
        $('#html5-extension').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
                "<'table-responsive'tr>" +
                "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            buttons: {
                buttons: [{
                        extend: 'copy',
                        className: 'btn btn-sm'
                    },
                    {
                        extend: 'csv',
                        className: 'btn btn-sm'
                    },
                    {
                        extend: 'excel',
                        className: 'btn btn-sm'
                    },
                    {
                        extend: 'print',
                        className: 'btn btn-sm'
                    }
                ]
            },
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7
        });
    </script>
    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->
    <?php echo \Livewire\Livewire::scripts(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\umt-ws\resources\views/profile/profile.blade.php ENDPATH**/ ?>