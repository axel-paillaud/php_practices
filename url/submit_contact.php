<h1>Message bien reçu !</h1>

<div class="card">
    <div class=card-body">
        <h5 class="card-title">Rappel de vos informations</h5>
        <p class="card-text"><b>Email</b> : <?php if (!isset($_GET['email'])) {
            echo 'Il faut un email pour soumettre le formulaire';
            return;
        } else {
            echo $_GET['email'];
        } ?></p>
        <p class="card-text"><b>Message</b> : <?php echo $_GET['message']; ?></p>
    </div>
</div>