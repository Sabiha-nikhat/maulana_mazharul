<?php $this->load->view("frontend/header.php");?>

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Department of Media Studies
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href=""> Academics</a> <span class="lnr lnr-arrow-right"></span> <a href="school_of_computational_sciences.php">School of Computational Sciences, ICT</a><span class="lnr lnr-arrow-right"></span> <a class="orange-text">Department of Media Studies
                    </a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Department of </span>Media Studies</h2>
                    <ul class="custom-list-style">
                           <li class="mb-10">
                            <span>&nbsp;<a href="download_brochure.php" 
                               class="round-rectangle" style="margin-left:780px;">Download Brochure</a></span>
                           </li>
                       </ul>
                </div>
                <div class="mb-20">
                    <div class="detials">
                        <h4 class="inner-title">About Department</h4>
                        <p class="text-justify">The Department of Media Studies was established in the year 2019 with the vision of serving the society through objective Journalism and ethical media. The Department is committed to achieve excellence in media education & research and assesses the success of its programmes using the highest standards of quality. The department has set up a specialised research center Achary Bharat Muni Sanchar Shodh Kendra to promote quality research. Motivated by his vision our department has become the very popular have signed memorandum of understanding with premium media institutions like Film and Television Institute of India (FTII), Pune, Indian Institute of Mass Communication, New Delhi, Makhanlal Chaturvedi Rashtriya Patrakarita Avam Sanchar Vishwavidyalaya, Bhopal. The department runs Undergraduate, Postgraduate and Doctorate programs namely the Bachelor of Arts in Journalism & Mass Communication (B.A.J.M.C), Master of Journalism & Mass Communication (M.J.M.C) and PhD Mass Communication. A group of well qualified experienced and highly motivated faculty is engaged in providing quality education to the future journalists and prepare the students in wider field of mass communication like Media Research, Journalism, Content & Creative Writing, Public Relations, Anchoring, Graphic designing, Advertising, and Film Production to take up challenging jobs in the areas of communication and media. The training and placement cell of the department continuously endeavours to provide opportunities for students’ placements and training. We have state-of-the-art audio-video labs, post production lab and graphics lab with latest equipment. We believe in giving industry hands-on knowledge though various field visits, workshops, special lecture series, interactive sessions, conferences, seminar, webinars, competitions, fest, etc. wherein many industry experts from various fields like print & electronic journalism, anchoring, public relations, advertising, filmmaking, etc. have interacted with our students. The department has organised various seminars, workshop and conference. We wish to achieve many milestones in coming years and add feathers to the cap of the university. </p>
                    </div>
                </div>               
            </div>
            <div class="col-sm-3 col-md-3 col-xs-12">
    <div class="nav-side-menu">
        <div class="brand">About Department</div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">
                <li><a href="school_of_computational_sciences.php"><i class="fa fa-arrow-circle-right"></i> Back to School Page</a></li>
                <li><a href="department_of_media_studies_hod.php"><i class="fa fa-arrow-circle-right"></i> Head of Department</a></li>
                <li><a href="department_of_media_studies_programme.php"><i class="fa fa-arrow-circle-right"></i> Programmes</a></li>
                <li><a href="javascript:;" onclick="viewFun()"><i class="fa fa-arrow-circle-right"></i> Syllabus</a></li>
                <li><a href="department_of_media_studies_faculty.php"><i class="fa fa-arrow-circle-right"></i> Faculty Details</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Achievements/Events</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Research/Publications</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Contact Us</a></li>
            </ul>
        </div>
    </div>
</div>
<form id="frm" method="post" action="syllabus_view.php"><input type="hidden" name="ids" value="5" /><button type="submit" style="display: none;"></button></form>
<script>
    function viewFun() {
        $('#frm').submit();
    }
</script>        </div>
    </div>
</section>

 <?php $this->load->view("frontend/footer.php");?>


<script type="text/javascript">
    $(document).ready(function () {
        document.title = "Department of Media Studies - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>