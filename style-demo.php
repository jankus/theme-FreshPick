<?php echo ipView('_header.php')->render(); ?>

       <!-- content
      ================================================== -->
      <div id="content" class="container">

         <div id="title-section">

            <h2>Style Demo</h2>
            <p>In sed. Vut montes proin, augue, tincidunt, enim nunc cras cursus. Sed non neque elit.</p>

         </div>

         <div class="container">

            <div class="grid6 first">

               <h3>Paragraph and Image</h3>

               <p><a href="#"><img width="216" height="216" class="pull-left" alt="sample-image" src="images/sample-image-216x216.png"></a>
			      Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum.
			      Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu
			      posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum
			      odio, ac blandit ante orci ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra
			      condimentum, lorem tellus eleifend magna, eget fringilla velit magna id neque.
			      posuere nunc justo tempus leo.
			      </p>

               <p>A <a href="#">link</a>,
			      <abbr title="this really isn't a very good description">abbrebation</abbr>,
			      <strong>strong text</strong>,
			      <del>deleted text</del>, and
               <mark>this is a mark text.</mark>
        	      </p>

            </div>

            <div class="grid6">

               <h3>Drop Caps</h3>

               <p class="drop-cap">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
               there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
               Semantics, a large language ocean. A small river named Duden flows by their place and supplies
               it with the necessary regelialia. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu
			      posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum
			      odio, ac blandit ante orci ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra
			      condimentum, lorem tellus eleifend magna, eget fringilla velit magna id neque.
			      </p>

               <h3>Small Print</h3>

               <p>Buy one widget, get one free!
				   <small>(While supplies last. Offer expires on the vernal equinox. Not valid in Ohio.)</small>
			      </p>

            </div>

         </div>

         <div class="container add-bottom">

            <div class="grid6 first">

               <h3>Pull Quotes</h3>

               <aside class="pull-quote">
			         <blockquote>
					      <p>It is a paradisematic country, in which roasted parts of
                     sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind
                     texts it is an almost unorthographic life One day however a small line of blind text by the name
                     of Lorem Ipsum decided to leave for the far World of Grammar.</p>
				      </blockquote>
			      </aside>

            </div>

            <div class="grid6">

               <h3>Block Quotes</h3>

               <blockquote cite="http://where-i-got-my-info-from.com">
			         <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is
                  to do what you believe is great work. And the only way to do great work is to love what you do.
                  If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it.
                  </p>
				      <cite>
					      <a href="#">Steve Jobs</a>
				      </cite>
			      </blockquote>

               <blockquote>
                  <p>Good design is as little design as possible.</p>
                  <cite>Dieter Rams</cite>
               </blockquote>

            </div>

         </div>

         <div class="container add-bottom">

            <div class="grid8 first">

               <h3 class="add-bottom">Definition Lists</h3>

               <h5>a) Multi-line Definitions (default)</h5>

               <dl>
					   <dt><b>This is a term</b></dt>
						   <dd>this is the definition of that term, which both live in a <code>dl</code>.</dd>
					   <dt><b>Another Term</b></dt>
						   <dd>And it gets a definition too, which is this line</dd>
						   <dd>This is a 2<sup>nd</sup> definition for a single term. A <code>dt</code> may be followed by multiple <code>dd</code>s.</dd>
				   </dl>

               <h5>b) Inline Definitions</h5>

               <dl class="lining">
					   <dt><b>This is a term</b></dt>
						   <dd>this is the definition of that term, which both live in a <code>dl</code>.</dd>
					   <dt><b>Another Term</b></dt>
						   <dd class="micro">And it gets a definition too, which is this line</dd>
						   <dd class="micro"> this is a 2<sup>nd</sup> definition for a single term.</dd>
					   <dt><b>Term</b></dt>
					   <dt><b>Other Defined Term</b></dt>
						   <dd><code>dt</code> terms may stand on their own without an accompanying <code>dd</code>, but in that case they <em>share</em> descriptions with the next available <code>dt</code>. You may not have a <code>dd</code> without a parent <code>dt</code>.</dd>
				   </dl>

               <h5>c) Dictionary-style Definition</h5>

               <dl class="dictionary-style">
					   <dt><b>This is a term</b></dt>
						   <dd>this is the definition of that term, which both live in a <code>dl</code>.</dd>
					   <dt><b>Another Term</b></dt>
						   <dd>And it gets a definition too, which is this line</dd>
						   <dd> this is a 2<sup>nd</sup> definition for a single term.</dd>
					   <dt><b>Term</b></dt>
					   <dt><b>Other Defined Term</b></dt>
						   <dd><code>dt</code> terms may stand on their own without an accompanying <code>dd</code>, but in that case they <em>share</em> descriptions with the next available <code>dt</code>. You may not have a <code>dd</code> without a parent <code>dt</code>.</dd>
				   </dl>

            </div>

            <div class="grid4">

               <h3>Example Lists</h3>

               <ol>
				      <li>Here is an example</li>
				      <li>of an ordered list</li>
			      </ol>

               <ul class="disc">
				      <li>Here is an example</li>
				      <li>of an unordered list</li>
			      </ul>


               <h3>Stats Tabs</h3>

               <ul class="stats-tabs">
					   <li><a href="#">1,234 <b>Sasuke</b></a></li>
					   <li><a href="#">567 <b>Hinata</b></a></li>
					   <li><a href="#">23,456 <b>Naruto</b></a></li>
					   <li><a href="#">3,456 <b>Kiba</b></a></li>
					   <li><a href="#">456 <b>Shikamaru</b></a></li>
					   <li><a href="#">26 <b>Sakura</b></a></li>
				   </ul>

               <h3>Headers</h3>

               <h1>H1 Heading</h1>
               <h2>H2 Heading</h2>
               <h3>H3 Heading</h3>
               <h4>H4 Heading</h4>
               <h5>H5 Heading</h5>
               <h6>H6 Heading</h6>

               <hr>

               <h3>button</h3>

               <a class="button" href="#">This is a button</a>

            </div>

         </div>

         <div class="container">

            <h3 class="half-bottom">Columns</h3>

            <!--<h4>1/3 Columns</h4>  -->

            <div class="grid4 first">
		         <p>Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
               nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
               faucibus at, tincidunt eget, porttitor non, dolor. </p>
	         </div>

            <div class="grid4">
		         <p>Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
               nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
               faucibus at, tincidunt eget, porttitor non, dolor. </p>
	         </div>

            <div class="grid4">
		         <p>Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
               nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
               faucibus at, tincidunt eget, porttitor non, dolor. </p>
	         </div>


            <!--<h4>1/4 Columns</h4> -->

            <div class="grid3 first">
		         <p>Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
               nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
               faucibus at, tincidunt eget, porttitor non, dolor. Ut dui lectus, ultrices ut, sodales tincidunt,
               viverra sed, nisl. </p>
	         </div>

            <div class="grid3">
		         <p>Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
               nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
               faucibus at, tincidunt eget, porttitor non, dolor. Ut dui lectus, ultrices ut, sodales tincidunt,
               viverra sed, nisl. </p>
	         </div>

            <div class="grid3">
		         <p>Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
               nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
               faucibus at, tincidunt eget, porttitor non, dolor. Ut dui lectus, ultrices ut, sodales tincidunt,
               viverra sed, nisl. </p>
	         </div>

            <div class="grid3">
		         <p>Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
               nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
               faucibus at, tincidunt eget, porttitor non, dolor. Ut dui lectus, ultrices ut, sodales tincidunt,
               viverra sed, nisl. </p>
	         </div>


            <!--<h4>1/2 Columns</h4> -->

            <div class="grid6 first">
		         <p>Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
               nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
               faucibus at, tincidunt eget, porttitor non, dolor. Ut dui lectus, ultrices ut, sodales tincidunt,
               viverra sed, nisl. </p>
	         </div>

            <div class="grid6">
		         <p>Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
               nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
               faucibus at, tincidunt eget, porttitor non, dolor. Ut dui lectus, ultrices ut, sodales tincidunt,
               viverra sed, nisl. </p>
	         </div>


           <!-- <h4>2/3 Columns</h4>-->

            <div class="grid8 first">
		         <p>Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
               nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
               faucibus at, tincidunt eget, porttitor non, dolor. Ut dui lectus, ultrices ut, sodales tincidunt,
               viverra sed, nisl. </p>
	         </div>

            <div class="grid4">
		         <p>Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
               nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. </p>
	         </div>


           <!-- <h4>3/4 Columns</h4> -->

            <div class="grid9 first">
		         <p>Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
               nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
               faucibus at, tincidunt eget, porttitor non, dolor. Ut dui lectus, ultrices ut, sodales tincidunt,
               viverra sed, nisl. Vivamus ligula ipsum, faucibus at, tincidunt eget, porttitor non, dolor.
               Ut dui lectus, ultrices ut, sodales tincidunt,
               viverra sed, nisl. </p>
	         </div>

            <div class="grid3">
		         <p>Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
               nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. </p>
	         </div>

         </div>

      </div>

      <!-- search section
      ================================================== -->
      <div id="search-section" class="container">
         <form class="cf">

            <div class="grid4 a-left first">
               <label for="regularInput">Search the site</label>
            </div>

            <div class="grid8 a-right">
               <input type="text" id="regularInput">
               <button type="submit">GO</button>
            </div>

         </form>
      </div>


<?php echo ipView('_footer.php')->render(); ?>
