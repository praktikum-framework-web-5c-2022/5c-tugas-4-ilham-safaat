<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <h2 class="py-3 px-3">Daftar Mata Kuliah</h2>
            @foreach($matakuliahs as $mk)
            <div class="col-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="col">
                            <div class="float-start">
                                <h5 class="card-title">{{ $mk->nama_mk }} (<span class="text-danger">{{ $mk->kode_mk }}</span>)</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $mk->nama_dosen }}</h6>
                            </div>
                            <div class="float-end">
                                <span class="float-end">{{ $mk->sks }} SKS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
