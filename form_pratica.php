<?php
include_once 'inc/functions.php';
get_header("Aggiungi Pratica");
?>

<main>
    <section class="min-height d-flex justify-content-center align-items-center">
        <form action="aggiungi_pratica.php" method="POST" enctype="multipart/form-data">
            <h1 class="display-5 text-uppercase fw-semibold">Inserisci Pratica</h1>
            <div class="container position-relative py-5 d-flex justify-content-center align-items-center">
                <div>
                    <div class="mb-3">
                        <label for="emailUtente" class="form-label">Email Utente</label>
                        <input type="email" class="form-control" id="emailUtente" name="emailUtente" required>
                    </div>
                    <div class="mb-3">
                        <label for="corso" class="form-label">Corso</label>
                        <input type="text" class="form-control" id="corso" name="corso" required>
                    </div>
                    <div class="mb-3">
                        <label for="documenti" class="form-label">Documenti</label>
                        <input class="form-control" type="file" id="documenti"  name="documenti" multiple required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg mt-4">Inserisci</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
</main>

<?php get_footer() ?>
    