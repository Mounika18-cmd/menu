<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TasteBuds Restaurant Menu (PHP)</title>
    <style>
        body {
            font-family: "Segoe UI", sans-serif;
            margin: 0;
            background-color: #fff8f0;
            color: #333;
        }
        header {
            background-color: #ff6b35;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        nav {
            background-color: #333;
            text-align: center;
        }
        nav a {
            display: inline-block;
            color: white;
            padding: 14px 20px;
            text-decoration: none;
        }
        nav a:hover {
            background-color: #ff6b35;
        }
        .container {
            width: 80%;
            margin: 30px auto;
        }
        h2 {
            border-bottom: 2px solid #ff6b35;
            padding-bottom: 6px;
            color: #ff6b35;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        tr:nth-child(even) {
            background-color: #f9e3d3;
        }
        th {
            background-color: #ff6b35;
            color: white;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<?php
// ---------- MENU DATA ----------

// Each section is stored in an associative array
$menu = [
    "Starters" => [
        ["Tomato Soup", "Fresh tomatoes blended with herbs and cream", 120],
        ["Veg Spring Rolls", "Golden fried rolls stuffed with fresh vegetables", 150],
        ["Chicken Wings", "Spicy grilled wings served with BBQ dip", 180],
    ],
    "Main Course" => [
        ["Paneer Butter Masala", "Soft paneer cubes cooked in buttery tomato gravy", 220],
        ["Chicken Biryani", "Traditional Hyderabadi biryani with raita", 260],
        ["Veg Fried Rice", "Fragrant rice tossed with seasonal vegetables", 180],
        ["Butter Naan", "Soft, fluffy naan brushed with butter", 40],
    ],
    "Desserts" => [
        ["Gulab Jamun", "Warm milk balls soaked in sugar syrup", 100],
        ["Chocolate Brownie", "Rich chocolate brownie served with ice cream", 150],
        ["Fruit Salad", "Fresh seasonal fruits topped with honey", 120],
    ],
    "Beverages" => [
        ["Fresh Lime Soda", "Refreshing soda with lemon and mint", 80],
        ["Coffee", "Hot brewed coffee made from roasted beans", 90],
        ["Milkshake", "Thick shake in chocolate, vanilla, or strawberry", 120],
    ]
];
?>

<!-- ---------- HEADER ---------- -->
<header>
    <h1>🍽️ TasteBuds Restaurant</h1>
    <p>Delicious meals made with love since 2005</p>
</header>

<!-- ---------- NAVIGATION ---------- -->
<nav>
    <?php foreach ($menu as $section => $items): ?>
        <a href="#<?= strtolower(str_replace(' ', '-', $section)) ?>"><?= $section ?></a>
    <?php endforeach; ?>
    <a href="#contact">Contact</a>
</nav>

<!-- ---------- MENU DISPLAY ---------- -->
<div class="container">
    <?php foreach ($menu as $section => $items): ?>
        <div id="<?= strtolower(str_replace(' ', '-', $section)) ?>" class="menu-section">
            <h2>🍴 <?= $section ?></h2>
            <table>
                <tr>
                    <th>Item</th>
                    <th>Description</th>
                    <th>Price (₹)</th>
                </tr>
                <?php foreach ($items as $item): ?>
                    <tr>
                        <td><?= htmlspecialchars($item[0]) ?></td>
                        <td><?= htmlspecialchars($item[1]) ?></td>
                        <td><?= htmlspecialchars($item[2]) ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    <?php endforeach; ?>
</div>

<!-- ---------- FOOTER ---------- -->
<footer id="contact">
    <h3>📍 Visit Us</h3>
    <p>
        TasteBuds Restaurant<br>
        123 Main Street, Hyderabad, India<br>
        ☎️ +91 98765 43210 | ✉️ contact@tastebuds.in<br>
        ⏰ 11:00 AM – 11:00 PM
    </p>
    <p>&copy; <?= date("Y") ?> TasteBuds Restaurant | All Rights Reserved</p>
</footer>

</body>
</html>
