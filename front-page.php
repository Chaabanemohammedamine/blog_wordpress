<?php
 get_header();

?>
        <div class="home">
            <h1>Hello I am photographer</h1>
            <p class="text-start">
                The profession of a photographer involves taking good photographs of a subject.<br>
                Whether he's working on a news cover, a wedding, or even taking pictures of <br>
                illustrative models,his main goal is to capture the subject of his photos as well as possible.
            </p>
            <a href="Contact.html"> <button type="button" class="btn myhome">My Contact</button></a>
          
          </div>
          <?php
            if( have_posts()){
                while( have_posts()){

                the_post();
                the_content();
                }

            }
          ?>
         
    </section>

<?php
 get_footer();

?>
 
   