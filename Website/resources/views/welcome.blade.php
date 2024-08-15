<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- title and icon --}}
    <title>Rangga Andhito Damahindra</title>
    <link rel="icon" href="{{ URL::asset('svg/logo.svg') }}" type="image/x-icon"/>

    {{-- css --}}
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    {{-- splash screen --}}
    <section>
        {{-- splash art --}}
        <div class="d-flex justify-content-end">
            <img class="position-absolute " src="{{  URL::asset('svg/sun.svg') }}" width="47%" alt="">
        </div>
        {{-- end splash art --}}
        {{-- navbar --}}
        <nav class="navbar navbar-expand-lg navbar-light ps-3 pe-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                <img src="{{ URL::asset('svg/logo.svg') }}" alt="" width="60">
                </a>
                <div class="col pt-3">
                    <div class="row">
                        <h1 style="font-size: 17px; font-weight: 700;">Rangga Andhito Damahindra<span style="color: #FFDD66">.</span></h1>
                    </div>
                    <div class="row">
                        <p style="font-size: 14px">Passionate for Data</p>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                        <div class="navbar-nav navbar-links">
                            <a class="nav-link ps-4" href="#" style="font-size: 14px">Introduction</a>
                            <a class="nav-link ps-4" href="#" style="font-size: 14px">Projects</a>
                            <a class="nav-link ps-4" href="#" style="font-size: 14px">Freelance Services</a>
                            <a class="nav-link ps-4" href="#" style="font-size: 14px">Contact</a>
                        </div>
                        </div>
                </div>
            </div>
        </nav>
        {{-- end navbar --}}

        {{-- splash content --}}
        
        <div id="opening">
            <h1 id="splash-greet">Hello World!</h1>
            <h1 class="pb-2">My name is Rangga,<br>Professional Data Analyst</h1>
            <p class="mb-4 pb-2">I love to work with data, specifically crafting insights and discovering patterns within huge, complex data. I have experience in utilizing up-to-date tools and frameworks from internships and personal projects. Oh, one more thing, I also freelance, so don’t hesitate to give me a reach!</p>
            <div>
                <a href="https://drive.google.com/file/d/1-RgwyRIZbSpESsZMHIKL_799G4o8POGp/view" style="text-decoration: none">
                    <button style="font-family: 'Poppins', sans-serif; font-size: 13px; color: #fff; background-color: #1e1e1e; border-radius: 10px; width: 200px; height: 50px" class="me-1">My Resume</button>
                </a>
                <button style="font-family: 'Poppins', sans-serif; font-size: 13px; border-radius: 10px; width: 200px; height: 50px" class="ms-1">Contact Me!</button>
            </div>
        </div>
        {{-- end splash content --}}
    </section>
    {{-- end splash screen --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>