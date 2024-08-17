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

    {{-- introduction --}}
    <section class="content">
        {{-- row --}}
        <div class="content-component d-flex flex-row justify-content-start">
            {{-- intro text --}}
            <div id="introduction" class="me-5">
                <h1>A little about me,</h1>
                <div class="py-3">
                    <p>I'm an Information Technology undergraduate with a 3.91/4.00 GPA from Brawijaya University, specializing in <span style="font-weight: 700">data analytics</span>. I have expertise in Python, SQL, R, Java, and PHP programming languages. I am also proficient with tools and frameworks like Google Analytics 4, Microsoft Excel, TensorFlow, Looker Studio, and Tableau. My experience includes performing various data analysis techniques, building interactive dashboards, and automating the boring stuff. I'm very eager about seeking opportunities to solve real-world challenges and contribute to impactful projects by leveraging data. Oh, I'm also deeply interested in <span style="font-weight: 700">data engineering</span> and am actively expanding my expertise in this field.</p>
                </div>
                <div class="d-inline">
                    <a style="text-decoration: none" href="https://www.linkedin.com/in/ranggaandhito/">
                        <img class="social me-3" width="25px" src="{{ URL::asset('svg/linkedin.svg') }}" alt="">
                    </a>
                    <a style="text-decoration: none" href="https://github.com/damahindra">
                        <img class="social me-3" width="25px" src="{{ URL::asset('svg/github.svg') }}" alt="">
                    </a>
                    <a style="text-decoration: none" href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCHrfSxggbXJfbCjzsKRBRtjfJPKJsxPvvVqtKGtJDtmgJjhpCDPlDrxrwsJXCXNpqPZjGzg">
                        <img class="social me-3" width="25px" src="{{ URL::asset('svg/email.svg') }}" alt="">
                    </a>
                </div>
            </div>
            {{-- end intro text --}}

            {{-- profile pic --}}
            <img style="max-width: 25%; min-width:25%;" class="ms-5" width="25%" src="{{ URL::asset('svg/profile-picture.svg') }}" alt="">
            {{-- end profile pic --}}
        </div>
        {{-- end row --}}
    </section>
    {{-- end introduction --}}

    {{-- interest --}}
    <section class="content" id="interest">
        {{-- container --}}
        <div class="container text-center">
            {{-- title --}}
            <h1 class="mb-5">Areas of Interest</h1>
            {{-- end title --}}

            {{-- row --}}
            <div class="row align-items-center item-row">
                <div class="col">
                    <img src="{{ URL::asset('svg/search.svg') }}" alt="">
                    <h1 class="item-title">Data Analytics</h1>
                    <p>I am very passionate for unveiling hidden patterns within a large dataset.</p>
                </div>
                <div class="col">
                    <img src="{{ URL::asset('svg/chart.svg') }}" alt="">
                    <h1 class="item-title">Data Visualization</h1>
                    <p>I am dedicated to creating beautiful, intuitive,  and interactive dashboards and visualizations.</p>
                </div>
                <div class="col">
                    <img src="{{ URL::asset('svg/ai.svg') }}" alt="">
                    <h1 class="item-title">Machine Learning</h1>
                    <p>I love implementing machine learning techniques and algorithms to help in predicting future trends.</p>
                </div>
            </div>
            <div class="row align-items-center item-row">
                <div class="col">
                    <img src="{{ URL::asset('svg/gears.svg') }}" alt="">
                    <h1 class="item-title">Process Automation</h1>
                    <p>I absolutely LOVE automating repetitive processes to save time and effort.</p>
                </div>
                <div class="col">
                    <img src="{{ URL::asset('svg/layers.svg') }}" alt="">
                    <h1 class="item-title">Data Architecture</h1>
                    <p>I also love building robust data systems to help in providing accurate data.</p>
                </div>
                <div class="col">
                    <img src="{{ URL::asset('svg/mentoring.svg') }}" alt="">
                    <h1 class="item-title">Mentoring</h1>
                    <p>I am also very interested in sharing my thoughts and knowledge to the whole world.</p>
                </div>
            </div>
            {{-- end row --}}
        </div>
        {{-- end container --}}
    </section>
    {{-- end interest --}}

    {{-- tech stack --}}
    <section class="content" id="technology">
        {{-- container --}}
        <div class="container text-center">
            {{-- title --}}
            <h1 class="mb-5">I've mastered these technologies</h1>
            {{-- row --}}
            <div class="row tech-container">
                <div class="col"></div>
                <div class="col tech-item">
                    <img src="{{ URL::asset('svg/mysql.svg') }}" alt="">
                    <p>MySQL</p>
                </div>
                <div class="col tech-item">
                    <img src="{{ URL::asset('svg/postgre.svg') }}" alt="">
                    <p>PostgreSQL</p>
                </div>
                <div class="col tech-item">
                    <img src="{{ URL::asset('svg/python.svg') }}" alt="">
                    <p>Python</p>
                </div>
                <div class="col tech-item">
                    <img src="{{ URL::asset('svg/tf.svg') }}" alt="">
                    <p>TensorFlow</p>
                </div>
                <div class="col tech-item">
                    <img src="{{ URL::asset('svg/excel.svg') }}" alt="">
                    <p>Microsoft Excel</p>
                </div>
                <div class="col tech-item">
                    <img src="{{ URL::asset('svg/vscode.svg') }}" alt="">
                    <p>VS Code</p>
                </div>
                <div class="col tech-item">
                    <img src="{{ URL::asset('svg/looker.svg') }}" alt="">
                    <p>Looker Studio</p>
                </div>
                <div class="col tech-item">
                    <img src="{{ URL::asset('svg/tableau.svg') }}" alt="">
                    <p>Tableau</p>
                </div>
                <div class="col tech-item">
                    <img src="{{ URL::asset('svg/bq.svg') }}" alt="">
                    <p>BigQuery</p>
                </div>
                <div class="col tech-item">
                    <img src="{{ URL::asset('svg/ga.svg') }}" alt="">
                    <p>Google Analytics</p>
                </div>
                <div class="col"></div>
            </div>
            {{-- endrow --}}

            {{-- end title --}}
        </div>
            {{-- end container --}}
    </section>
    {{-- end tech stack --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>