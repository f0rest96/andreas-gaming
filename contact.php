<?php include_once 'partials/header.php' ?>
<?php require_once 'contactform.php' ?>
<?php
if ($message_sent) :
?>
    <div class="container-fluid text-center bg-light p-5">
        <h6 class="display-1">Hvala sto ste nas kontaktirali.</h6>
        <img src="assets/ag-logo.jpg" class="img-fluid rounded-pill" alt="">
        <h6 class="display-5 m-5">Ocekujte nas odgovor uskoro.</h6>
        <a href="#" class="buttons text-decoration-none button-20">Vrati se na sajt</a>
    </div>
<?php
else :
?>
    <div class="container-fluid p-5">
        <div class="container w-100 aling-items-center justify-items-center mt-5 vw-50">
            <form action="contact.php" method="post">
                <div class="form-floating mb-3">
                    <input id="ime" type="text" name="name" class="form-control" placeholder="Unesite vase Ime">
                    <label for="ime">Ime</label>
                </div>
                <div class="form-floating mb-3">
                    <input id="email" type="email" name="email" class="form-control" placeholder="Uneiste vas mejl" aria-describedby="emailHelp">
                    <label for="email">Email adresa</label>
                    <div id="emailHelp" class="form-text">Nikada necemo deliti vas mejl ni sa kim.</div>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" id="subjekat" name="subject" class="form-control" placeholder="Unesite naziv mejla">
                    <label for="subjekat">Subjekat</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea name="message" id="message" class="form-control" placeholder="Leave a comment here"></textarea>
                    <label for="message">Upisite poruku ovde</label>
                </div>
                <button type="submit" name="contact-submit" class="btn btn-lg btn-primary"><i class="bi bi-arrow-right-circle"></i> Posalji mejl</button>
            </form>
        </div>
    </div>
<?php endif ?>
<!-- <button id="show" class="button-20">Klikni za Socijalne mreze</button> -->

<?php include_once 'partials/footer.php' ?>