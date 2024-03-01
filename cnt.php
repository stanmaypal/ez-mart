<?php include "header/header.php" ?>
<p class="text-center h1">Contact Us</p>

<div class="container">
    <div class="row">
    <div class="col-lg-6 col-md-6 card">
        <p class="text-center h3 text-primary">Mail us</p>
    <form action="cntSave.php" method="post">
        <input type="text" name="name" required class="form-control my-2" placeholder="Name">
        <input type="email" name="email" required class="form-control my-2" placeholder="Email">
        <textarea name="message" class="form-control my-2" placeholder="Write Message....."></textarea>
    <button name="send" class="btn btn-success"><i class="fa fa-send" aria-hidden="true"></i></button>
    </form>
    </div>
    <div class="col-lg-6 col-md-6 card">
    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158874.52445435298!2d-74.00597281290943!3d40.712775599999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2suk!4v1644588972787!5m2!1sen!2suk" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d683.9223601846858!2d83.37702655082592!3d26.753167339627105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sin!4v1709293360166!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>   
    </div>
    </div>

    </div>
</div>
<?php include "footer/footer.php"?>