<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="{{ asset('assets/assets/js/custom.js') }}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
<script src="{{ asset('assets/plugins/table/datatable/datatables.js') }}"></script>
<!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
<script src="{{ asset('assets/plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/table/datatable/button-ext/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/table/datatable/button-ext/buttons.print.min.js') }}"></script>
<script>
    var rangeloop = [];
    for (let rangeloop = 1; rangeloop <= 12; rangeloop++) {
        $('#html5-extension' + rangeloop).DataTable({
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
            "lengthMenu": [10, 15, 30, 50],
            "pageLength": 10
        });

    }
</script>
<script>
    function myFunction() {
        var x = document.getElementById("monthselect").value;
        // document.getElementById("demo").innerHTML = "You selected: " + x;

        if (x == 'January') {
            document.getElementById("monthtbl1").style.display = "block";
            document.getElementById("monthtbl2").style.display = "none";
            document.getElementById("monthtbl3").style.display = "none";
            document.getElementById("monthtbl4").style.display = "none";
            document.getElementById("monthtbl5").style.display = "none";
            document.getElementById("monthtbl6").style.display = "none";
            document.getElementById("monthtbl7").style.display = "none";
            document.getElementById("monthtbl8").style.display = "none";
            document.getElementById("monthtbl9").style.display = "none";
            document.getElementById("monthtbl10").style.display = "none";
            document.getElementById("monthtbl11").style.display = "none";
            document.getElementById("monthtbl12").style.display = "none";
        } else if (x == 'February') {
            document.getElementById("monthtbl1").style.display = "none";
            document.getElementById("monthtbl2").style.display = "block";
            document.getElementById("monthtbl3").style.display = "none";
            document.getElementById("monthtbl4").style.display = "none";
            document.getElementById("monthtbl5").style.display = "none";
            document.getElementById("monthtbl6").style.display = "none";
            document.getElementById("monthtbl7").style.display = "none";
            document.getElementById("monthtbl8").style.display = "none";
            document.getElementById("monthtbl9").style.display = "none";
            document.getElementById("monthtbl10").style.display = "none";
            document.getElementById("monthtbl11").style.display = "none";
            document.getElementById("monthtbl12").style.display = "none";
        } else if (x == 'March') {
            document.getElementById("monthtbl1").style.display = "none";
            document.getElementById("monthtbl2").style.display = "none";
            document.getElementById("monthtbl3").style.display = "block";
            document.getElementById("monthtbl4").style.display = "none";
            document.getElementById("monthtbl5").style.display = "none";
            document.getElementById("monthtbl6").style.display = "none";
            document.getElementById("monthtbl7").style.display = "none";
            document.getElementById("monthtbl8").style.display = "none";
            document.getElementById("monthtbl9").style.display = "none";
            document.getElementById("monthtbl10").style.display = "none";
            document.getElementById("monthtbl11").style.display = "none";
            document.getElementById("monthtbl12").style.display = "none";
        } else if (x == 'April') {
            document.getElementById("monthtbl1").style.display = "none";
            document.getElementById("monthtbl2").style.display = "none";
            document.getElementById("monthtbl3").style.display = "none";
            document.getElementById("monthtbl4").style.display = "block";
            document.getElementById("monthtbl5").style.display = "none";
            document.getElementById("monthtbl6").style.display = "none";
            document.getElementById("monthtbl7").style.display = "none";
            document.getElementById("monthtbl8").style.display = "none";
            document.getElementById("monthtbl9").style.display = "none";
            document.getElementById("monthtbl10").style.display = "none";
            document.getElementById("monthtbl11").style.display = "none";
            document.getElementById("monthtbl12").style.display = "none";
        } else if (x == 'May') {
            document.getElementById("monthtbl1").style.display = "none";
            document.getElementById("monthtbl2").style.display = "none";
            document.getElementById("monthtbl3").style.display = "none";
            document.getElementById("monthtbl4").style.display = "none";
            document.getElementById("monthtbl5").style.display = "block";
            document.getElementById("monthtbl6").style.display = "none";
            document.getElementById("monthtbl7").style.display = "none";
            document.getElementById("monthtbl8").style.display = "none";
            document.getElementById("monthtbl9").style.display = "none";
            document.getElementById("monthtbl10").style.display = "none";
            document.getElementById("monthtbl11").style.display = "none";
            document.getElementById("monthtbl12").style.display = "none";
        } else if (x == 'Jun') {
            document.getElementById("monthtbl1").style.display = "none";
            document.getElementById("monthtbl2").style.display = "none";
            document.getElementById("monthtbl3").style.display = "none";
            document.getElementById("monthtbl4").style.display = "none";
            document.getElementById("monthtbl5").style.display = "none";
            document.getElementById("monthtbl6").style.display = "block";
            document.getElementById("monthtbl7").style.display = "none";
            document.getElementById("monthtbl8").style.display = "none";
            document.getElementById("monthtbl9").style.display = "none";
            document.getElementById("monthtbl10").style.display = "none";
            document.getElementById("monthtbl11").style.display = "none";
            document.getElementById("monthtbl12").style.display = "none";
        } else if (x == 'July') {
            document.getElementById("monthtbl1").style.display = "none";
            document.getElementById("monthtbl2").style.display = "none";
            document.getElementById("monthtbl3").style.display = "none";
            document.getElementById("monthtbl4").style.display = "none";
            document.getElementById("monthtbl5").style.display = "none";
            document.getElementById("monthtbl6").style.display = "none";
            document.getElementById("monthtbl7").style.display = "block";
            document.getElementById("monthtbl8").style.display = "none";
            document.getElementById("monthtbl9").style.display = "none";
            document.getElementById("monthtbl10").style.display = "none";
            document.getElementById("monthtbl11").style.display = "none";
            document.getElementById("monthtbl12").style.display = "none";
        } else if (x == 'August') {
            document.getElementById("monthtbl1").style.display = "none";
            document.getElementById("monthtbl2").style.display = "none";
            document.getElementById("monthtbl3").style.display = "none";
            document.getElementById("monthtbl4").style.display = "none";
            document.getElementById("monthtbl5").style.display = "none";
            document.getElementById("monthtbl6").style.display = "none";
            document.getElementById("monthtbl7").style.display = "none";
            document.getElementById("monthtbl8").style.display = "block";
            document.getElementById("monthtbl9").style.display = "none";
            document.getElementById("monthtbl10").style.display = "none";
            document.getElementById("monthtbl11").style.display = "none";
            document.getElementById("monthtbl12").style.display = "none";
        } else if (x == 'September') {
            document.getElementById("monthtbl1").style.display = "none";
            document.getElementById("monthtbl2").style.display = "none";
            document.getElementById("monthtbl3").style.display = "none";
            document.getElementById("monthtbl4").style.display = "none";
            document.getElementById("monthtbl5").style.display = "none";
            document.getElementById("monthtbl6").style.display = "none";
            document.getElementById("monthtbl7").style.display = "none";
            document.getElementById("monthtbl8").style.display = "none";
            document.getElementById("monthtbl9").style.display = "block";
            document.getElementById("monthtbl10").style.display = "none";
            document.getElementById("monthtbl11").style.display = "none";
            document.getElementById("monthtbl12").style.display = "none";
        } else if (x == 'October') {
            document.getElementById("monthtbl1").style.display = "none";
            document.getElementById("monthtbl2").style.display = "none";
            document.getElementById("monthtbl3").style.display = "none";
            document.getElementById("monthtbl4").style.display = "none";
            document.getElementById("monthtbl5").style.display = "none";
            document.getElementById("monthtbl6").style.display = "none";
            document.getElementById("monthtbl7").style.display = "none";
            document.getElementById("monthtbl8").style.display = "none";
            document.getElementById("monthtbl9").style.display = "none";
            document.getElementById("monthtbl10").style.display = "block";
            document.getElementById("monthtbl11").style.display = "none";
            document.getElementById("monthtbl12").style.display = "none";
        } else if (x == 'November') {
            document.getElementById("monthtbl1").style.display = "none";
            document.getElementById("monthtbl2").style.display = "none";
            document.getElementById("monthtbl3").style.display = "none";
            document.getElementById("monthtbl4").style.display = "none";
            document.getElementById("monthtbl5").style.display = "none";
            document.getElementById("monthtbl6").style.display = "none";
            document.getElementById("monthtbl7").style.display = "none";
            document.getElementById("monthtbl8").style.display = "none";
            document.getElementById("monthtbl9").style.display = "none";
            document.getElementById("monthtbl10").style.display = "none";
            document.getElementById("monthtbl11").style.display = "block";
            document.getElementById("monthtbl12").style.display = "none";
        } else if (x == 'December') {
            document.getElementById("monthtbl1").style.display = "none";
            document.getElementById("monthtbl2").style.display = "none";
            document.getElementById("monthtbl3").style.display = "none";
            document.getElementById("monthtbl4").style.display = "none";
            document.getElementById("monthtbl5").style.display = "none";
            document.getElementById("monthtbl6").style.display = "none";
            document.getElementById("monthtbl7").style.display = "none";
            document.getElementById("monthtbl8").style.display = "none";
            document.getElementById("monthtbl9").style.display = "none";
            document.getElementById("monthtbl10").style.display = "none";
            document.getElementById("monthtbl11").style.display = "none";
            document.getElementById("monthtbl12").style.display = "block";
        }
    }
</script>
