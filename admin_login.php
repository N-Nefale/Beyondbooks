<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <header>
        <div class="logo">
            <img src="images/banner.png" alt="" srcset="" />
            <p>Beyond Books</p>
        </div>
        <p2>Know more. Do more.</p2>
        <nav class="top-nav">
            <ul>
                <li><a href="admin_login.php">Admin</a></li>
                <li><a href="student_login.php">Student</a></li>
            </ul>
            <input class="search-input" type="text" placeholder="Search by Title, Author or Category" />
        </nav>
    </header>

    <nav class="bottom-nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="categories.php">Books</a></li>
            <li><a href="faq.php">FAQ</a></li>
        </ul>
    </nav>

    <div class="signup-container">
        <h2>Log in as Administator</h2>
        <form action="signup.php" method="POST">
            <input type="email" name="admin_email" placeholder="Email:" required>
            <input type="password" name="password" id="password" placeholder="Password:" required>
            <button type="submit">Continue</button>
        </form>
    </div>
    </section>
    <footer>
        &copy; 2023 Beyond Books
    </footer>
</body>

</html>