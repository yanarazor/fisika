<div id="loading-all" class="modal fade bs-modal-lg">Loadin...</div>
<!-- Modal -->
    <div data-backdrop="static" data-keyboard="false" class="modal fade bs-modal-lg" id="modal-global" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Detail</h4>
                </div>
                <div class="modal-body" id="modal-body">
                Loading content...
                </div>
            </div>
        </div>
    </div>

<!-- Mainly scripts -->
    <script src="<?php echo base_url(); ?>themes/admin/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url(); ?>themes/admin/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>themes/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url(); ?>themes/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
 
    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url(); ?>themes/admin/js/inspinia.js"></script>
    <script src="<?php echo base_url(); ?>themes/admin/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="<?php echo base_url(); ?>themes/admin/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="<?php echo base_url(); ?>themes/admin/js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="<?php echo base_url(); ?>themes/admin/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="<?php echo base_url(); ?>themes/admin/js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="<?php echo base_url(); ?>themes/admin/js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="<?php echo base_url(); ?>themes/admin/js/plugins/toastr/toastr.min.js"></script>
    <script src="<?php echo base_url(); ?>themes/admin/js/razor_app.js"></script>
    <script src="<?php echo base_url(); ?>themes/admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- sweet alert -->
    <script src="<?php echo base_url(); ?>themes/admin/js/sweetalert.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>themes/admin/css/sweetalert.css">
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.success('Responsive Admin Theme', 'Welcome to Portal Fisika');

            }, 1300);


            var data1 = [
                [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
            ];
            var data2 = [
                [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
            ];
            $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                data1, data2
            ],
                    {
                        series: {
                            lines: {
                                show: false,
                                fill: true
                            },
                            splines: {
                                show: true,
                                tension: 0.4,
                                lineWidth: 1,
                                fill: 0.4
                            },
                            points: {
                                radius: 0,
                                show: true
                            },
                            shadowSize: 2
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            tickColor: "#d5d5d5",
                            borderWidth: 1,
                            color: '#d5d5d5'
                        },
                        colors: ["#1ab394", "#1C84C6"],
                        xaxis:{
                        },
                        yaxis: {
                            ticks: 4
                        },
                        tooltip: false
                    }
            );

            var doughnutData = {
                labels: ["App","Software","Laptop" ],
                datasets: [{
                    data: [300,50,100],
                    backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
                }]
            } ;


            var doughnutOptions = {
                responsive: false,
                legend: {
                    display: false
                }
            };


            var ctx4 = document.getElementById("doughnutChart").getContext("2d");
            new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

            var doughnutData = {
                labels: ["App","Software","Laptop" ],
                datasets: [{
                    data: [70,27,85],
                    backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
                }]
            } ;


            var doughnutOptions = {
                responsive: false,
                legend: {
                    display: false
                }
            };


            var ctx4 = document.getElementById("doughnutChart2").getContext("2d");
            new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

        });
    </script>
<script type="text/javascript">
$('body').on('click','.show-modal',function (event) { 
    $('.perhatian').fadeOut(300, function(){});
      event.preventDefault();
      var currentBtn = $(this);
      var title = currentBtn.attr("tooltip");
      //alert(currentBtn.attr("href"));
      $.ajax({
      url: currentBtn.attr("href"),
      type: 'post',
      beforeSend: function (xhr) {
          $("#loading-all").show();
      },
      success: function (content, status, xhr) {
          var json = null;
          var is_json = true;
          try {
            json = $.parseJSON(content);
          } catch (err) {
            is_json = false;
          }
          if (is_json == false) {
            $("#modal-body").html(content);
            $("#myModalLabel").html(title);
            $("#modal-global").modal('show');
            $("#loading-all").hide();
          } else {
            alert("Error");
          }
      }
      }).fail(function (data, status) {
      if (status == "error") {
          alert("Error");
      } else if (status == "timeout") {
          alert("Error");
      } else if (status == "parsererror") {
          alert("Error");
      }
      });
  });
 
  
</script>
</body>
</html>