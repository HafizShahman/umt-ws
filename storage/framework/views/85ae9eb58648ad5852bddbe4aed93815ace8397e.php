
<?php $__env->startSection('general-style'); ?>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="page-header">
                <nav class="breadcrumb-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">SuperAdmin Dashboard</a></li>
                    </ol>
                </nav>
            </div>

            <div class="row layout-top-spacing">
                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-chart-two">
                        <div class="widget-heading">
                            <h5 class="">Rating For </h5>
                        </div>
                        <div class="widget-content">
                            <div id="stars" class=""></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-chart-two">
                        <div class="widget-heading">
                            <h5 class="">Recommending For </h5>
                        </div>
                        <div class="widget-content">
                            <div id="chartrecommend" class=""></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-chart-two">
                        <div class="widget-heading">
                            <h5 class="">Total User Comment For </h5>
                        </div>
                        <div class="widget-content">
                            <div id="chartcomment" class=""></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-chart-two">
                        <div class="widget-heading">
                            <h5 class="">Rating For </h5>
                        </div>
                        <div class="widget-content">
                            <div id="ratingcolumn" class=""></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-chart-two">
                        <div class="widget-heading">
                            <h5 class="">Statistic </h5>
                        </div>
                        <div class="widget-content">
                            <div id="statistic" class=""></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <?php echo $__env->make('general.inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!--  END CONTENT AREA  -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
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
            "order": [
                [0, "asc"]
            ]
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\umt\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>