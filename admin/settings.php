<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <meta name="robots" content="noindex, nofollow">
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>

</head>

<body>
    <div class="container">
        <br /><a href="/admin/index.php?token=<?= $_GET['token'] ?>"> Menu Principal</a>
        <br />
        <br />
        <div class="bd-example">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Fases</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Simulador</button>

                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <fieldset>
                        <legend class="mb-10">Fases</legend>
                        <div id="alert-success" class="alert alert-success d-none">
                            <strong>Success!</strong> Fase Updated .
                        </div>
                        <div id="alert-danger" class="alert alert-danger d-none">
                            <strong>Danger!</strong> Error.
                        </div>
                        <form id="current_phase">
                            <div class=" form-check mt-5">
                                <input class="form-check-input" type="radio" name="phase" id="pre">
                                <label class="form-check-label" for="pre">
                                    PRE
                                </label>
                            </div>
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="radio" name="phase" id="during">
                                <label class="form-check-label" for="during">
                                    DURING
                                </label>
                            </div>
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="radio" name="phase" id="post">
                                <label class="form-check-label" for="post">
                                    POST
                                </label>
                            </div>

                            <button type="submit" class="btn btn-primary mt-2">Submit</button>
                        </form>
                        <fieldset>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    Simulador
                </div>
            </div>
        </div>
    </div>


</body>

</html>
