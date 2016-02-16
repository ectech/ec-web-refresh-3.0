<!DOCTYPE html>
<html lang="en">
<head>
<script src="js/benefitsScript.js"></script>
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
  <section id="our-team" class="container-fluid" style="background:#f15d24; padding-left: 0; padding-right: 0; padding-bottom: 0;"> 
  
      <div class="row" style="padding: 0;">
              <h1 style="color:white;">Our Benefits</h1>
              <img src="images/whiteStripes.png" /> 
              <div class="clearfix"></div>
          <br/> 
          <p class="col-sm-10 col-sm-push-1" style="color:white;">At Evans &amp; Chambers, we are committed to fostering a culture that is as rewarding as it is enjoyable.  Our benefits focus on your and your family's health and well-being and plan for your future.  Our goal is to remove the distraction and stress of everyday life, to allow focus on success and career development.  Our best-in-class workforce deserves the same caliber of benefits.</p>
      </div>
<style>
	 
/* Inline style sheet for the grid of buttons */
.row{
	padding-bottom:5px;
}

/* flip speed goes here */
.flipper {
	transition: 0.6s;
	transform-style: preserve-3d;
	/* position: relative; */
}

/* hide back of pane during swap */
.front, .back {
    perspective: 1000px;
	backface-visibility: hidden;
	position: absolute;
	top: 0;
	left: 0;
    height: 360px;
    padding: 30px;
    margin-bottom:0px;
    margin-top:0;
	padding-bottom:0px;
	margin-left:0px;
	margin-right:0px;
    cursor: pointer;
    width: 100%;
    
}

/* front pane, placed above back */
.front {
	z-index: 2;
	/* quick fix for firefox 31 */
	transform: rotateY(0deg);
    background-image: url('images/icon_benefits_square_plus.gif');
    background-repeat: no-repeat;
    background-position: right bottom;
}

/* back, initially hidden pane */
.back {
	transform: rotateY(180deg);
    background-color: white;
    color: black;
    font-size: 15px;
    line-height: 25px;
    padding: 40px;
    
}

/* flip the pane when clicked */
.flip-box.flip .flipper {
    transform: rotateY(180deg);
}
div.flip-box {
    perspective: 1000px;
    background-color: #455560;
    height: 360px;
    font-size: 38px;
    line-height: 45px;
    color: white;          
    perspective: 1000;
    padding-left: 0;
    padding-right: 0;

}
 div.mini-horizontal-bar {
     width: 100px;
     border-top: 1px solid white;
     height: 2px;
     margin-bottom: 30px;
     margin-top: 80px;
 }
         
/* Still need to incorporate IE support -- this will be a quick fix and can be done after the grid sizing is fixed */
	 </style>
      
     <div class="flip-wrapper" style="margin-top: 80px">
        <div class="flip-box col-lg-3 col-md-4 col-sm-6 col-xs-6" id="card1">
            <div class="flipper">
                <!-- The "flipper" div contains the front and back, which are rotated on click 
                        using the JS file testScript.js-->
                <div class="front" onClick="flipButton(this)" style="background-color: #e53800;">
                    <div class="mini-horizontal-bar"></div>
                    Medical, Dental and Vision Insurance
                </div>
                <div class="back" onClick="flipButton(this)">EC offers a premier healthcare offering through CareFirst Blue Cross/Blue Shield, Healthy Advantage BlueChoice medical insurance. This plan enables you to visit any licensed physician or healthcare facility for treatment, offering in-network providers and out-of-network provider coverage. EC's Dental and Vision insurance plans are provided by CareFirst Blue Cross/Blue Shield. Plans provide coverage for preventative, routine and major work.</div>
            </div>
        </div> 
        <div class="flip-box col-lg-3 col-md-4 col-sm-6" id="card2">
            <div class="flipper">
                <div class="front" onClick="flipButton(this)" style="background-color: #ff5c29">
                    <div class="mini-horizontal-bar"></div>
                    Tuition &amp; Training Reimbursment
                </div>
                <div class="back" onClick="flipButton(this)">EC promotes participation in professional courses, conferences, seminars, and/or online training programs through our academic reimbursement program. If you’re seeking an advanced degree in a relevant field, EC offers tuition assistance to eligible employees who complete job related courses. Each employee is allowed a period of paid time off for training purposes based on the scheduled training.</div>
            </div>
        </div> 
        <div class="flip-box col-lg-3 col-md-4 col-sm-6" id="card3">
            <div class="flipper">
                <div class="front" onClick="flipButton(this)" style="background-color: #ff794d">
                    <div class="mini-horizontal-bar"></div>
                    Bonus Plans
                </div>
                <div class="back" onClick="flipButton(this)">
                    EC offers bonus plans to any employee who is recognized by their customer as going beyond the normal duties to provide solutions resulting in immediate results for the customer, to an employee on a quarterly basis for their contributions to project and company profitability, or to an employee for recommendation of a successfully hired candidate.
                </div>
            </div>
        </div> 
        <div class="flip-box col-lg-3 col-md-4 col-sm-6" id="card4">
            <div class="flipper">
                <div class="front" onClick="flipButton(this)" style="background-color: #b72d00">
                    <div class="mini-horizontal-bar"></div>
                    Paid Overtime
                </div>
                <div class="back" onClick="flipButton(this)">
                    As projects guidelines allow, employees can be approved for overtime pay to meet project demands.
                </div>
            </div>
        </div> 
         
        <div class="flip-box col-lg-3 col-md-4 col-sm-6" id="card5">
            <div class="flipper">
                <div class="front" onClick="flipButton(this)" style="background-color: #b72d00">
                    <div class="mini-horizontal-bar"></div>
                    Annual Leave<br/>
                    <span style="font-size: 30px">(pd tme off &amp; holidays)</span>
                </div>
                <div class="back" onClick="flipButton(this)">
                    EC employees accrue Paid Time Off (PTO) annually to be used for personal, vacation or sick time off. Accrual of PTO hours begins at the time of hire and continues even while an employee uses PTO hours. The amount of PTO accrued annually continually increases based on length of service at Evans &amp; Chambers. EC also provides twelve (12) paid holidays per year: six fixed holidays and six floating holidays.
                </div>
            </div>
        </div> 
        <div class="flip-box col-lg-3 col-md-4 col-sm-6" id="card6">
            <div class="flipper">
                <div class="front" onClick="flipButton(this)" style="background-color: #fe4b11">
                    <div class="mini-horizontal-bar"></div>
                    401(k) plan with Company contribution
                </div>
                <div class="back" onClick="flipButton(this)">
                    EC provides benefits for tomorrow by offering investment programs designed to help you build a secure financial future. Investment options in the Evans &amp; Chambers Section 401(k) Plan provide a diversified range of investment choices for Plan participants across 12 different asset classes. Lastly, EC will provide you with top-notch educational tools and financial advice on various retirement topics.
                </div>
            </div>
        </div> 
        <div class="flip-box col-lg-3 col-md-4 col-sm-6" id="card7">
            <div class="flipper">
                <div class="front" onClick="flipButton(this)" style="background-color: #e53800">
                    <div class="mini-horizontal-bar"></div>
                    Flexible Spending Accounts
                </div>
                <div class="back" onClick="flipButton(this)">
                    EC offers its employees the ability to set aside pre-tax dollars for out-of-pocket dental and vision expenses and dependent care expenses. 
                </div>
            </div>
        </div> 
        <div class="flip-box col-lg-3 col-md-4 col-sm-6" id="card8">
            <div class="flipper">
                <div class="front" onClick="flipButton(this)" style="background-color: #fe4b11">
                    <div class="mini-horizontal-bar"></div>
                    Life Insurance, short- and long-term disability
                </div>
                <div class="back" onClick="flipButton(this)">
                    EC provides employees with Life and Accidental Death &amp; Dismemberment Insurance (AD&amp;D). Short-term and long-term disability coverage is also provided to employees. EC's disability plan preserves a portion of your income if you are unable to work as a result of illness, injury or pregnancy. These benefits are paid 100% by Evans &amp; Chambers Technology.
                </div>
            </div>
        </div> 
         
        <div class="flip-box col-lg-3 col-md-4 col-sm-6" id="card9">
            <div class="flipper">
                <div class="front" onClick="flipButton(this)" style="background-color: #ff5c29">
                    <div class="mini-horizontal-bar"></div>
                    Payroll deduction contribution to 529 College Savings Plan
                </div>
                <div class="back" onClick="flipButton(this)">
                    Evans & Chambers Technology helps employees save money toward the rising costs of a college education for their families by offering a payroll deducted contribution to one of the Country's highest rated and largest college savings plans, American Funds. This benefit provides an easy, payroll deducted contribution to your 529 College Savings Plan. This is also an opportunity to save additional funds for college education because there are no fees associated with the portfolio.
                </div>
            </div>
        </div> 
        <div class="flip-box col-lg-3 col-md-4 col-sm-6" id="card10">
            <div class="flipper">
                <div class="front" onClick="flipButton(this)" style="background-color: #b72d00">
                    <div class="mini-horizontal-bar"></div>
                    Paid Parental Leave
                </div>
                <div class="back" onClick="flipButton(this)">
                    Maternity/paternity/adoption leave under this policy is a paid leave associated with the birth of an employee’s own child or the placement of a child with the employee in connection with adoption.
                </div>
            </div>
        </div> 
        <div class="flip-box col-lg-3 col-md-4 col-sm-6" id="card11">
            <div class="flipper">
                <div class="front" onClick="flipButton(this)" style="background-color: #ff794c">
                    <div class="mini-horizontal-bar"></div>
                    Work/life benefit programs
                </div>
                <div class="back" onClick="flipButton(this)">
                    EC recognizes the need for balance between work demands and personal demands. The following programs help support our employees through various life stages. Evans &amp; Chambers offers a resource for set up and contribution to a 529 College Savings Plan through payroll deduction and Financial Planning services.
                </div>
            </div>
        </div> 
        <div class="flip-box col-lg-3 col-md-4 col-sm-6" id="card12">
            <div class="flipper">
                <div class="front" onClick="flipButton(this)" style="background-color: #e53800">
                    <div class="mini-horizontal-bar"></div>
                    Company outings and team events
                </div>
                <div class="back" onClick="flipButton(this)">
                    Building relationships outside of the workplace helps us to perform better in the workplace. Evans & Chambers schedules a full itinerary of events throughout the year to give employees the opportunity to simply have fun and let their hair down. Events in the past have included: a team ropes course, pro sporting events, happy hours, masterchef-type competitions and quarterly dinners.
                </div>
            </div>
        </div> 
    </div>
  </section>    
    
  <!-- Footer Section -->
  <?php include 'includes/footer.php'; echoFooter(145); ?>
</body>
</html>
