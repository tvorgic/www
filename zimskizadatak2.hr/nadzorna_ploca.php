<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include_once 'head.php';
    ?>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="index.php">Index</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
           
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        </div>
    </nav>
  </header>
  <main class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <img src="https://picsum.photos/id/236/600/400" class="img-fluid">
            </div>
            <div class="col-md-5">
                <h1>Tagline</h1>
                <p class="mt-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti laboriosam minus ea ipsam, recusandae blanditiis nam minima saepe labore accusamus eos tenetur nesciunt perspiciatis architecto doloremque sunt atque distinctio natus.
                </p>
                <button type="button" class="btn btn-primary mt-3">Click!</button>
            </div>
        </div>
        <div class="row my-5">
            <div class="col">
                <div class="bg-secondary text-white my-3 py-3 card text-center">
                    <div class="card-body">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta, dignissimos, placeat nemo illo rerum libero dolore, nesciunt quo repellat quos amet illum sint a voluptatem.
                    </div>                    
                </div>
            </div>
            <div class="row">
                <div class="col">
                <div class="card-group">
                        <div class="card">
                            <img src="https://picsum.photos/id/231/320/200
                        " class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://picsum.photos/id/232/320/200
                        " class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://picsum.photos/id/233/320/200
                        " class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
  </main>
  <footer class="footer mt-auto py-3 bg-dark text-white">
    <div class="container">
        <span>Footer</span>
    </div>

  </footer>
</body>
</html>