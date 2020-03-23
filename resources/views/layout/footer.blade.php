<footer class="footer text-center text-sm-left">
                    &copy; 2020 TravelSeeker <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                </footer><!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        <!-- jQuery  -->

        <script src="{{asset ('/js/jquery.min.js')}}"></script>
        <script src="{{asset ('/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset ('/js/metisMenu.min.js')}}"></script>
        <script src="{{asset ('/js/waves.min.js')}}"></script>
        <script src="{{asset ('/js/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset ('/plugins/creditcard/card.js')}}"></script>

        <!-- App js -->
        <script src="{{asset ('/js/app.js' )}} "></script>
        <script>
            new Card({
                form: document.querySelector('.bill-form'),
                container: '.card-wrapper'
            });
        </script>  
    </body>
</html>