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
      
        </div>
    </nav>
  </header>
  <main class="my-5">
    <div class="container">
    <div class="card bg-dark text-white">
        <img src="img/zimski2img.jpg" class="card-img" alt="...">
        <div class="card-img-overlay input-group mb-3">
            <h5 class="card-title">Login</h5>
            <p class="card-text">This is a wider card with supporting text Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto, laboriosam! This content is a little bit longer.</p>
            <br><p class="card-text">Last updated 3 mins ago</p>
            <form action="/my-handling-form-page" method="post">
                    <ul>
                        <li>
                        <label for="name">Username</label>
                        <input type="text" id="name" name="user_name" />
                        </li>
                        <li>
                        <label for="password">Pass:</label>
                        <input type="email" id="mail" name="user_email" />
                        </li>
                        <a href="nadzorna_ploca.php"><button type="button" class="btn btn-info">Login</button></a>

                    </ul>
            </form>
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