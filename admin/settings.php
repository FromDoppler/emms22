<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="http://local-goemms.com/admin/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>


<script src="js/script.js"></script>

</head>

<body>
    <main class="container">
        <header class="mt-2">


            <a class="btn btn-primary mt-2" href="/admin/index.php?token=<?= $_GET['token'] ?>"> Menu Principal</a>

        </header>

        <div class="mt-5 row">
            <div class="col">


                <div id="current-alert-success" class="alert alert-success alert-dismissible fade show d-none" role="alert">
                    <strong>Success!</strong> Fase Updated
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="current-alert-danger" class="alert alert-success alert-dismissible fade show d-none" role="alert">
                    <strong>Error!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3>Current Phase</h3>
                        </div>
                        <div class="card-body">
                            <form id="current_phase" method="post">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="phase" id="pre">
                                    <label class="form-check-label" for="pre">
                                        PRE
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="phase" id="during">
                                    <label class="form-check-label" for="during">
                                        DURING
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="phase" id="post">
                                    <label class="form-check-label" for="post">
                                        POST
                                    </label>
                                </div>
                                <div class="form-group mt-5">
                                    <button class="btn btn-primary btn-block" type="submit">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col">

                <div id="simulator-alert-success" class="alert alert-success alert-dismissible fade show d-none" role="alert">
                    <strong>Success!</strong> Simulator Updated .
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="simulator-alert-danger" class="alert alert-success alert-dismissible fade show d-none" role="alert">
                    <strong>Error!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3>Simulador</h3>
                        </div>
                        <div class="card-body">
                            <form id="simulator" method="post">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="simulatorEnabled" name="enabled">
                                    <label class="form-check-label" for="simulatorEnabled">
                                        ENABLED <small>(Only VPN users will see the simulated phase.)</small> </label>
                                </div>
                                <div class="form-check mb-2 mx-3">
                                    <input class="form-check-input" type="radio" name="simulator_phase" id="simulator_pre">
                                    <label class="form-check-label" for="simulator_pre">
                                        PRE
                                    </label>
                                </div>
                                <div class="form-check mb-2 mx-3">
                                    <input class="form-check-input" type="radio" name="simulator_phase" id="simulator_during">
                                    <label class="form-check-label" for="simulator_during">
                                        DURING
                                    </label>
                                </div>
                                <div class="form-check mb-2 mx-3">
                                    <input class="form-check-input" type="radio" name="simulator_phase" id="simulator_post">
                                    <label class="form-check-label" for="simulator_post">
                                        POST
                                    </label>
                                </div>
                                <div class="form-group mt-5">
                                    <button class="btn btn-primary btn-block" type="submit">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
</body>

</html>
