<?php
    include 'head.html';
?>
<head>
    <title>Institute Students Wellbeing Committee (ISWC)</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<!--Navbar-->
<?php
include 'navbar.html';
?>
<script>
    document.getElementById('nav-2').classList.add('active');
    document.getElementById('nav-2-2').classList.add('active');
    document.getElementById('nav-2').children[0].innerHTML += '<span class="sr-only">(current)</span>';
</script>
<div class="top-fixer-2"></div>
<!--Section: Team v.1-->
<section class="section team-section container">

    <!--Section heading-->
    <h1 class="section-heading">Institute Students Wellbeing Committee (ISWC)</h1>
    <!--Section description-->
    <p class="section-description"></p>
    <div class="row text-center">
        <!--First column-->
        <!-- <div class="col-lg-12 col-md-12 mb-r">
            <div class="avatar">
                <img src="images/sqloader.gif" data-src="images/avatar/Ankita_sharma.jpg" class="lazyload rounded-circle">
            </div>
            <h4>Dr. Ankita Sharma</h4>
            <h5>Associate Dean</h5>
            <h5><strong>Contact : </strong>0291-2801406</h5>

            <a class="icons-sm email-ic" href="mailto:ankitasharma@iitj.ac.in"><i class="fa fa-envelope-o"> </i></a>
        </div> -->
        <div class="col-lg-12 col-md-12 mb-r">
            <div class="avatar">
                <img src="images/sqloader.gif" data-src="images/avatar/Ankita_sharma.jpg" class="lazyload rounded-circle">
            </div>
            <h4>Prof. Ankita Sharma</h4>
            <h5>Dean of Student Affairs</h5>
            <h5>Chairperson (Ex-officio)</h5>
            <h5><strong>Email: </strong>ankitasharma@iitj.ac.in</h5>
            <a class="icons-sm email-ic" href="mailto:ankitasharma@iitj.ac.in"><i class="fa fa-envelope-o"> </i></a>
        </div>
        <div class="col-lg-12 col-md-12 mb-r">
            <div class="avatar">
                <img src="images/sqloader.gif" data-src="images/avatar/Prasenjeet_Tribhuvan.jpg" class="lazyload rounded-circle">
            </div>
            <h4>Dr. Prasenjeet Tribhuvan</h4>
            <h5>Member Convener</h5>
            <h5><strong>Contact : </strong>0291-2801408</h5>
            <h5><strong>Email : </strong>prasenjeet@iitj.ac.in</h5>
            <a class="icons-sm email-ic" href="mailto:prasenjeet@iitj.ac.in"><i class="fa fa-envelope"> </i></a>
        </div>
        <div class="col-lg-6 col-md-12 mb-r animate-profile invisible">
        <!-- <div class="avatar">
                <img src="images/sqloader.gif" data-src="images/avatar/WIN_20210612_19_13_51_Pro_IITJ.jpg" class="lazyload rounded-circle">
            </div>
            <h4>Dr. Saptarshi Pyne</h4>
            <h5>Faculty Advisor</h5>
            <h5><strong>Contact : </strong>0291-2801305</h5>
            <a class="icons-sm email-ic" href="mailto:samanwita@iitj.ac.in"><i class="fa fa-envelope-o"> </i></a>
        </div> -->
        <!-- <div class="col-lg-6 col-md-12 mb-r animate-profile invisible">
        <div class="avatar">
                <img src="images/sqloader.gif" data-src="images/avatar/Samanwita.jpg" class="lazyload rounded-circle">
            </div>
            <h4>Dr. Samanwita Pal</h4>
            <h5>Faculty Advisor</h5>
            <h5><strong>Contact : </strong>0291-2801305</h5>
            <a class="icons-sm email-ic" href="mailto:samanwita@iitj.ac.in"><i class="fa fa-envelope-o"> </i></a>
        </div> -->
        <!-- <div class="col-lg-6 col-md-12 mb-r animate-profile invisible">
            <div class="avatar">
                <img src="images/sqloader.gif" data-src="images/avatar/Prasenjeet_Tribhuvan.jpg" class="lazyload rounded-circle">
            </div>
            <h4>Dr. Prasenjeet Tribhuvan</h4>
            <h5>Faculty Advisor</h5>
            <h5><strong>Contact : </strong>0291-2801408</h5>
            <a class="icons-sm email-ic" href="mailto:prasenjeet@iitj.ac.in"><i class="fa fa-envelope-o"> </i></a>
        </div> -->
        <!-- <div class="col-lg-6 col-md-12 mb-r animate-profile invisible">
            <div class="avatar">
                <img src="images/sqloader.gif" data-src="images/avatar/Prasenjeet_Tribhuvan.jpg" class="lazyload rounded-circle">
            </div>
            <h4>Dr. Prasenjeet Tribhuvan</h4>
            <h5>Faculty Advisor</h5>
            <h5><strong>Contact : </strong>0291-2801408</h5>
            <a class="icons-sm email-ic" href="mailto:prasenjeet@iitj.ac.in"><i class="fa fa-envelope-o"> </i></a>
        </div> -->
        <!-- <div class="col-lg-6 col-md-12 mb-r animate-profile invisible">
            <div class="avatar">
                <img src="images/sqloader.gif" data-src="images/avatar/Sumit Kamal_Photo.JPG" class="lazyload rounded-circle">
            </div>
            <h4>Dr. Sumit Kamal</h4>
            <h5>Faculty Advisor</h5>
            <h5><strong>Contact : </strong>+91-9867137432</h5>
            <a class="icons-sm email-ic" href="mailto:pyadav@iitj.ac.in"><i class="fa fa-envelope-o"> </i></a>
        </div>
        <div class="col-lg-6 col-md-12 mb-r animate-profile invisible">
        <div class="avatar">
                <img src="images/sqloader.gif" data-src="images/avatar/Indranil Banerjee.jpg" class="lazyload rounded-circle">
            </div>
            <h4>Dr. Indranil Banerjee</h4>
            <h5>Faculty Advisor</h5>
            <h5><strong>Contact : </strong>0291-2801214</h5>
            <a class="icons-sm email-ic" href="mailto:indranil@iitj.ac.in"><i class="fa fa-envelope-o"> </i></a>
        </div> -->
    </div>

    
    <h2 style="text-align:center;width:100%;margin-bottom:3rem">Faculty Advisors</h2>

 
    <table>
        <!-- <tr>
            <td>1.</td>
            <td>Dean of Students Affairs (DOSA)</td>
            <td>Chairperson (Ex-officio)</td>
        </tr>
     
             <tr>
            <td>2.</td>
            <td>Dr. Prasenjeet Tribhuvan, Assistant Professor, Deptt. of CSE</td>
            <td>Member-Convener</td>
        </tr> -->
        <tr>
            <td>1.</td>
            <td>Dr. Priyanka Singh, Associate Professor, Deptt. of BSBE</td>
            <td>Member</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>Dr. Milan Kumar Hazra, Assistant Professor, Deptt. of Chemistry</td>
            <td>Member</td>
        </tr>
        <tr>
            <td>3.</td>
            <td>Dr. Sumit Kamal, Assistant Professor, Deptt. of CE</td>
            <td>Member</td>
        </tr>
        <tr>
            <td>4.</td>
            <td>Dr. Monika Dubey, Assistant Professor, Deptt. of C&IE</td>
            <td>Member</td>
        </tr>
        <tr>
            <td>5.</td>
            <td>Dr. Anand Mishra, Assistant Professor, Deptt. of CS&E</td>
            <td>Member</td>
        </tr>
        <tr>
            <td>6.</td>
            <td>Dr. Rajendra Nagar, Assistant Professor, Deptt. of EE</td>
            <td>Member</td>
        </tr>
        <tr>
            <td>7.</td>
            <td>Dr. Moumita Mandal, Assistant Professor, Deptt. of Mathematics</td>
            <td>Member</td>
        </tr>
        <tr>
            <td>8.</td>
            <td>Dr. Amrita Puri, Assistant Professor, Deptt. of ME</td>
            <td>Member</td>
        </tr>
        <tr>
            <td>9.</td>
            <td>Dr. Appala Naidu Gandi, Associate Professor, Deptt. of M&ME</td>
            <td>Member</td>
        </tr>
        <tr>
            <td>10.</td>
            <td>Dr. Sunita, Assistant Professor, Deptt. of Physics</td>
            <td>Member</td>
        </tr>
        <tr>
            <td>11.</td>
            <td>Dr. Venkat Ram Reddy Ganuthula, Assistant Professor, SME</td>
            <td>Member</td>
        </tr>

        <tr>
            <td>12.</td>
            <td>Dr. Ganesh Manjhi, Assistant Professor, SAIDE</td>
            <td>Member</td>
        </tr>
        <tr>
            <td>13.</td>
            <td>Dr. Shimmila Bhowmick, Young Faculty Associate, School of Design</td>
            <td>Member</td>
        </tr>
   
    </table>
</section>
<!--/Section: Team v.1-->


<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/tether.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/compiled.min.js"></script>

<script type="text/javascript" src="js/lazysizes.min.js"></script>
<!--Footer-->
<?php
include 'footer.html';
?>
