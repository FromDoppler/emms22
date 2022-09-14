<?php
include_once '../config.php';
include_once '../../utils/GeoIp.php';
$ip = GeoIp::getIp();
isIPAllow($ip, $ALLOW_IPS);

if (isset($_GET['view_id'])) {
    $sql_query = "SELECT * FROM speakers WHERE id=" . $_GET['view_id'];
    $result_set = mysqli_query($con, $sql_query);
    $fetched_row = mysqli_fetch_array($result_set, MYSQLI_ASSOC);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>ABM Speaker</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">


        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <td align="center"><a href="index.php?token=<?= $_GET['token'] ?>">back to main page</a></td>
                </tr>
                <tr>
                    <td>
                        <label for="name" class="form-label">Name:</label>
                    </td>
                    <th colspan="5"> <?php echo $fetched_row['name'] ?></th>
                </tr>
                <tr>
                    <td>
                        <label for="image" class="form-label">Imagen:</label>
                    </td>
                    <th colspan="5"> <img src="uploads/<?= $fetched_row['image'] ?>" alt="<?= $fetched_row['alt_image'] ?>" width="150" height="150"></th>
                </tr>
                <tr>
                    <td>
                        <label for="alt_image" class="form-label">Alt_image:</label>
                    </td>
                    <th colspan="5"> <?php echo $fetched_row['alt_image'] ?></th>
                </tr>
                <tr>
                    <td>
                        <label for="job" class="form-label">Job:</label>
                    </td>
                    <th colspan="5"> <?php echo $fetched_row['job'] ?></th>
                </tr>
                <tr>
                    <td>
                        <label for="sm_twitter" class="form-label">Sm_twitter:</label>
                    </td>
                    <th colspan="5"> <?php echo $fetched_row['sm_twitter'] ?></th>
                </tr>
                <tr>
                    <td>
                        <label for="sm_linkedin" class="form-label">Sm_linkedin:</label>
                    </td>
                    <th colspan="5"> <?php echo $fetched_row['sm_linkedin'] ?></th>
                </tr>
                <tr>
                    <td>
                        <label for="sm_instagram" class="form-label">Sm_instagram:</label>
                    </td>
                    <th colspan="5"> <?php echo $fetched_row['sm_instagram'] ?></th>
                </tr>
                <tr>
                    <td>
                        <label for="sm_facebook" class="form-label">Sm_facebook:</label>
                    </td>
                    <th colspan="5"> <?php echo $fetched_row['sm_facebook'] ?></th>
                </tr>
                <tr>
                    <td>
                        <label for="description" class="form-label">Description:</label>
                    </td>
                    <th colspan="5"> <?php echo $fetched_row['description'] ?></th>
                </tr>
                <tr>
                    <td>
                        <label for="bio" class="form-label">Bio:</label>
                    </td>
                    <th colspan="5"> <?php echo $fetched_row['bio'] ?></th>
                </tr>
                <tr>
                    <td>
                        <label for="image_company" class="form-label">Imagen Company:</label>
                    </td>
                    <th colspan="5"> <img src="uploads/<?= $fetched_row['image_company'] ?>" alt="<?= $fetched_row['alt_image_company'] ?>" width="70" height="70"></th>
                </tr>
                <tr>
                    <td>
                        <label for="alt_image_company" class="form-label">Alt_image_company:</label>
                    </td>
                    <th colspan="5"> <?php echo $fetched_row['alt_image_company'] ?></th>
                </tr>
                <tr>
                    <td>
                        <label for="day" class="form-label">Day:</label>
                    </td>
                    <?php
                    $day = '--';
                    if ($fetched_row['day'] === '1') {
                        $day = 'Martes';
                    } elseif ($fetched_row['day'] === '2') {
                        $day = 'Miercoles';
                    } else {
                        $day = 'Jueves';
                    }
                    ?>
                    <th colspan="5"> <?= $day ?></th>
                </tr>
                <tr>
                    <td>
                        <label for="time" class="form-label">Time:</label>
                    </td>
                    <th colspan="5"> <?php echo $fetched_row['time'] ?></th>
                </tr>
                <tr>
                    <td>
                        <label for="orden" class="form-label">Orden:</label>
                    </td>
                    <th colspan="5"> <?php echo $fetched_row['orden'] ?></th>
                </tr>
                <tr>
                    <td align="center"><a href="index.php?token=<?= $_GET['token'] ?>">back to main page</a></td>
                </tr>
            </table>

        </div>
    </div>
</body>

</html>
