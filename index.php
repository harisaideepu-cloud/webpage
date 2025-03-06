<?php
$title = "Fancy Website";
$services = [
    [
        'name' => 'Service 1',
        'description' => 'Our top service offering that you will love.',
    ],
    [
        'name' => 'Service 2',
        'description' => 'Another great service to explore.',
    ],
    [
        'name' => 'Service 3',
        'description' => 'Learn more about our expertise and solutions.',
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Navigation -->
    <header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="hero">
        <div class="hero-content">
            <h1>Welcome to Our Fancy Website</h1>
            <p>Discover amazing experiences and stay connected.</p>
            <button onclick="scrollToContent()">Explore More</button>
        </div>
    </section>

    <!-- Main Content -->
    <section id="main-content">
        <div class="container">
            <?php foreach ($services as $service): ?>
                <div class="card">
                    <h2><?php echo $service['name']; ?></h2>
                    <p><?php echo $service['description']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Fancy Website. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
vvvvvv
