<template>
  <header style="
      height: 100vh;
      background-image:
        linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.5)),
        url(&quot;images/image1.jpg&quot;);
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    " id="#head">
            <nav class="navbar navbar-expand-md fixed-top nav-menu">
        <a href="#" class="navbar-brand font-weight-bold text-uppercase">
            <span class="h2 font-weight-bold">photo</span>
            <span class="h1">x</span>
        </a>
        <button class="navbar-toggler navbar-button" type="button" data-target="#navbarContent" data-toggle="collapse">
            <div class="bg-light line1"></div>
            <div class="bg-light line2"></div>
            <div class="bg-light line3"></div>
        </button>

        <div class="navbar-collapse collapse justify-content-end" id="navbarContent">
            <ul class="navbar-nav text-light text-capitalize">
                <li class="nav-item">
                    <a href="#home" class="nav-link menu-item m-2 nav-active">
                        home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#mission" class="nav-link menu-item m-2">
                        mission
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#collection" class="nav-link menu-item m-2">
                        collection
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#collection" class="nav-link menu-item m-2">
                        gallery
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#customerReview" class="nav-link menu-item m-2">
                        customers
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#pricing" class="nav-link menu-item m-2">
                        pricing
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link menu-item m-2">
                        contacts
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="text-light text-center text-md-right banner">
        <h1 class="display-4 banner-heading">Welcome to
        <span class="text-uppercase">photo</span>
        <span class="display-3">x</span></h1>
        <p class="lead banner-par">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quam possimus impedit, tempora quia atque nisi placeat fuga aliquam? Odio, quae quibusdam sed voluptates ad amet. Dolore natus laudantium ad!</p>
    </div>

    </header>            

  <section class="p-5 mission" id="mission">
    <div class="container-fluid">
      <div class="row text-white">
        <div class="col-12">
          <h1 class="display-4 mb-4 text-center">Our Mission</h1>
          <div class="underline mb-4"></div>
          <p class="lead">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Dolore cumque dolorem aliquam consequatur facere
            minima accusantium autem consequuntur sed maiores
            inventore illum iste, culpa vitae aspernatur corporis
            praesentium repellendus reprehenderit!
          </p>
        </div>
      </div>
      <div class="row my-5">
        <div class="col-md-4 text-center">
          <i class="bi bi-gear bg-danger mb-4" style="font-size: 4em;"></i>
          <h1 class="text-white mb-3">Creativity</h1>
          <p class="text-white">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse natus necessitatibus perferendis vero rem
            harum, eveniet sint numquam provident et vel at minima earum tenetur exercitationem facilis? Saepe,
            voluptatibus rerum.
          </p>
        </div>
        <div class="col-md-4 text-center">
          <i class="bi bi-gear bg-danger mb-4" style="font-size: 4em;"></i>
          <h1 class="text-white mb-3">Quality</h1>
          <p class="text-white">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, beatae laborum libero rerum delectus
            voluptatem, saepe rem blanditiis alias quod eum ratione dignissimos repellat inventore reprehenderit facilis
            nihil quae ipsum?
          </p>
        </div>
        <div class="col-md-4 text-center">
          <i class="bi bi-gear bg-danger mb-4" style="font-size: 4em;"></i>
          <h1 class="text-white mb-3">Expreience</h1>
          <p class="text-white">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi doloribus animi odio et. Sed facilis,
            minima aliquid, pariatur accusamus delectus quam reprehenderit nulla optio vitae consequuntur facere maiores
            quis doloremque.
          </p>
        </div>
      </div>
      <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 text-center">
                <img src="../../../../public/images/prop1.png" width="350" class="img-fluid camera-img">
            </div>
            <div class="col-lg-7 text-white text-lg-right text-center mission-text">
                <h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h1>
                <p class="lead">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto tenetur maiores ea. Eos quam provident numquam minus quia voluptatem ea accusantium fugiat ipsa reprehenderit! Quasi iusto iste recusandae assumenda dolorem?
                </p>
            </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-secondary py-4" id="collection">
    <div class="container-fluid">
      <!-- title -->
        <div class="row text-white text-center">
          <div class="col m-4">
            <h1 class="display-4 mb-5">
              Collection
            </h1>
            <div class="underline mb-5"></div>
            <p class="lead">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci magni omnis, possimus iste sunt doloremque iusto ab debitis similique optio illo veritatis, eligendi inventore nihil dignissimos dicta! Similique, cupiditate reiciendis.
            </p>
          </div>
        </div>
      <!-- end-of-title -->
       <div class="col-lg-4 col-sm-6 my-5">
        <div class="card border-0 card-show">
          <img src="" class="card-img">
          <div class="card-img-overlay">
            <h5 class="text-white text-uppercase font-weight-bold p-2 heading">
              nature photography
            </h5>
          </div>
        </div>
       </div>
       <div class="col-lg-4 col-sm-6 my-5">
          <div class="card border-0 card-show">
            <img src="" class="card-img">
            <div class="card-img-overlay">
              <h5 class="text-white text-uppercase font-weight-bold p-2 heading">
                wedding photography
              </h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 my-5">
          <div class="card border-0 card-show">
            <img src="" class="card-img">
            <div class="card-img-overlay">
              <h5 class="text-white text-uppercase font-weight-bold p-2 heading">
                party photography
              </h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 my-5">
          <div class="card border-0 card-show">
            <img src="" class="card-img">
            <div class="card-img-overlay">
              <h5 class="text-white text-uppercase font-weight-bold p-2 heading">
                business photography
              </h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 my-5">
          <div class="card border-0 card-show">
            <img src="" class="card-img">
            <div class="card-img-overlay">
              <h5 class="text-white text-uppercase font-weight-bold p-2 heading">
                fashion photography
              </h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 my-5">
          <div class="card border-0 card-show">
            <img src="" class="card-img">
            <div class="card-img-overlay">
              <h5 class="text-white text-uppercase font-weight-bold p-2 heading">
                family photography
              </h5>
            </div>
          </div>
        </div>
    </div>
  </section>
   <!-- start of gallery -->
    <section class="py-3" id="gallery">
      <div class="container-fluid">
        <!-- title -->
          <div class="row text-muted text-center">
            <div class="col m-4">
              <h1 class="display-4 mb-4">Gallery</h1>
              <div class="underline-dark mb-4"></div>
              <p class="lead">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam eligendi laudantium optio est voluptates voluptatum nostrum similique magni, harum molestiae blanditiis molestias eveniet quibusdam rerum dolorem culpa labore. Magnam, voluptates.
              </p>
            </div>
          </div>
        <!-- end-of-title -->
         <ul class="list-inline text-center text-uppercase font-weight-bold my-4">
          <li class="list-inline-item gallery-list-item" data-filter="all">all
            <span class="mx-md-5 mx-3 text-muted">/</span>
          </li>
          <li class="list-inline-item gallery-list-item" data-filter="new">new
            <span class="mx-md-5 mx-3 text-muted">/</span>
          </li>
          <li class="list-inline-item gallery-list-item" data-filter="free">free
            <span class="mx-md-5 mx-3 text-muted">/</span>
          </li>
          <li class="list-inline-item gallery-list-item" data-filter="pro">pro
            <span class="mx-md-5 mx-3 text-muted"></span>
          </li>
         </ul>
         <div class="container-fluid">
          <div class="d-flex flex-wrap justify-content-center">
            <div class="filter new">
              <img src="https://placehold.co/240x300?text=new">
            </div>
          </div>
         </div>
      </div>
    </section>
    <!-- end of gallery -->
    <!-- start of customer review -->
    <section class="p-5 customers" id="customerReview">
      <div class="container-fluid">
        <div class="row text-white text-center">
          <div class="col m-4">
            <h1 class="display-4 mb-4">Happy Customers</h1>
            <div class="underline mb-4"></div>
            <p class="lead">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem odio nulla consectetur? Laboriosam vel est sint, inventore nam eaque provident error quasi? Temporibus voluptatum aspernatur id eaque dignissimos illum earum!
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mx-auto">
            <div id="customer-carousel1" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#customer-carousel1" data-slide-to="0" class="active"></li>
                <li data-target="#customer-carousel1" data-slide-to="1"></li>
                <li data-target="#customer-carousel1" data-slide-to="2"></li>
              </ol>
            </div>
            <div class="carousel-item active text-center">
              <img src="https://placehold.co/140x200" class="img-fluid rounded-circle m-5" width="150">
              <blockquote class="blockquote text-white">
                <p class="mb-5">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia aliquid quo consectetur ut velit laborum impedit soluta ipsam. Quas architecto, magnam libero molestiae dolore ipsum fugiat velit dolorem assumenda at?
                </p>
              </blockquote>
              <h5 class="text-light text-uppercase font-weight-bold mb-3">variable_one</h5>
              <ul class="list-inline-item"></ul>
            </div>
            <div class="carousel-item text-center">
              <img src="https://placehold.co/140x200" class="img-fluid rounded-circle m-5" width="150">
              <blockquote class="blockquote text-white">
                <p class="mb-5">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas totam at sed commodi provident esse accusantium accusamus. Repellendus hic nobis id laboriosam. Hic quis inventore eveniet maxime voluptates cupiditate architecto?
                </p>
              </blockquote>
              <h5 class="text-light text-uppercase font-weight-bold mb-3">variable_two</h5>
              <ul class="list-inline mb-5">
                <li class="list-inline-item">
                  <i class="bi bi-star-fill text-warning"></i>
                </li>
                <li class="list-inline-item">
                  <i class="bi bi-star-fill text-warning"></i>
                </li>
                <li class="list-inline-item">
                  <i class="bi bi-star-fill text-warning"></i>
                </li>
              </ul>
            </div>
            <div class="carousel-item text-center">
              <img src="https://placehold.co/140x200" class="img-fluid rounded-circle m-5" width="150">
              <blockquote class="blockquote text-white">
                <p class="mb-5">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis quidem ducimus, neque commodi debitis, nobis sapiente eius sunt molestias laudantium amet delectus magnam, quasi totam dolorem distinctio impedit ipsum ipsam!
                </p>
              </blockquote>
              <h5 class="text-light text-uppercase font-weight-bold mb-3">variable_three</h5>
              <ul class="list-inline mb-5">
                <li class="list-inline-item">
                  <i class="bi bi-star-fill text-warning"></i>
                </li>
                <li class="list-inline-item">
                  <i class="bi bi-star-fill text-warning"></i>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- end of customer review -->
    <!-- pricing -->
    <section class="bg-light text-center p-5" id="pricing">
        <div class="container-fluid">
            <div class="row text-muted text-center">
                <div class="col m-4">
                    <div class="display-4 mb-4">Join Us</div>
                    <h1 class="underline-dark mb-4"></h1>
                    <p class="lead">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci in autem enim eaque quo
                        molestias dolorem veritatis, aliquid itaque tenetur rem, consequatur culpa quos eum quis error
                        optio libero sint!
                    </p>
                </div>
            </div>
            <!-- end-of-title -->
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="card card-1 text-light py-4 mx-auto">
                        <div class="card-body">
                            <h5 class="text-uppercase font-weight-bold mb-5">Monthly Membership</h5>
                            <h1 class="display-4">
                                <i class="bi bi-currency-dollar"></i>
                                19
                            </h1>
                            <ul class="list-unstyled">
                                <li class="font-weight-bold py-3 card-list-item">Photoshop </li>
                                <li class="font-weight-bold py-3 card-list-item">After Effects </li>
                                <li class="font-weight-bold py-3 card-list-item">Graphic Design </li>
                                <li class="font-weight-bold py-3 card-list-item border-0">Video Montage </li>
                            </ul>
                            <a href="#" class="btn p-2 text-uppercase font-weight-bold price-card-button text-light">
                                sign-up!
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-2 text-light py-4 my-4 mx-auto">
                        <div class="card-body">
                            <h5 class="text-uppercase font-weight-bold mb-5">Unlimited Acess</h5>
                            <h1 class="display-4">
                                <i class="bi bi-currency-dollar">
                                    499
                                </i>
                            </h1>
                            <ul class="list-unstyled">
                                <li class="font-weight-bold py-3 card-list-item">Photoshop </li>
                                <li class="font-weight-bold py-3 card-list-item">After Effects </li>
                                <li class="font-weight-bold py-3 card-list-item">Graphic Design </li>
                                <li class="font-weight-bold py-3 card-list-item">Video Montage </li>
                                <li class="font-weight-bold py-3 card-list-item border-0">Video Montage </li>
                            </ul>
                            <a href="#"
                                class="btn p-2 text-uppercase font-weight-bold price-card-button text-light">sign-up!</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-3 text-light py-4 my-4 mx-auto">
                        <div class="card-body">
                            <h5 class="text-uppercase font-weight-bold mb-5">Annual Membership</h5>
                            <h1 class="display-4">
                                <i class="bi bi-currency-dollar">
                                    499
                                </i>
                            </h1>
                            <ul class="list-unstyled">
                                <li class="font-weight-bold py-3 card-list-item">Photoshop </li>
                                <li class="font-weight-bold py-3 card-list-item">After Effects </li>
                                <li class="font-weight-bold py-3 card-list-item">Graphic Design </li>
                                <li class="font-weight-bold py-3 card-list-item">Video Montage </li>
                                <li class="font-weight-bold py-3 card-list-item border-0">Video Montage </li>
                            </ul>
                            <a href="#"
                                class="btn p-2 text-uppercase font-weight-bold price-card-button text-light">sign-up!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-5">
                <h2 class="text-muted mb-4">Thanks for being with us!</h2>
                <i class="bi bi-cup-hot" style="font-size: 3rem;"></i>
            </div>
        </div>
    </section>
    <!-- end-of-pricing -->

    <!-- contact-us -->
    <section class="contact p-5" id="contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 pb-4">
                    <h3 class="display-4 mb-5 text-white">Get In Touch</h3>
                    <form class="contact-form">
                        <div class="from-group py-4">
                            <input type="text" class="form-control my-2 p-2 input" placeholder="Name">
                            <label for="name" class="label">Name</label>
                        </div>
                        <div class="form-group py-4">
                            <input type="text" class="form-control my-2 p-2 input" placeholder="Email address">
                            <label for="email" class="label">Email Address</label>
                        </div>
                        <div class="from-group py-4">
                            <input type="checkbox" checked>
                            <label for="check" class="text-white">Send Announcements</label>
                        </div>
                        <button type="submit" class="btn btn-block p-2 font-weight-bold text-uppercase submit-button">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end-of-contact-us -->
    <!-- footer -->
    <footer class="bg-dark px-5">
        <div class="container-fluid">
            <div class="row text-light py-4">
                <div class="col-lg-4 col-sm-6">
                    <h5 class="pb-3">About Us</h5>
                    <p class="small">
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when
                        looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here, content here', making it look like
                        readable English.
                    </p>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h5 class="pb-3">Visit Us</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#" class="footer-link">Home</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">Mission</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">Collection</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">Gallery</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">Customers</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">Pricing</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-ms-6">
                    <div class="pb-3">Need Help?</div>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#" class="footer-link text-uppercase">Customer Service</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link text-uppercase">Online chat</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link text-uppercase">Support</a>
                        </li>
                        <li>
                            <a href="#" class="text-info">photo@email.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <h5 class="pb-3">Stay Conntected</h5>
                    <p class="small">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem fugiat officiis
                        accusantium nesciunt incidunt, illo expedita voluptatibus non illum culpa enim molestiae iusto
                        dolores eaque laudantium recusandae, quasi dolorum ducimus.
                    </p>
                    <form class="mb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Email Address">
                            <div class="input-group-append">
                                <button type="button" class="btn bg-danger text-white text-uppercase font-weight-bold">
                                    Sign Up
                                </button>
                            </div>
                        </div>
                    </form>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <i class="bi bi-facebook text-primary" style="font-size: 2em;"></i>
                        </li>
                        <li class="list-inline-item">
                            <i class="bi bi-google text-primary" style="font-size: 2em;"></i>
                        </li>
                        <li class="list-inline-item">
                            <i class="bi bi-instagram text-primary" style="font-size: 2em;"></i>
                        </li>
                        <li class="list-inline-item">
                            <i class="bi bi-twitter text-primary" style="font-size: 2em;"></i>
                        </li>
                        <li class="list-inline-item">
                            <i class="bi bi-youtube text-primary" style="font-size: 2em;"></i>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col text-center text-light border-top pt-3">
                    <p>&copy; 2018 Copyright, All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- end-of-footer -->
</template>

<script setup>
import collectionProp1 from '../../../../public/images/collectionProp1.jpg';
import { onMounted, onUnmounted } from 'vue';


onMounted(() => {
    $(document).ready(function () {
        console.log("this is happening");
    })

    $(window).scroll(function () {
        let position = $(this).scrollTop();
        if (position >= 650) {
            $('.camera-img').addClass('fromLeft');
            $('.mission-text').addClass('fromRight');
        } else {
            $('.camera-img').removeClass('fromLeft');
            $('.mission-text').removeClass('fromRight');
        }
    });



});


</script>

<style scoped>

body {
    font-family: 'Montserrat', sans-serif;
}

/* start-of-header */
header {
    height: 100vh;
    background: linear-gradient(
        rgba(0, 0, 0, .4), rgba(0, 0, 0, .5)
    ), url('./assets/images/image1.jpg') no-repeat center center/cover;
}
/* navbar */
.nav-menu {
    background: linear-gradient(
        rgba(0, 0, 0, .3), rgba(0, 0, 0, .5)
    );
    padding: 30px;
    transition: all .7s;
}

.menu-item {
    font-size: 13px;
    letter-spacing: 1px;
    color: #eee;
    transition: color .5s;
}

.menu-item :hover{
    color: #70aed2;
}

.nav-active {
    color: #70aed2;
}

.line1, .line2, .line3 {
    width: 23px;
    height: 3px;
    margin: 5px;
    transition: all .4s;
}

.change .line1 {
    transform: rotate(-45deg) translate(-5px, 6px);
}

.change .line2 {
    opacity: 0;
}

.change .line3 {
    transform: rotate(45deg) translate(-5px, -6px);
}

.custom-navbar {
    padding: 5px 30px;
    background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .7));
}
/* end-of-navbar */
/* start-of-banner */
.banner {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.banner-heading {
    animation-name: anim;
    animation-duration: 2s;
}

.banner-par {
    animation-name: anim;
    animation-duration: 2s;
    animation-delay: .5s;
    animation-fill-mode: backwards;
}
/* end-of-banner */

@keyframes anim {
    0% {
        transform: translate(-100px);
        opacity: 0;
    }

    100% {
        transform: translateY(0);
        opacity: 1;
    }
}
/* end-of-header */

/* mission */
.mission {
    background: #151f20;
}

.underline {
    width: 150px;
    border: 3px solid #eee;
    margin: auto;
}   
.fromLeft {
    animation-name: fromLeft;
    animation-duration: 3s;
}

.fromRight {
    animation-name: fromRight;
    animation-duration: 3s;
}

@keyframes fromLeft {

    0% {
        transform: translateX(-120px);
        opacity: 0;
    }
    100% {
        transform: translateX(0);
        opacity: 1;
    }
}

@keyframes fromRight {
    
    0% {
        transform: translateX(30px);
        opacity: 0;
    }
    100% {
        transform: translateX(0);
        opacity: 1;
    }
}
/* end-of-mission */

/* collection */
.card-shadow {
    box-shadow: 5px 8px 20px #444;
}

.heading {
    position: absolute;
    top: 70%;
    right: 0;
    font-size: 14px;
    letter-spacing: 1px;
    background: #222;
    width: 70%;
    cursor: pointer;
    opacity: .7;
    transition: all .5s;
}

.heading:hover {
    opacity: 1;
}
/* end-of-collection */

/* gallery */

.underline-dark {
    width: 150px;
    border: 3px solid #888;
    margin: auto;
}

.gallery-list-item {
    color: #777;
    cursor: pointer;
    user-select: none;
}

.active-item {
    color: #70aed2;
}
/* end-of-gallery */

/* customer */

.customers {
    background: #151f20;
}

/* end-of-customer */

.card-1, .card-2, .card-3 {
    background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .5)),
    url("https://placehold.co/210x400") no-repeat center center / cover;
    box-shadow: 7px 18px 50px #555;
    max-width: 400px;
}

.card-list-item {
    border-bottom: 1px groove #eee;
    width: 55%;
    margin: auto;
}

.price-card-bottom {
    background: #f5593d;
    width: 130px;
    border-radius: 25px;
    box-shadow: 5px 8px 18px #000;
    transition: all .2s;
}

.price-card-button :hover {
    background: #f9793d;
    transform: all .2s;
}

.moveFromLeft {
    animation-name: moveFromLeft;
    animation-duration: 2s;
}

.moveFromRight {
    animation-name: moveFromRight;
    animation-duration: 2s;
}

.moveFromButton {
    animation-name: moveFromButton;
    animation-duration: 2s;
}

@keyframes moveFromLeft {
    0% {
        transform: translateX(-100px);
        opacity: 0;
    }

    100% {
        transform: translateX(0);
        opacity: 1;
    }
}

@keyframes moveFromRight {
    0% {
        transform: translateX(100px);
        opacity: 0;
    }

    100% {
        transform: translateX(100px);
        opacity: 0;
    }
}

@keyframes moveFromButton {
    0% {
        transform: translateY(100px);
        opacity: 0;
    }

    100% {
        transform: translateY(0);
        opacity: 0;
    }
}

/* .contact */

.contact {
    background: 
    linear-gradient(
        105deg,
        rgba(21, 31, 32, 1) 0%,
        rgba(21, 31, 32, .95) 50%,
        transparent 50%
    ),
    url('https://placehold.co/1400x500') no-repeat;
}

.input {
    background: transparent;
    border-color: transparent;
    border-bottom: 2px solid #ccc;
    border-radius: 0;
    transition: all .8s;
}

.input:focus {
    background: transparent;
    border-color: transparent;
    box-shadow: none;
    color: #fff;
    border-bottom: 2px solid #f5593d;
}

.submit-button {
    background: #f5593d;
    color: #eee;
    transition: all .4s;
}

.submit-button :hover{
    background: #f9793d;
    transform: translateY(-3px);
}

.label {
    color: #777;
    display: block;
    margin-top: -70px;
    margin-left: 4px;
    font-size: 13px;
    transition: all .3s;
}

.input:placeholder-shown + label {
    transform: translate(20px, 20px);
    opacity: 0;
    visibility: hidden;
}

@media (max-width: 992px) {
    .contact {
        background: linear-gradient(rgba(21, 31, 32, 1), rgba(21, 31, 32, .95));
    }

    .contact-form {
        width: 80%;
        margin: auto;
    }

}
/* end-of-contact */


/* footer */

.footer-link {
    color: #eee;
    font-size: 13px;
    transition: all .3s;
}

.footer-link:hover {
    color: #70aed2;
    text-decoration: none;
}
/* end-of-footer */

</style>
