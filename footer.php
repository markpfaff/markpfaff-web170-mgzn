            </div><!--end middle div-->
            <footer >
                <ul>
                    <li>&copy;Copyright</li>
                    <li><a href="#">MGZN Architects</a></li>
                    <li>All Rights Reserved</li>
                    <li class="big"><a href="#">Web Design By: Mark Pfaff</a></li>
                </ul>

            </footer>
            <div class="footersm ">
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

            

            //Hero image collapses on scroll:
            //Note: line height is set to match navigation_height and navigation_min_height respectively
            navigation_height = 600
            navigation_min_height = 100
            $(window).scroll(function(){
            if(($(document).scrollTop()>=-40) && ($(document).scrollTop()<=(navigation_height-navigation_min_height))){
                    //controls elements dimentions on scroll
                    var s = $(document).scrollTop();
                    console.log(s);
                    $("header").stop().animate({
                        height:navigation_height-s,
                },10);
            // removed following code:
            //	$("header li a").stop().animate({
            //			height:navigation_height-s,
            //			lineHeight:navigation_height-s,
            //    },10);
                    //Elements under navigation bar fix
                    //Laggy? Remove this code. The over flow is has a pretty cool effect anyway.
            //	$("#nextElementFix").stop().animate({
            //			paddingTop:navigation_height-s
            //    },10);
            } else if(($(document).scrollTop()>=-40) && ($(document).scrollTop()>=(navigation_height-navigation_min_height)) ){
                    //hold animation on fast scroll 
                    var s = $(document).scrollTop();
                    $("header").stop().animate({
                        height:navigation_min_height
                    },15);
            //	$("header li a").stop().animate({
            //			height:navigation_min_height,
            //			lineHeight:navigation_min_height,
            //        },15);
            //		$("#nextElementFix").stop().animate({
            //			paddingTop:navigation_min_height-s
            //    	},15);
            }
            });

            //Darkens hero image as  it collapses:
                $(window).scroll (function () {
                    var sT = $(this).scrollTop();
                        if (sT >= 100) {
                            $("#header-color").addClass("change")
                        }else {
                            $("#header-color").removeClass("change")
                        }
                });

            //scroll-arrow div appears when window height is less than 600px 
            //showing there is more content:

                $(document).ready(function(){
                    var wH = $(window).height();
                        if (wH >= 600) {
                            $("#scroll-arrow").addClass("no-display")
                        }else {
                            $("#scroll-arrow").removeClass("no-display")
                        }
                });   


            


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