<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css\adminRS-landingPage.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="navbar bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
        <img src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="Bootstrap" width="30" height="24">
        </a>
    </div>
    </nav>
    
    <div class="card-info-rs">
        <div class="wrapper">
            <div class="form-detail-rs">
                <header>Info Rumah Sakit</header>
                <div class="rs-details">
                    <div class="field">
                        <label>Nama Rumah Sakit</label>
                        <input type="text">
                    </div>
                    <div class="field">
                        <label>Alamat Rumah Sakit</label>
                        <input type="text">
                    </div>
                    <div class="field">
                        <label>Nomor Telephone Rumah Sakit</label>
                        <input type="text">
                    </div>
                    <label>Unggah foto profile Rumah Sakit</label>
                    <input type="file">
                </div>
            </div>
        </div>
    </div>
</body>
</html>