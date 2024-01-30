<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<!-- Helpers -->
<script src="{{asset("dashboard/vendor/js/helpers.js")}}"></script>
<script src="{{asset("dashboard/vendor/libs/jquery/jquery.js")}}"></script>
<script src="{{asset("dashboard/vendor/libs/popper/popper.js")}}"></script>
<script src="{{asset("dashboard/vendor/js/bootstrap.js")}}"></script>
<script src="{{asset("dashboard/vendor/libs/perfect-scrollbar/perfect-scrollbar.js")}}"></script>

<script src="{{asset("dashboard/vendor/js/menu.js")}}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{asset("dashboard/vendor/libs/apex-charts/apexcharts.js")}}"></script>

<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="{{asset("dashboard/js/config.js")}}"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="{{asset("dashboard/js/buttons.js")}}"></script>

<!-- Main JS -->
<script src="{{asset("dashboard/js/main.js")}}"></script>
<script src="{{asset("dashboard/js/updateAtrr.js")}}"></script>

<!-- Page JS -->
<script src="{{asset("dashboard/js/dashboards-analytics.js")}}"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>

<script>
    Morris.Bar({
        element: 'chart',
        data: [
            { date: '04-02-2014', value: 3 },
            { date: '04-03-2014', value: 10 },
            { date: '04-04-2014', value: 5 },
            { date: '04-05-2014', value: 17 },
            { date: '04-06-2014', value: 6 }
        ],
        xkey: 'date',
        ykeys: ['value'],
        labels: ['Orders']
    });
</script>

