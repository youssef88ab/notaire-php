<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prendre Rendez-vous | Cabinet Notarial</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="assets/css/appointment.css">


</head>

<body>

    <?php include 'includes/header.php'; ?>

    <!-- Header Section -->
    <header class="appointment-header text-center">
        <div class="container">
            <h1 class="display-4 fw-bold mb-3">Prendre Rendez-vous</h1>
            <p class="lead">Planifiez votre consultation avec notre équipe notariale</p>
        </div>
    </header>

    <!-- Appointment Form -->
    <main class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="appointment-card">
                    <h2 class="mb-4"><i class="fas fa-calendar-check service-icon"></i>Formulaire de rendez-vous</h2>

                    <form id="appointmentForm">
                        <div class="row mb-3">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Nom Complet</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">Téléphone</label>
                                <input type="tel" class="form-control" id="phone" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="date" class="form-label">Date souhaitée</label>
                                <input type="date" class="form-control" id="date" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="service" class="form-label">Type de service</label>
                            <select class="form-select" id="service" required>
                                <option value="" selected disabled>Choisissez un service</option>
                                <option value="Actes Immobiliers">Actes Immobiliers</option>
                                <option value="Contrats">Contrats</option>
                                <option value="Famille">Famille</option>
                                <option value="Entreprise">Entreprise</option>
                                <option value="Autre">Autre</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Informations complémentaires</label>
                            <textarea class="form-control" id="message" rows="4"></textarea>
                        </div>

                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" id="confirm" required>
                            <label class="form-check-label" for="confirm">
                                Je confirme que les informations fournies sont exactes
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            <i class="fas fa-paper-plane me-2"></i>Envoyer la demande
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.getElementById('appointmentForm').addEventListener('submit', function (e) {
            e.preventDefault();
            alert('Votre demande de rendez-vous a été envoyée. Nous vous contacterons pour confirmation.');
            this.reset();
        });
    </script>
</body>

</html>