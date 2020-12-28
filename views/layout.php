<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
            <a href="home" class="navbar-brand h1">FW</a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="contact" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="service" class="nav-link">Services</a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <?= $content; ?>
        </div>
    </div>
</body>

</html>