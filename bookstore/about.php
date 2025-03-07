<?php
include 'config.php';
session_start();

$user_id=$_SESSION['user_id'];

if(!isset($user_id)){
  header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Page</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="home.css">

</head>
<body>
  
<?php
include 'user_header.php';
?>
<section class="about_cont">
    <img src="about1.jpg" alt="">
    <div class="about_descript">
      <h2>Why Choose Us ?</h2>
      <p>The Green University of Bangladesh Library stands out for its unparalleled blend of resources, technology, bookstore convenience, and community-centric services. With over 50,000 books, 100+ international journals, 20+ digital databases, and an on-campus bookstore offering textbooks, stationery, and academic tools, we cater to diverse needs. Our tech-driven approach includes AI-powered search tools, 24/7 remote access, and e-libraries. Modern facilities like collaborative hubs, silent study zones, and high-speed Wi-Fi foster productivity. Expert librarians provide personalized support for citations, publications, and projects, while sustainability initiatives reflect our eco-friendly ethos. Engage in seminars, workshops, and author talks to enhance skills and innovation. Our bookstore features affordable prices, used-book exchanges, and semester-specific materials, aligning with our mission to support academic success. Choose us for excellence, accessibility, and transformative learning.

    </p>
    </div>
  </section>

  <section class="questions_cont">
    <div class="questions">
    <h2>Have Any Queries?</h2>
    <p>Find quick answers on our FAQ portal or book a consultation with expert librarians. For bookstore details, submit queries via our online form or visit the help desk. Your academic success is our mission—get tailored assistance today!</p>
    <button class="product_btn" onclick="window.location.href='contact.php'">Contact Us</button>
    </div>
    
  </section>

<?php
include 'footer.php';
?>
<script src="https://kit.fontawesome.com/eedbcd0c96.js" crossorigin="anonymous"></script>

<script src="script.js"></script>

</body>
</html>