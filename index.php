<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    .btn-primary {
        background-color: #00897B;
        border-color: #00897B;
        transition: transform 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #00695c;
        border-color: #00695c;
        transform: scale(1.1);
    }

    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
    </style>
    <title>CodeBlogs</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="logo.png" alt="logo">
                CodeBLogs
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="post-blogs.php">Post Blogs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br />
    <br />
    <section>
        <div class="blog-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="django.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Django For Blog Application</h5>
                                <p class="card-text">Learn how to build a blogging platform using Django, including user
                                    authentication, post creation, and content management...</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="nodejs.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Node Js</h5>
                                <p class="card-text">Node.js is a powerful runtime environment that allows developers to
                                    build server-side applications using JavaScript. Known for its efficiency and ....
                                </p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="nextjs.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Next js</h5>
                                <p class="card-text">Next.js is a React framework that simplifies the creation of
                                    server-rendered React applications. It offers features like automatic code
                                    splitting, server-side rendering...</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="django.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Django For Blog Application</h5>
                                <p class="card-text">Learn how to build a blogging platform using Django, including user
                                    authentication, post creation, and content management...</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="django.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Django For Blog Application</h5>
                                <p class="card-text">Learn how to build a blogging platform using Django, including user
                                    authentication, post creation, and content management...</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="django.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Django For Blog Application</h5>
                                <p class="card-text">Learn how to build a blogging platform using Django, including user
                                    authentication, post creation, and content management...</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer mt-auto py-3" style="background-color: #00897B;">
        <div class="container text-center">
            <span class="text-white">&copy; 2024 CodeBlogs. All rights reserved.</span>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>