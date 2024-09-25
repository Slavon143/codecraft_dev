<?php
$title = "Contact";
include('includes/header.php');
include('includes/header.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Обработка формы: отправка на email или запись в базу данных
    // mail($to, $subject, $body);
    echo "<div class='alert alert-success'>Thank you for your message, $name. We will contact you soon.</div>";
}
?>

<section class="py-5">
    <div class="container">
        <h2>Contact Us</h2>
        <form action="contact.php" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
</section>

<?php include('includes/footer.php'); ?>
