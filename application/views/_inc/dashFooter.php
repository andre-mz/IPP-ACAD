                </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; SG-ACAD PIXEL 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!--Modal Logout-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Terminar sess&atilde;o</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="modal-body text-center">Clique em <strong>SAIR</strong> para terminar a sess&atilde;o.</div>
                <div class="modal-footer">
                    <button class="btn btn-lg btn-block btn-cancel" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-lg btn-block btn-logout" href="<?= base_url()?>Auth/logoutUser">Sair</a>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="confirmPayment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmar pagamento</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    
                </div>
                <div class="modal-footer">
                    <!--button class="btn btn-lg btn-block btn-cancel" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-lg btn-block btn-logout" href="<?= base_url()?>Auth/logoutUser">Sair</a-->
                </div>
            </div>
        </div>
    </div>

    


    <!--div class="modal fade" id="logoutActivitie" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nova actividade</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    
                </div>
                <div class="modal-footer">
                    <!--button class="btn btn-lg btn-block btn-cancel" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-lg btn-block btn-logout" href="<?= base_url()?>Auth/logoutUser">Sair</a->
                </div>
            </div>
        </div>
    </div-->




    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/dash/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?= base_url('assets/dash/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/dash/vendor/jquery-easing/jquery.easing.min.js')?>"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/dash/js/sb-admin-2.min.js')?>"></script>
    <!-- Page level plugins -->
    <script src="<?= base_url('assets/dash/vendor/chart.js/Chart.min.js')?>"></script>
    <!-- Page level custom scripts -->
    <script src="<?= base_url('assets/dash/js/demo/chart-area-demo.js')?>"></script>
    <script src="<?= base_url('assets/dash/js/demo/chart-pie-demo.js')?>"></script>
    <!--script src="?= base_url('assets/js/validacao.js')?>"></script--
    <script src="<?= base_url('assets/js/validacaoipp.js')?>"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.6/js/bootstrap-select.min.js"></script>


    <script src="<?=base_url('assets/dash/datatables/jquery.dataTables.min.js')?>"></script>
    <script src="<?=base_url('assets/dash/datatables/dataTable-PT.js')?>"></script>
    <script src="<?=base_url('assets/dash/datatables/dataTables.bootstrap4.min.js')?>"></script>
    <script type="text/javascript">
        $(function() {
            $('.datepicker').datepicker();
        });
    </script>
</body>
</html>