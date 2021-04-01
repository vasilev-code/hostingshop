
          <html>
                <head><!-- Head begin -->
                    <title>Guard hosting</title>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                    <meta name="description" content="">
                    <meta name="author" content="">
                    <link rel="preconnect" href="https://fonts.gstatic.com">
                    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
                    <link rel="preconnect" href="https://fonts.gstatic.com">
                    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">  
                    <link rel="stylesheet" href="index.css">
                    <link rel="stylesheet" href="bootstrap.min.css">
                </head><!-- Head end -->
              <body>
                    <header class="header"><!-- Header begin -->
                        <nav class="navbar navbar-expand-lg">  
                            <a class="navbar-brand" href="#">GUARD HOSTING</a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">  
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">     
                                <ul class="navbar-nav mr-4">
                                    <li class="nav-item">
                                        <a class="nav-link" data-value="about" href="">Войти</a>
                                        <a class="nav-link" data-value="about" href="">Сообщения</a>
                                        <a class="nav-link" data-value="about" href="#">МЕНЮ</a>
                                        <a class="nav-link" data-value="about" href="#">Корзина</a>
                                    </li>  
                                </ul> 
                            </div>
                        </nav>
                    </header><!-- Header end -->
                   
                        <main><!-- Main begin -->
                        <form action="{{ route('checklogin') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="logincheck">Логин</label>
                                <input type="text" name="logincheck" placeholder="Логин" id="logincheck" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="passwordcheck">Пароль</label>
                                <input type="text" name="passwordcheck" placeholder="Логин" id="passwordcheck" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-success">Отправить</button>
                        </form>
                        </main><!-- Main end -->
                        <footer class="d-flex text-center justify-content-end"><!-- Footer begin-->
                            <div class="card4">
                                <div class="card-body">
                                  <h4 class="card-title">О нас</h4>
                                  <p class="card-text">
                                    Some quick example text to build on the card title
                                    and make up the bulk of the card's content.
                                  </p>
                                </div>
                              </div>
                              <div class="card5">
                                <div class="card-body">
                                  <h4 class="card-title">Навигация</h4>
                                  <p class="card-text">
                                    Some quick example text to build on the card title
                                    and make up the bulk of the card's content.
                                  </p>
                                </div>
                              </div>
                        </footer><!-- Footer end-->

                        <script src="jquery-3.5.1.min.js"></script><!-- Scripts begin -->
                        <script src="js/bootstrap.bundle.js"></script><!-- Scripts -->
              </body>
          </html>