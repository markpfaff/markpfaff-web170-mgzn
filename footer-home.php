
            <footer class="index-footer">
                <ul>
                    <li>&copy;Copyright</li>
                    <li><a href="#">MGZN Architects</a></li>
                    <li>All Rights Reserved</li>
                    <li class="big"><a href="#">Web Design By: Mark Pfaff</a></li>
                </ul>

            </footer>
            <div class="footersm index-footersm">
                <ul>
                    <li>&copy;Copyright</li>
                    <li><a href="#">MGZN Architects</a></li>
                    <li>All Rights Reserved</li>
                    <li class="big"><a href="#">Web Design By: Mark Pfaff</a></li>
                </ul>
            </div><!--end footersm div-->  
            <!--Start WP Footer-->
            <?php wp_footer();?>
            <!--End WP Footer-->
        </main>

        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script>

            


            $(document).ready(function(){

                //on nav a hover show brackets
                $("li[id^=\"menu-\"]").hover(function() {
                    $menuID= this.id;
                    $("#" + $menuID + "-select").toggleClass("nav-hover-on");
                   });            

                //Open and close mobile navigation:

                $(".nav-button").click(function () {
                    $(".nav-button,.primary-nav").toggleClass("open");
                    });                       
                

                //portfolio page- on hover switch image  
                  $(".hover-image").hover(function() {
                    $(this).attr("src", $(this).attr("src").replace(/\-off.jpg/, "-on.jpg") );
                            }, function() {
                    $(this).attr("src",$(this).attr("src").replace(/\-on.jpg/, "-off.jpg") );
                    
                   });
                                     
            });

        </script>

    </body>
</html> 


