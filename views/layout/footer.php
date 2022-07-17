<div class="position-bottom">
      <footer class="footer pt-2 ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                Politeknik Caltex Riau
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  Muhammad Ghiyats Rasyid
                </li>
                <li class="nav-item">
                  (2055301090)
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="<?=base_url('assets/')?>js/core/popper.min.js"></script>
  <script src="<?=base_url('assets/')?>js/core/bootstrap.min.js"></script>
  <script src="<?=base_url('assets/')?>js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?=base_url('assets/')?>js/plugins/smooth-scrollbar.min.js"></script>
  <script src="<?= base_url('assets/')?>js/plugins/chartjs.min.js"></script>

  <!-- <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script> -->
  <!-- Github buttons -->
  <script src="<?= base_url('assets/')?>vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?= base_url('assets/')?>vendor/jquery/jquery.min.js"></script>

  <script src="https://demos.creative-tim.com/test/argon-dashboard-pro/assets/js/plugins/datatables.js" type="text/javascript"></script>
  <!-- <script src="https://demos.creative-tim.com/argon-dashboard-pro-bs4/assets/vendor/jquery/dist/jquery.min.js" type="text/javascript"></script>
  <script src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="https://demos.creative-tim.com/argon-dashboard-pro-bs4/assets/vendor/prismjs/prism.js" type="text/javascript"></script>
  <script src="https://demos.creative-tim.com/argon-design-system-pro/assets/demo/docs.min.js" type="text/javascript"></script>
  <script src="https://demos.creative-tim.com/argon-design-system-pro/assets/demo/vendor/holder.min.js" type="text/javascript"></script>
  <script src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/js/plugins/moment.min.js" type="text/javascript"></script> -->
  <script type="text/javascript">
      const dataTableBasic = new simpleDatatables.DataTable(
        "#datatable-basic",
        {
          searchable: true,
          fixedHeight: true
        }
      );
    </script>
<!-- <script src="https://demos.creative-tim.com/test/argon-dashboard-pro/assets/js/argon-dashboard.min.js?v=1.0.0" type="text/javascript"></script> -->

  <script src="<?= base_url('assets/')?>js/sb-admin-2.min.js"></script>
    <script>
        $('.custom-file-input').on('change', function(){
            let fileName = $($this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        })
        $(document).ready(function(){
            $("#jumlah").on('keydown keyup change blur', function() {
                var harga = $("#harga").val();
                var jumlah = $("#jumlah").val();

                var total = parseInt(harga) * parseInt(jumlah);
                $("#total").val(total);
                if (paseInt($('input[name="stok"]').val()) <= parseInt(jumlah)) {
                    alert('stok tidak tersedia! stok tersedia! : ' + parseInt($('input[name="stok"]').val()))
                    reset()
                }
            });

            function reset() {
                $('input[name="jumlah"]').val('')
                $('input[name="total"]').val('')
            }
        })
    </script>

  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?=base_url('assets/')?>js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>