<style type="text/css">
    :root {
      --accent-color: #f5a841;
    }
    section.testimonials .carousel-control-prev,
    .carousel-control-next {
      width: 5%;
    }
    section.testimonials .carousel-item p {
      max-width: 80%;
      border-left: 5px solid var(--accent-color);
      padding-left: 1rem;
      text-align: left;
    }
    section.testimonials .carousel-item h5 {
      text-align: left;
    }
    section.testimonials .carousel-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }
    section.testimonials .carousel.carousel-fade .carousel-item {
      transition: opacity 0.5s;
    }
</style>

<div class="jumbotron bg-warning text-white py-5 mb-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-sm-12">
                <h2 class="display-5 fw-bold">Get - House Of English</h2>
                <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet dignissimos numquam exercitationem error enim esse ratione vero necessitatibus iste, id magni quam, natus nam, blanditiis nesciunt inventore iure. Atque natus, adipisci iusto expedita et ab! Autem dignissimos in quas vitae modi doloribus commodi sint optio natus, eveniet magni aut iusto.</p>
                <a href="#!" class="btn btn-outline-light btn-lg">Explore</a>
            </div>
            <div class="col-md-6 col-sm-12">
                <img src="https://purepng.com/public/uploads/large/purepng.com-certificate-templateobjectscertificate-templateobject-award-certificate-template-631522323360ryv35.png" alt="image-certificate" class="w-100">
            </div>
        </div>
    </div>
</div>

<div class="jumbotron mb-3 py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="col-sm-12 text-center mb-4"><h2 class="display-5 fw-bold text-warning">Our Service</h2></div>
            </div>
            <?php for($i = 1; $i <= 3; $i++){ ?>
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <img src="https://th.bing.com/th/id/R.541b2a97125e9556dee64310216ade67?rik=mqw36%2fk8kRplkA&riu=http%3a%2f%2fwww.plastic-and-surgery.com%2fwp-content%2fuploads%2f2019%2f11%2fService.jpg&ehk=hhovXWiBQ4%2b00%2bQ7uvNDy2j7XBgT%2bdlxxSHkCTNZrtk%3d&risl=&pid=ImgRaw&r=0" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="jumbotron bg-warning text-white py-5 mb-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 offset-md-2 col-sm-12">
                <h2 class="text-center display-5 fw-bold">About</h2>
                <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi dignissimos alias odit, autem voluptate, quis blanditiis a amet similique, aperiam reiciendis dicta, natus! Illum distinctio ducimus maxime voluptatum magni error labore voluptatem quae consequatur commodi quod inventore obcaecati blanditiis velit temporibus natus exercitationem enim perspiciatis, dolorum possimus earum eaque suscipit placeat eos. Aut doloremque minus reprehenderit beatae libero, ipsa ut nihil illum. Cupiditate officiis, tempore repudiandae error distinctio! Odio, maiores?</p>
            </div>
            
        </div>
    </div>
</div>

<div class="jumbotron mb-3 py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 offset-md-2 col-sm-12">
                <section class="testimonials" id="testimonials">
                    <h2 class="display-5 fw-bold mb-4 text-center text-warning">Testimonials</h2>
                    <div id="carouselExample" class="carousel slide carousel-dark carousel-fade">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mattis orci enim, ac
                                    auctor ex iaculis ut. Mauris ut elit mi. Sed nec quam bibendum, congue augue ut, molestie
                                tellus. Fusce vel semper dolor." </p>
                                <h5>John Doe</h5>
                            </div>
                            <div class="carousel-item">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at tortor a massa facilisis
                                    venenatis sit amet non libero. Etiam vel sem venenatis tellus laoreet feugiat eu in mi."
                                </p>
                                <h5>June Doe</h5>
                            </div>
                            <div class="carousel-item">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non metus eu sem ultrices
                                    tincidunt sit amet ac nisi. In hac habitasse platea dictumst. Aliquam pellentesque diam non
                                eros feugiat maximus." </p>
                                <h5>Johnny Doe</h5>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>