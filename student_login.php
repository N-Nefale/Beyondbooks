<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
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

    <section>
        <div class="signup-container">
        <h2>Login as Student</h2>
        <form action="signup.php" method="POST">
            <input type="text" name="username" placeholder="Username*:" required>
            <input type="text" name="StudentNumber" placeholder="Student Number*:" required>
            <input type="password" name="password" id="password" placeholder="Password*" required>
            <button type="submit">Sign Up</button>
        </form>
        <p>Don't have a Beyond Books Account? <a href="register.php">Sign up</a></p>
    </div>
    </section>

    <footer>
        &copy; 2023 Beyond Books
    </footer>
</body>

</html>