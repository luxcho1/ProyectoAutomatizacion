@extends('layouts.app')

@section('content')
<head>
    <h1 style="text-align: center">Sistema de Gestión Taller Mecánico SERVIEXPRESS</h1>

    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active" >
            <img style="max-width: 50%;" src="https://newsroom.porsche.com/.imaging/mte/porsche-templating-theme/image_1290x726/dam/US-local/Press-Releases/2019/20190808-Becoming-a-Porsche-Technician-Apprenticeship-Program-Celebrates-20-Years-/2019-08-13_PCNA19_0997_JPG_Large_RGB/PCNA19_1000_fine.jpg/jcr:content/PCNA19_1000_fine.jpg" class="mx-auto d-block" alt="...">
          </div>
          <div class="carousel-item">
            <img style="max-width: 50%;" src="https://pictures.dealer.com/j/jackdanielsporsche/0079/14ce52d2425ad803db054a49fa226c83x.jpg?impolicy=downsize&w=568" class="mx-auto d-block" alt="...">
          </div>
          <div class="carousel-item">
            <img style="max-width: 50%;" src="https://dealerinspire-image-library-prod.s3.us-east-1.amazonaws.com/images/pgvgVt9VlZu2fRShY9LsgbY5ubmGG6b1TRDxdXTV.jpg" class="mx-auto d-block" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span style="color: black" class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</head>
@endsection
