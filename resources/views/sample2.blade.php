<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- slider -->
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/imgs2.jpg" width="720px" height="600px" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/img/imgs3.jpeg" width="720px" height="600px" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/img/imgs8.jpg" width="720px" height="600px" class="d-block w-100" alt="...">
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


    <div class="container-fluid">
        <div class="text-center py-4 fs-1">About Us</div>

        <div class="row">
            <div class="col-7">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero magni consequatur soluta odit ipsa?
                    Odio quos nobis fuga nihil quia quaerat totam perferendis sunt ea, vitae est voluptatem
                    reprehenderit alias aperiam asperiores doloribus veritatis eveniet rem nemo commodi cum odit?
                    Praesentium eaque qui velit facere aut sed impedit? Ullam eos id corrupti accusantium ratione
                    aliquam nobis tenetur, et modi sint eveniet optio rerum cupiditate assumenda quas. Odit
                    perspiciatis, cupiditate iusto, iste aperiam error repudiandae distinctio illo, eveniet a aliquam?
                    Ratione ex quo ipsum. Modi fugit quo necessitatibus! Magni ea, ducimus eos amet ex, nesciunt
                    repudiandae iste perspiciatis libero provident harum!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque vel repudiandae nobis ducimus unde ipsam autem adipisci? Ipsam, ex non quisquam beatae eius, laudantium recusandae quae, sint facere aliquid fuga minima atque cupiditate. Qui veniam molestiae dolores nam dolorum aliquam.
                </p>

                <button class="btn btn-success">Read More</button>
            </div>

            <div class="col-5">
                <img src="/img/imgs6.jpg" class="img-fluid" alt="">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                Section
            </div>
            <div class="col-8">
                <div class="row">
                    <div class="col-4">home</div>
                    <div class="col-4">About</div>
                    <div class="col-4">Contact Us</div>
                </div>
            </div>
            
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>