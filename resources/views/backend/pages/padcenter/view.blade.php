<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ ('\backend\css\padcenter.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <title>Document</title>
</head>
<body>
    <div class="container d-flex justify-content-center">
        <figure class="card card-product-grid card-lg"> <a href="#" class="img-wrap" data-abc="true"> <img src="{{ url('/uploads/'.$padcenter->image) }}"> </a>
            <figcaption class="info-wrap">
                <div class="row">
                    <div class="col-md-9 col-xs-9"> <a href="#" class="title" data-abc="true">{{ $padcenter->name }}</a> <span class="rated">{{ $padcenter->location }}</span> </div>
                    <div class="col-md-3 col-xs-3">
                        <div class="rating text-right"> {{ $padcenter->phone }} </div>
                    </div>
                </div>
            </figcaption>
            <div class="bottom-wrap-payment">
                <figcaption class="info-wrap">
                    <div class="row">
                        <div class="col-md-9 col-xs-9"> <a href="#" class="title" data-abc="true" style="font-weight: bold;" >Description</a>
                            <p>{{ $padcenter->description }}</p>
                        </div>
                        
                      
                    </div>
                </figcaption>
            </div>
            <div class="bottom-wrap"> <a href="#" class="btn btn-primary float-right" data-abc="true"> Book now </a>
                <div class="price-wrap"> <a href="{{ route('padcenter') }}" class="btn btn-warning float-left" data-abc="true"> Back </a> </div>
            </div>
        </figure>
    </div>
</body>
</html>