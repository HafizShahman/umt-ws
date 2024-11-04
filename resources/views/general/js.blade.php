<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(used by all pages)-->

{{-- sweetalert script --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
<script>
    swal({
    title: "Are you sure?",
    text: "You will not be able to recover this imaginary file!",
    type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",
    confirmButtonText: "Yes, delete it!",   closeOnConfirm: false },
    function(){
        swal("Deleted!", "Your imaginary file has been deleted.", "success");
    });
</script>

<script>
    var status = {
        1: {
            "title": "Pending"
            , "state": "primary"
        }
        , 2: {
            "title": "Delivered"
            , "state": "danger"
        }
        , 3: {
            "title": "Canceled"
            , "state": "primary"
        }
        , 4: {
            "title": "Success"
            , "state": "success"
        }
        , 5: {
            "title": "Info"
            , "state": "info"
        }
        , 6: {
            "title": "Danger"
            , "state": "danger"
        }
        , 7: {
            "title": "Warning"
            , "state": "warning"
        }
    , };

    // $("#table_datatable").DataTable({
    //     "columnDefs": [{
    //         // The `data` parameter refers to the data for the cell (defined by the
    //         // `data` option, which defaults to the column being worked with, in
    //         // this case `data: 0`.
    //         "render": function(data, type, row) {
    //             var index = KTUtil.getRandomInt(1, 7);

    //             return data + '<span class="ms-2 badge badge-light-' + status[index]['state'] +
    //                 ' fw-bold">' + status[index]['title'] + '</span>';
    //         }
    //         , "targets": 1
    //     }]
    // });

    toastr.options = {
        "closeButton": true
        , "debug": false
        , "newestOnTop": false
        , "progressBar": true
        , "positionClass": "toast-top-right"
        , "preventDuplicates": false
        , "onclick": null
        , "showDuration": "300"
        , "hideDuration": "1000"
        , "timeOut": "5000"
        , "extendedTimeOut": "1000"
        , "showEasing": "swing"
        , "hideEasing": "linear"
        , "showMethod": "fadeIn"
        , "hideMethod": "fadeOut"
    };

    @if(Session::has('messege'))
    var type = "{{Session::get('alert-type','info')}}"
    switch (type) {
        case 'info':
            toastr.info("{{Session::get('messege')}}");
            break;
        case 'success':
            toastr.success("{{Session::get('messege')}}");
            break;
        case 'warning':
            toastr.warning("{{Session::get('messege')}}");
            break;
        case 'error':
            toastr.error("{{Session::get('messege')}}");
            break;
    }
    @endif

</script>

<script>
    function goBack() {
        window.history.go(-1);
    }
</script>
