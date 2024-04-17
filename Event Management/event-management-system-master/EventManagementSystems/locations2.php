<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bootstrap Web Design</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class="content"><!--body content holder-->
            <div class="container">
                <div class="col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>Our Venues</h1><!--body content title-->
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
			
            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/lib.jpeg" class="img-responsive">
                        </div>
                        <div class="modal fade" id="urbanxchange" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">SCHOLAR'S BLOCK</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/lib.jpeg" class="img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>The Central Library </h5><!--content title-->
                                                <p>
                                                
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                The college library serves as a vital hub for academic excellence, offering a diverse array of resources that extend beyond traditional textbooks. 
                                                With an extensive collection of scholarly journals, reference materials, and electronic databases, the library provides students with a rich tapestry of information crucial for research and intellectual growth.
                                                </p>
                                                
                                            </div>
                                        </div><!--modal body-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p><!--close button-->
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div><!--modal div-->
                        <div class="subcontent col-md-8"><!--location non modal content -->
                            <h1 class="title">The Central Library </h1><!--location title-->
                            <p class="location"><!--location secondary content-->
                             One of the finest form of architechture  is demonstrated with this library also enriched variety of books.
                            </p>
                            <p class="definition"><!--content body-->
                             Built based on modern architechture having the most ventilated space to accomadate more than 200 participants
                            </p>
                            <hr class="customline3"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#urbanxchange"><!--button for modal trigger-->
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span><!--glyphicon--> 
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/scholar.jpeg" class="img-responsive">
                        </div>
                        <div class="modal fade" id="ananasbar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">The Scholar Block</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/scholar.jpeg" class="img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>A Building of light</h5><!--content title-->
                                                <p>
                                                college scholar building plays a pivotal role in fostering a conducive environment for learning and research. Typically, these buildings are designed to accommodate classrooms, lecture halls, faculty offices, and specialized laboratories, providing students and faculty with a centralized hub for academic pursuits.
                                                 The layout and facilities within such a building are often carefully planned to facilitate collaboration, intellectual exchange, and the pursuit of knowledge across various disciplines. 
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                The layout and facilities within such a building are often carefully planned to facilitate collaboration, intellectual exchange, and the pursuit of knowledge across various disciplines. These structures are not only physical spaces but also symbolic representations of the institution's commitment to education, research, and the intellectual growth of its community. 
                                                Moreover, a college scholar building is more than just a structure; it is a hub of intellectual engagement and academic discourse. It serves as a space where students and faculty come together to exchange ideas, engage in research, and deepen their understanding of their respective fields
                                                </p>

                                                <p>
                                                These structures are not only physical spaces but also symbolic representations of the institution's commitment to education, research, and the intellectual growth of its community. 

                                                </p>
                                            </div>
                                        </div><!--modal body-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div><!--modal div-->
                         

                        <div class="subcontent col-md-8"><!--location non modal content -->
                            <h1 class="title">The Scholar Block</h1><!--location title-->
                            <p class="location">The building of light</p><!--location secondary content-->
                            <p class="definition">
                            college scholar building plays a pivotal role in fostering a conducive environment for learning and research. Typically, these buildings are designed to accommodate classrooms, lecture halls, faculty offices, and specialized laboratories, providing students and faculty with a centralized hub for academic pursuits. The layout and facilities within such a building are often carefully planned to facilitate collaboration, intellectual exchange, and the pursuit of knowledge across various disciplines. These structures are not only physical spaces but also symbolic representations of the institution's commitment to education, research, and the intellectual growth of its community.
                             Moreover, a college scholar building is more than just a structure; it is a hub of intellectual engagement and academic discourse.
                            </p>
                            <hr class="customline3"><!--css modified horizontal line--> 
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#ananasbar"><!--button for modal trigger-->
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span><!--glyphicon--> 
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/admin.jpeg" class="img-responsive">
                        </div>    
                        <div class="modal fade" id="argyle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">The Main Building</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/admin.jpeg" class = "img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>The Main Building</h5><!--content title-->
                                                <p>
                                                The main building of a college stands as an iconic symbol and functional centerpiece of the institution.

                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                               the main building serves as the nerve center of academic operations.
                                                </p>

                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subcontent col-md-8">
                            <h1 class="title">The Main Building</h1>
                            <p class="location">The iconic building</p>
                            <p class="definition"> Typically housing administrative offices, classrooms, lecture halls, and sometimes historical or ceremonial spaces, the main building serves as the nerve center of academic operations. Architecturally significant, it often reflects the history and values of the college, creating a sense of identity for the entire campus. Within its walls, students navigate administrative tasks, attend classes, and engage in a variety of campus events, making the main building a central hub for the academic and social life of the college community.In addition to its practical functions, the main building often holds historical significance, embodying the institutional legacy and milestones of the college. It may house key administrative offices, such as the president's office or admissions, contributing to its role as the administrative heart of the campus.
                                 The architecture and design of the main building are carefully considered to create an inspiring and welcoming environment that reflects the academic mission and values of the college. Whether through its grand facades, historic halls, or modern amenities, the main building stands as a symbol of the college's commitment to education, community, and intellectual growth..</p>
                            <hr class="customline3">   
                            <button type="button" class="btn btn-default btn-md" data-toggle = "modal" data-target = "#argyle">
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> 
                            </button>
                        </div>
                    </div>
                </section>
            </div>
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/pg.jpeg" class = "img-responsive">
                        </div>
                        <div class="modal fade" id="munich" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">The P G Block</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/pg.jpeg" class = "img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>The P G Block</h5>
                                                <p>
                                                The PG (Postgraduate) block in a college is a specialized facility designed to cater to the academic needs of postgraduate students pursuing advanced degrees.
                                                 This block is equipped with classrooms, seminar rooms, and laboratories that are tailored to the specific requirements of postgraduate coursework and research. 
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                The environment is often conducive to in-depth study and intellectual exploration, providing a space where postgraduate students can engage in advanced discussions, collaborative projects, and focused academic endeavors. The PG block may also house faculty offices and research centers, fostering a close mentorship between professors and postgraduate students, who are often involved in cutting-edge research within their respective disciplines.
                                                Furthermore, the PG block plays a crucial role in fostering a sense of academic community among postgraduate students. It serves as a hub for intellectual exchange, where students can share ideas, collaborate on research projects, and participate in specialized seminars or workshops.
                                                </p>
                                                
                                                <p>
                                                The facilities within the PG block are typically designed to support advanced research methodologies, allowing postgraduate students to pursue their academic interests with the necessary resources and guidance.
                                                 In this way, the PG block becomes a dynamic and vibrant space that contributes significantly to the overall academic excellence and research culture of the college.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subcontent col-md-8">
                            <h1 class="title">The P G Block</h1>
                            <p class="location">seminar hall</p>
                            <p class="definition"> the PG block plays a crucial role in fostering a sense of academic community among postgraduate students. 
                                It serves as a hub for intellectual exchange, where students can share ideas, collaborate on research projects, and participate in specialized seminars or workshops. The facilities within the PG block are typically designed to support advanced research methodologies, allowing postgraduate students to pursue their academic interests with the necessary resources and guidance. In this way, the PG block becomes a dynamic and vibrant space that contributes significantly to the overall academic excellence and research culture of the college.</p>
                            <hr class="customline3">   
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#munich">
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> 
                            </button>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <?php require 'utils/footer.php'; ?>
    </body>
</html>
