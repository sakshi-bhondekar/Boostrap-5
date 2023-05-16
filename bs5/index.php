<?php
include_once ("includes/head.php");
include_once ("includes/navbar.php");
?>


<!-- Slider::Start -->
<div id="carouselExampleIndicators" class="carousel slide mainSlider" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://via.placeholder.com/1920x1080.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://via.placeholder.com/1920x1080.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://via.placeholder.com/1920x1080.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Slider::End -->
<!-- Section - About Us ::Start -->
<div class="container">
    <div class="text-center">
        <h2 class="text-secondary display-3 my-5">About Us</h2>
    </div>
    <div class="row text-center m-5">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p-5">
            <img src="assets/img/img-about-us.png" class="rounded" alt="...">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p-5 text-start">
            <h4 class="text-secondary display-6 my-2">We are professional at .. </h4>
            <p class="text-secondary lh-lg fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui molestiae velit fugiat illum sit molestias nihil est veniam quam optio? Aspernatur natus quidem impedit distinctio! Dolorum voluptas accusantium sapiente numquam?</p>
        </div>
    </div>
</div>
<!-- Section - About Us ::End -->
<!--    Section  - Review Page ::Start -->
<div class="container">
    <div class="text-center">
        <h2 class="text-secondary display-3 my-5">Review</h2>
    </div>
    <div class="row gx-5">
        <!-- Review 1 -->
        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top rounded-circle p-4" src="https://via.placeholder.com/500x500.jpg" alt="Reviewer 2">
                <div class="card-body">
                    <h5 class="card-title text-secondary display-6 my-1">Reviewer 1</h5>
                    <p class="card-text-sm-start lh-lg fw-light">Nullam sagittis sapien sed consequat dignissim. Integer nec risus metus. Nulla facilisi. Nullam id dapibus tellus.</p>
                </div>
            </div>
        </div>
        <!-- Review 2 -->
        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top rounded-circle p-4" src="https://via.placeholder.com/500x500.jpg" alt="Reviewer 2">
                <div class="card-body">
                    <h5 class="card-title text-secondary display-6 my-1">Reviewer 2</h5>
                    <p class="card-text-sm-start lh-lg fw-light">Nullam sagittis sapien sed consequat dignissim. Integer nec risus metus. Nulla facilisi. Nullam id dapibus tellus.</p>
                </div>
            </div>
        </div>
        <!-- Review 3 -->
        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top rounded-circle p-4" src="https://via.placeholder.com/500x500.jpg" alt="Reviewer 2">
                <div class="card-body">
                    <h5 class="card-title text-secondary display-6 my-1">Reviewer 3</h5>
                    <p class="card-text-sm-start lh-lg fw-light">Nullam sagittis sapien sed consequat dignissim. Integer nec risus metus. Nulla facilisi. Nullam id dapibus tellus.</p>
                </div>
            </div>
        </div>
        <!-- Review 4 -->
        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top rounded-circle p-4" src="https://via.placeholder.com/500x500.jpg" alt="Reviewer 2">
                <div class="card-body">
                    <h5 class="card-title text-secondary display-6 my-1">Reviewer 4</h5>
                    <p class="card-text-sm-start lh-lg fw-light">Nullam sagittis sapien sed consequat dignissim. Integer nec risus metus. Nulla facilisi. Nullam id dapibus tellus.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--    Section  - Review Page ::End -->



<div class="p-5">
<table id="example" class="table table-striped" style="width:100%">
    <thead>
    <tr>
        <th>Name</th>
        <th>Position</th>
        <th>Office</th>
        <th>Age</th>
        <th>Start date</th>
        <th>Salary</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Tiger Nixon</td>
        <td>System Architect</td>
        <td>Edinburgh</td>
        <td>61</td>
        <td>2011-04-25</td>
        <td>$320,800</td>
    </tr>
    <tr>
        <td>Garrett Winters</td>
        <td>Accountant</td>
        <td>Tokyo</td>
        <td>63</td>
        <td>2011-07-25</td>
        <td>$170,750</td>
    </tr>
    <tr>
        <td>Ashton Cox</td>
        <td>Junior Technical Author</td>
        <td>San Francisco</td>
        <td>66</td>
        <td>2009-01-12</td>
        <td>$86,000</td>
    </tr>
    <tr>
        <td>Cedric Kelly</td>
        <td>Senior Javascript Developer</td>
        <td>Edinburgh</td>
        <td>22</td>
        <td>2012-03-29</td>
        <td>$433,060</td>
    </tr>
    <tr>
        <td>Airi Satou</td>
        <td>Accountant</td>
        <td>Tokyo</td>
        <td>33</td>
        <td>2008-11-28</td>
        <td>$162,700</td>
    </tr>
    <tr>
        <td>Brielle Williamson</td>
        <td>Integration Specialist</td>
        <td>New York</td>
        <td>61</td>
        <td>2012-12-02</td>
        <td>$372,000</td>
    </tr>
    <tr>
        <td>Herrod Chandler</td>
        <td>Sales Assistant</td>
        <td>San Francisco</td>
        <td>59</td>
        <td>2012-08-06</td>
        <td>$137,500</td>
    </tr>
    <tr>
        <td>Rhona Davidson</td>
        <td>Integration Specialist</td>
        <td>Tokyo</td>
        <td>55</td>
        <td>2010-10-14</td>
        <td>$327,900</td>
    </tr>
    <tr>
        <td>Colleen Hurst</td>
        <td>Javascript Developer</td>
        <td>San Francisco</td>
        <td>39</td>
        <td>2009-09-15</td>
        <td>$205,500</td>
    </tr>
    <tr>
        <td>Sonya Frost</td>
        <td>Software Engineer</td>
        <td>Edinburgh</td>
        <td>23</td>
        <td>2008-12-13</td>
        <td>$103,600</td>
    </tr>
    <tr>
        <td>Jena Gaines</td>
        <td>Office Manager</td>
        <td>London</td>
        <td>30</td>
        <td>2008-12-19</td>
        <td>$90,560</td>
    </tr>
    <tr>
        <td>Quinn Flynn</td>
        <td>Support Lead</td>
        <td>Edinburgh</td>
        <td>22</td>
        <td>2013-03-03</td>
        <td>$342,000</td>
    </tr>
    <tr>
        <td>Charde Marshall</td>
        <td>Regional Director</td>
        <td>San Francisco</td>
        <td>36</td>
        <td>2008-10-16</td>
        <td>$470,600</td>
    </tr>
    <tr>
        <td>Haley Kennedy</td>
        <td>Senior Marketing Designer</td>
        <td>London</td>
        <td>43</td>
        <td>2012-12-18</td>
        <td>$313,500</td>
    </tr>
    <tr>
        <td>Tatyana Fitzpatrick</td>
        <td>Regional Director</td>
        <td>London</td>
        <td>19</td>
        <td>2010-03-17</td>
        <td>$385,750</td>
    </tr>
    <tr>
        <td>Michael Silva</td>
        <td>Marketing Designer</td>
        <td>London</td>
        <td>66</td>
        <td>2012-11-27</td>
        <td>$198,500</td>
    </tr>
    <tr>
        <td>Paul Byrd</td>
        <td>Chief Financial Officer (CFO)</td>
        <td>New York</td>
        <td>64</td>
        <td>2010-06-09</td>
        <td>$725,000</td>
    </tr>
    <tr>
        <td>Gloria Little</td>
        <td>Systems Administrator</td>
        <td>New York</td>
        <td>59</td>
        <td>2009-04-10</td>
        <td>$237,500</td>
    </tr>
    <tr>
        <td>Bradley Greer</td>
        <td>Software Engineer</td>
        <td>London</td>
        <td>41</td>
        <td>2012-10-13</td>
        <td>$132,000</td>
    </tr>
    <tr>
        <td>Dai Rios</td>
        <td>Personnel Lead</td>
        <td>Edinburgh</td>
        <td>35</td>
        <td>2012-09-26</td>
        <td>$217,500</td>
    </tr>
    <tr>
        <td>Jenette Caldwell</td>
        <td>Development Lead</td>
        <td>New York</td>
        <td>30</td>
        <td>2011-09-03</td>
        <td>$345,000</td>
    </tr>
    <tr>
        <td>Donna Snider</td>
        <td>Customer Support</td>
        <td>New York</td>
        <td>27</td>
        <td>2011-01-25</td>
        <td>$112,000</td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
        <th>Name</th>
        <th>Position</th>
        <th>Office</th>
        <th>Age</th>
        <th>Start date</th>
        <th>Salary</th>
    </tr>
    </tfoot>
</table>
</div>

<?php
include_once ("includes/footer.php");
include_once ("includes/end.php");
?>