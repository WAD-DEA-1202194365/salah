<!DOCTYPE html>
<html lang="en" dir="ltr">
 
<head>
    <meta charset="utf-8">
    <title>Booking Hall</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link href="https://fonts.googleapis.com/css?family=Hanalei+Fill" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Hanalei+Fill|Noto+Serif+JP|Raleway" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
 
<body id="home">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
    <?php
        $user = "Neta_1202190010";
        $namagedung = array("Nusantara Hall", "Garuda Hall", "Gedung Serba Guna");
    ?>
 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
 
                    <li class="nav-item">
                        <a class="nav-link" href="booking.php">Booking</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <section style="min-height: 80vh;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="mb-0 p-2 bg-dark text-light text-center">Reserve your venue, now!</h5>
 
                    <br>
                    <section class="container d-felx justify-content-center border border-2">
                        <div class="row d-flex justify-content-center">
                            <div class="col-6 text-justify align-self-center">
                                <img src="nusantara-hall.jpg" class="card-img-top" alt="" width="30" height="180" id="preview-image">
                            </div>
                            <div class="col-6 text-justify">
                                <div class="mb-3">
                                    <form class="form-horizontal" id="frm_booking" method='POST' action="mybooking.php">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="hidden" name="price" id="price">
                                            <input type="text" name="name" class="form-control" id="name" aria-describedby="name" value="<?= $user?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="edate">Event Date</label>
                                            <input type="date" name="edate" class="form-control" id="edate" aria-describedby="eventdate">
                                        </div>
                                        <div class="form-group">
                                            <label for="stime">Start Time</label>
                                            <input type="time" name="stime" class="form-control" id="stime" aria-describedby="starttime">
                                        </div>
                                        <div class="form-group">
                                            <label for="duration">Duration (Hours)</label>
                                            <input type="number" name="duration" class="form-control" id="duration" aria-describedby="duration">
                                        </div>
                                        <div class="form-group">
                                            <label for="btypes" class="form-label">Building Types</label>
                                                <div class="col">
                                                    <select id="btypes" name="btypes" class="form-control">
                                                        <?php
                                                            foreach($namagedung as $value => $name){
                                                                if($name == $_GET['nama']){
                                                                    echo "<option selected='selected' value='".$value."'>".$name."</option>";
                                                                } else {
                                                                    echo "<option value'".$value."'>".$name."</option>";
                                                                }
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Phone Number</label>
                                            <input type="number" name="phone" class="form-control" id="phone" aria-describedby="phone">
                                        </div>
                                        <div class="form-group">
                                            <label for="service">Add Services</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="Catering" id="defaultCheck1" name="layanan[]">
                                                    <label class="form-check-label" for="defaultCheck1">Catering / $700</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="Decoration" id="defaultCheck2" name="layanan[]">
                                                    <label class="form-check-label" for="defaultCheck1">Decoration / $450</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="Sound System" id="defaultCheck3" name="layanan[]">
                                                    <label class="form-check-label" for="defaultCheck1">Sound System / $250</label>
                                                </div>
                                        </div>
                                        <br>
                                        <div class="form-group d-grid gap-2">
                                            <button type="submit" class="btn btn-primary btn-edit" name="submit">Book</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
 
    <div class="text-center p-4 mt-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © Created by: Neta_1202190010
    </div>
 
    <footer>
    </footer>
 
</body>
 
</html>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>