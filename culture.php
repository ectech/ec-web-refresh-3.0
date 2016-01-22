<!DOCTYPE html>
<html lang="en">
<head>
<script src="testScript.js"></script>
  <title>Team Culture | EC Technology, LLC | Customer-driven software development for government and commercial enterprises.</title>
  <?php include 'includes/head.php'; ?>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="team-culture" class="ectext">
    
    <?php include 'includes/header.php'; echoNavigation('Let’s go backstage.'); ?>
  
  <div id="content">
  <!-- Quality Section -->
  <section id="our-clients" class="container-fluid">
      <div class="row">
          <h1>At the end of the day, a company’s quality is its team.</h1>
          <img src="images/separator_flagstripes.png" />
          <div class="clearfix"/>
          <br/>
          <p class="col-sm-10 col-sm-push-1">We’re constantly searching for candidates who are hungry to develop themselves at Evans &amp; Chambers. More importantly, we’ve created a workplace that feeds them... with a benefits package you’re going to want to ask us about.</p>
      </div>
  </section>
      
  <section id="photos" class="container-fluid"></section>

  <!-- How we see our team? -->
  <section id="our-team" class="container-fluid">
      <div class="row">
              <h1>How we see our team.</h1>
              <img src="images/separator_flagstripes.png" />
              <div class="clearfix"/>
          <br/> 
          <br/>
      </div>
      <div class="row">
          <div class="col-md-6" style="text-align: center; padding:40px 0;">
            <img src="images/icon_culture_circle_gear.png" />
          </div>
          <div class="col-md-6">
            <h1>Work for yourself.</h1>
            <p>Most of the time, our employees aren’t working in our offices. They’re on-site with our clients, often collaborating with third-party organizations in the process.
This means our people aren’t just the mouthpiece of EC; they’re also our hands and feet. We look for candidates who own what they do, who take responsibility for the results they deliver. People who, like entrepreneurs, use their own imagination to get the job done.</p>
          </div>
      </div>
          
      <div class="row">
          <div class="col-md-6">
            <h1>Ask: does it serve the client?</h1>
            <p>Customer service is one of those things people like to talk about... because it matters. At EC, we think cool ideas are great, but if it’s going to fly, it has to benefit the client.</p>
          </div>
          <div class="col-md-6">
            <h1>Say what you do, do what you say.</h1>
            <p>No surprises here. We’re talking accountability and professionalism, plain and simple.</p>
          </div>
      </div>
      
      <div class="row">
          <div class="col-md-6">
            <h1>Make friends with your team.  </h1>
            <p>It’s important to gel with your team when you’re collaborating at a client site. So we’ve put team-building at the core of our company culture. From wilderness ropes courses to competitive cooking lessons, we hold volunteer-planned, company-sponsored events several times a year. We also do regular happy hours, dinners at fine restaurants, summer picnics and holiday parties.</p>
          </div>
          <div class="col-md-6">
            <h1>Stay hungry, keep learning.</h1>
            <p>Every year, we invest generously in paid training opportunities for our employees. We also partner with professional training companies for technical and non-technical team members, from IT to HR.
You’re not just a cog in the wheel here; at EC, you have access to executive management, the leverage to present ideas and be heard, and continual opportunities to expand your skill set by contributing to projects that interest you.<br/><br/><br/></p>
          </div>
      </div>

      <div class="row">
          <div class="col-md-6">
            <h1>Live your zeal. Do you love what you do?  Good: we look for that.</h1>
          </div>
          <div class="col-md-6" style="text-align: center; padding:0;">
            <img src="images/icon_culture_circle_honeycomb.png" />
          </div>
      </div>
      
      <div class="col-lg-12">
          <a href="http://evanschambers.applicantstack.com/x/openings" class="text-center button-box orange">Explore Job Listings</a>
      </div>  
      </div>
  </section>
  
  <!-- Our Benefits -->
  <section id="our-team" class="container-fluid" style="background:#f15d24;"> 
  
      <div class="row">
              <h1 style="color:white;">Our Benefits</h1>
              <img src="images/whiteStripes.png" /> 
              <div class="clearfix"/>
          <br/> 
          <p class="col-sm-10 col-sm-push-1" style="color:white;">At Evans &amp; Chambers, we are committed to fostering a culture that is as rewarding as it is enjoyable.  Our benefits focus on you and your family's health and well-being and plan for your future.  Our goal is to remove the distraction and stress of everyday life, to allow focus on success and career development.  Our best-in-class work force deserves the same caliber of benefits.</p>
      </div>
     <style>
	 
	 /* Inline style sheet for the grid of buttons */
	
	 .square {
    margin-top: 100%;
	 }

.grid{
	margin-bottom:0px;
	padding-bottom:0px;
	padding-left:0px;
	padding-right:0px;
	margin-left:0px;
	margin-right:0px;
	width:250px;
	height:250px;
}

.thumbnail {
    position: absolute;
    top: 0px;
    bottom: 0;
    left: 0px;
    right: 0;
    text-align:center;
    padding-top:calc(50% - 30px);
	margin-top:0px;
	margin-bottom:0px;
	border-radius:0px;
	text-align:left;
	color:white;
	padding-left:10px;
	border: 0px !important;
	outline: 0 !important;
}

.row{
	padding-bottom:5px;
}

.flip-container {
	perspective: 1000;
	padding-left:0px;
	padding-right:0px;
}
	/* flip the pane when clicked */
	.flip-container.hover .flipper, .flip-container.flip .flipper {
	transform: rotateY(180deg);
}


.flipper, .flip-container{
	width:250px;
	height:250px;
}

/* flip speed goes here */
.flipper {
	transition: 0.6s;
	transform-style: preserve-3d;

	position: relative;
}

/* hide back of pane during swap */
.front, .back {
	backface-visibility: hidden;

	position: absolute;
	top: 0;
	left: 0;
}

/* front pane, placed above back */
.front {
	z-index: 2;
	/* quick fix for firefox 31 */
	transform: rotateY(0deg);
}

/* back, initially hidden pane */
.back {
	transform: rotateY(180deg);
}

/* Still need to incorporate IE support -- this will be a quick fix and can be done after the grid sizing is fixed */

/* Jamil,

This is the issue that I am having:

	In getting the buttons to rotate properly, everything that is .flipper, .flip-container, and .grid need to be the same exact size that way they line up and rotate properly.  At the moment, I have it hardcoded to 250px x 250 px.  I cannot figure out how to force these three elements to be the same size and scalable with the bootstrap CSS.  Any insight or help with this would be great. 
	
	Additionally, the grid of buttons is not centered on the page, that would also be helpful.

Thanks,

Aaron

*/
	 </style>
     
	<div class="container" style="margin-top:25px;">
	<div class="row">
    
    <!-- This outermost div is the large container for the entire button -->
    <div class="flip-container col-md-3 col-sm-4 col-xs-6" id="card1">
    <!-- The "flipper" div contains the front and back, which are rotated on click using the JS file testScript.js-->
    <div class="flipper">
    	<div class="front">
        	<!-- front content -->
            <button class="grid" onClick="flipButton1()">
            	<div class="square"></div>
                <p class="thumbnail" style="background-color:#e53800;">Medical, Dental and Vision Insurance</p>
            </button>
        </div>
        <div class="back">
        	<!-- back content -->
            <button class="grid" onClick="flipButton1()">
            	<div class="square"></div>
                <p class="thumbnail" style="background-color:#e53800;">Medical Benefits backside</p>
            </button>
        </div>
    </div>
    </div>
  
  <div class="flip-container col-md-3 col-sm-4 col-xs-6" id="card2">
	<div class="flipper">
		<div class="front">
			<!-- front content -->
             <button class="grid" onClick="flipButton2()">
        		<div class="square"></div>
        		<p class="thumbnail" style="background-color:#ff5c29;">Tuition &amp; Training Reimbursment</p>
      	     </button>
		</div>
		<div class="back">
			<!-- back content -->
             <button class="grid" onClick="flipButton2()">
        		<div class="square"></div>
        		<p class="thumbnail" style="background-color:#ff5c29;">Tuition &amp; Training Backside</p>
      		 </button>
	   </div>
	</div>
	</div>
    
    <div class="flip-container col-md-3 col-sm-4 col-xs-6" id="card3">
    	<div class="flipper">
        	<div class="front">
            	<!-- front content -->
                 <button class="grid" onClick="flipButton3()">
                 	<div class="square"></div>
                    <p class="thumbnail" style="background-color:#ff794c;">Bonus Plans</p>
                 </button>
            </div>
            <div class="back">
            <!-- back content -->
            <button class="grid" onClick="flipButton3()">
            	<div class="square"></div>
                <p class="thumbnail" style="background-color:#ff794c;">Bonus Plans Backside</p>
            </button>
            </div>
        </div>
    </div> 
    
    <div class="flip-container col-md-3 col-sm-4 col-xs-6" id="card4">
    	<div class="flipper">
        	<div class="front">
            	<!-- front content -->
                 <button class="grid" onClick="flipButton4()">
                 	<div class="square"></div>
                    <p class="thumbnail" style="background-color:#b72d00;">Paid Overtime</p>
                 </button>
            </div>
            <div class="back">
            <!-- back content -->
            <button class="grid" onClick="flipButton4()">
            	<div class="square"></div>
                <p class="thumbnail" style="background-color:#b72d00;">Paid Overtime Backside</p>
            </button>
            </div>
        </div>
    </div>
    </div>
    
  <div class="row">
  
  <div class="flip-container col-md-3 col-sm-4 col-xs-6" id="card5">
    	<div class="flipper">
        	<div class="front">
            	<!-- front content -->
                 <button class="grid" onClick="flipButton5()">
                 	<div class="square"></div>
                    <p class="thumbnail" style="background-color:#b72d00;">Annual Leave (pd tme off &amp; holidays)</p>
                 </button>
            </div>
            <div class="back">
            <!-- back content -->
            <button class="grid" onClick="flipButton5()">
            	<div class="square"></div>
                <p class="thumbnail" style="background-color:#b72d00;">Annual Leave Backside</p>
            </button>
            </div>
        </div>
    </div> 
    
    <div class="flip-container col-md-3 col-sm-4 col-xs-6" id="card6">
    	<div class="flipper">
        	<div class="front">
            	<!-- front content -->
                 <button class="grid" onClick="flipButton6()">
                 	<div class="square"></div>
                    <p class="thumbnail" style="background-color:#fe4b11;">401(k) plan with Company contribution</p>
                 </button>
            </div>
            <div class="back">
            <!-- back content -->
            <button class="grid" onClick="flipButton6()">
            	<div class="square"></div>
                <p class="thumbnail" style="background-color:#fe4b11;">401(k) backside</p>
            </button>
            </div>
        </div>
    </div> 
    
    <div class="flip-container col-md-3 col-sm-4 col-xs-6" id="card7">
    	<div class="flipper">
        	<div class="front">
            	<!-- front content -->
                 <button class="grid" onClick="flipButton7()">
                 	<div class="square"></div>
                    <p class="thumbnail" style="background-color:#e53800;">Flexible Spending Accounts</p>
                 </button>
            </div>
            <div class="back">
            <!-- back content -->
            <button class="grid" onClick="flipButton7()">
            	<div class="square"></div>
                <p class="thumbnail" style="background-color:#e53800;">Spending Accounts Backside</p>
            </button>
            </div>
        </div>
    </div> 
    
    <div class="flip-container col-md-3 col-sm-4 col-xs-6" id="card8">
    	<div class="flipper">
        	<div class="front">
            	<!-- front content -->
                 <button class="grid" onClick="flipButton8()">
                 	<div class="square"></div>
                    <p class="thumbnail" style="background-color:#fe4b11;">Life Insurance, short- and long-term disability</p>
                 </button>
            </div>
            <div class="back">
            <!-- back content -->
            <button class="grid" onClick="flipButton8()">
            	<div class="square"></div>
                <p class="thumbnail" style="background-color:#fe4b11;">Life Insurance / Disability backside</p>
            </button>
            </div>
        </div>
    </div> 
  </div>  
  
  <div class="row">
  
  <div class="flip-container col-md-3 col-sm-4 col-xs-6" id="card9">
    	<div class="flipper">
        	<div class="front">
            	<!-- front content -->
                 <button class="grid" onClick="flipButton9()">
                 	<div class="square"></div>
                    <p class="thumbnail" style="background-color:#ff5c29;">Payroll deduction contribution to 529 College Savings Plan</p>
                 </button>
            </div>
            <div class="back">
            <!-- back content -->
            <button class="grid" onClick="flipButton9()">
            	<div class="square"></div>
                <p class="thumbnail" style="background-color:#ff5c29;">College Savings Plans Backside</p>
            </button>
            </div>
        </div>
    </div>
    
    <div class="flip-container col-md-3 col-sm-4 col-xs-6" id="card10">
    	<div class="flipper">
        	<div class="front">
            	<!-- front content -->
                 <button class="grid" onClick="flipButton10()">
                 	<div class="square"></div>
                    <p class="thumbnail" style="background-color:#b72d00;">Paid Parental Leave</p>
                 </button>
            </div>
            <div class="back">
            <!-- back content -->
            <button class="grid" onClick="flipButton10()">
            	<div class="square"></div>
                <p class="thumbnail" style="background-color:#b72d00;">Paid Parental Leave Background</p>
            </button>
            </div>
        </div>
    </div>
    
    <div class="flip-container col-md-3 col-sm-4 col-xs-6" id="card11">
    	<div class="flipper">
        	<div class="front">
            	<!-- front content -->
                 <button class="grid" onClick="flipButton11()">
                 	<div class="square"></div>
                    <p class="thumbnail" style="background-color:#ff794c;">Work/life benefit programs</p>
                 </button>
            </div>
            <div class="back">
            <!-- back content -->
            <button class="grid" onClick="flipButton11()">
            	<div class="square"></div>
                <p class="thumbnail" style="background-color:#ff794c;">Work/life Backside</p>
            </button>
            </div>
        </div>
    </div>
    
    <div class="flip-container col-md-3 col-sm-4 col-xs-6" id="card12">
    	<div class="flipper">
        	<div class="front">
            	<!-- front content -->
                 <button class="grid" onClick="flipButton12()">
                 	<div class="square"></div>
                    <p class="thumbnail" style="background-color:#e53800;">Company outings and team events</p>
                 </button>
            </div>
            <div class="back">
            <!-- back content -->
            <button class="grid" onClick="flipButton12()">
            	<div class="square"></div>
                <p class="thumbnail" style="background-color:#e53800;">Company and Team events Backside</p>
            </button>
            </div>
        </div>
    </div>    
  
  
  </div>
  </div>     
  </section>    
    
  <!-- Footer Section -->
  <?php include 'includes/footer.php'; echoFooter(145); ?>
</body>
</html>
