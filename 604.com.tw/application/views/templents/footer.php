 <?$assestsurl=base_url()."assests/static/"?>
 </section>
        <!-- End page content -->
        <!-- Start footer area -->
        <footer id="footer" class="footer-area">
        
            <div class="footer-bottom-area">
                <div class="container">
              <!--       <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="copyright">
                                <p>Copyright &copy; 2017.Company name All rights reserved.<a target="_blank" href="<?=$assestsurl?>http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
                            </div>
                        </div>
                        <div class="col-md-5 hidden-sm hidden-xs">
                            <nav>
                                <ul class="footer-bottom-menu">
                                    <li><a href="<?=$assestsurl?>#">Site Map</a></li>
                                    <li><a href="<?=$assestsurl?>contact.html">Contact Us</a></li>
                                    <li><a href="<?=$assestsurl?>">Wish List</a></li>
                                    <li><a href="<?=$assestsurl?>#">Newsletter</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="payment-method b-img">
                                <img alt="" src="<?=$assestsurl?>images/footer/footer-bottom.png">
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </footer>
        <!-- End footer area -->               
    </div>
     <script type="text/javascript">
        
  function addtocart(id){

     $.ajax({
         url:"<?=base_url()?>index/addcart",
         method:"post",
         data:{prod_id:id},
         success:function(data){

            $("#gocart").html(data);
             
         
         }

        });
        
}
  function removetocart(id){

     $.ajax({
         url:"<?=base_url()?>index/removetocart",
         method:"post",
         data:{prod_id:id},
         success:function(data){

           
            $("#gocart").html(data);
             
         
         }

        });
        
}
   

    </script>
    <!-- Body main wrapper end -->    

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="<?=$assestsurl?>js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="<?=$assestsurl?>js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="<?=$assestsurl?>js/plugins.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="<?=$assestsurl?>js/main.js"></script>

</body>

</html>