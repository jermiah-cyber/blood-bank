






     <footer class="footer pt-5">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
           <!--  <div class="copyright text-center text-sm text-muted text-lg-start">
              © <script>
                document.write(new Date().getFullYear())
              </script>,
              made with <i class="fa fa-heart"></i> by
              <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
              for a better web.
            </div>-->
          </div> 
          <div class="col-lg-12">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
             <!--  <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
              </li> -->
               <li class="nav-item">
                <a href="#" class="nav-link pe-0 text-muted" target="_blank">About us</a>
              </li>

               <li class="nav-item">
                <a href="#" class="nav-link pe-0 text-muted" target="_blank">service</a>
              </li>

               <li class="nav-item">
                <a href="#" class="nav-link pe-0 text-muted" target="_blank">contact</a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link pe-0 text-muted" target="_blank">About</a>
              </li>

            </ul>
          </div>
        </div>
      </div>
    </footer>
  </main>
<script src="../assets/js/core/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/core/sweetAlert.js"></script>

<?php 
 if (isset($_SESSION['status']) && $_SESSION['status'] !='' ) {
   echo $_SESSION['status'];

  ?>
   <script type="text/javascript"> 
     swal("Hello world!");
         swal({
           title: "<?php echo $_SESSION['status']; ?>",
           text: "You clicked the button!",
           icon: "<?php echo $_SESSION['status_code']; ?>",
           button: "insert",
         });
     <?php 
    unset($_SESSION['status']);
}
     ?>
</script>

</body>
</html>