@extends('layout/main')

@section('container')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Landing</title>
</head>
<body>
    <main>
        <div class="container">
            <div class="top-wrapper">
                <div class="row">
                    <div class="deskripsi-1">
                        <h2>Selamat Datang!</h2>
                        <p>Halo, web ini dibuat untuk memenuhi tugas projek tim program Digital Talent Scholarship Progate.</p>
                        <p>Web ini ditujukan untuk memberikan informasi mengenai kursus, seminar dan workshop yang 
                            diselenggarakan oleh beberapa universitas.
                        </p>
                    </div>
                    <div class="img-section-1">
                        <img src="../assets/img/training.jpg" class="img-1">
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
@endsection
