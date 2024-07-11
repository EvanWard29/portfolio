<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Evan Ward</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        @vite(['resources/css/app.scss', 'resources/js/app.js'])
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Evan Ward</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#skills">Skills</a> </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="img-fluid mb-5 rounded" src="{{ asset('assets/img/profile.webp') }}" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Evan Ward</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">PHP/Laravel Developer</p>
                <div class="row">
                    <div class="col">
                        <a class="link-light text-decoration-none" href="https://www.linkedin.com/in/evan-richard-ward/" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                            </svg>
                        </a>
                    </div>
                    |
                    <div class="col">
                        <a class="link-light text-decoration-none" href="https://github.com/EvanWard29" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    @foreach($projects as $project)
                        <div class="col-md-6 col-lg-4 mb-5">
                            <div class="portfolio-item mx-auto shadow-sm" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $project->id }}">
                                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                    <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid img-thumbnail" src="assets/img/portfolio/{{ $project->id }}/thumbnail.webp" alt="{{ $project->id }}" width="900px" height="650" />
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="text-center lead">
                    <p>Hi! My name is Evan.</p>
                    <p>I'm a dedicated PHP/Laravel developer with extensive experience in developing backend features and APIs within the Laravel framework.</p>
                    <p>My journey in PHP and Laravel has been fueled by a passion for continuous learning and an unwavering attention to detail.</p>
                    <p>I thrive on solving complex problems and delivering robust solutions that ensure reliability, security, and performance.</p>
                    <p>Here you'll find a collection of projects and accomplishments I am most proud of.</p>
                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="{{ asset('assets/Evan_Ward-CV.pdf') }}" target="_blank">
                        <i class="fas fa-download me-2"></i>
                        View CV
                    </a>
                </div>
            </div>
        </section>
        <!-- Skills Section-->
        <section class="page-section" id="skills">
            <div class="container">
                <!-- Skills Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary">Skills</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Skills Section Content-->
                <div class="row align-items-md-stretch">
                    <!-- Languages-->
                    <div class="col" id="languages">
                       <div class="card h-100">
                           <div class="card-body">
                               <h3 class="card-title text-secondary">Languages</h3>
                               @foreach($skills->where('type', \App\Enums\SkillType::Language) as $language)
                                   <div class="row justify-content-between align-items-center">
                                       <div class="col text-start">
                                           <p class="mb-1 lead">{{ $language->description }}</p>
                                       </div>
                                       <div class="col text-end lead">
                                           <p class="mb-1 text-muted">{{ $language->percent }}%</p>
                                       </div>
                                   </div>
                                   <div class="progress mb-4">
                                       <div class="progress-bar" role="progressbar" style="width: {{ $language->percent }}%" aria-valuenow="{{ $language->percent }}" aria-valuemin="0" aria-valuemax="100"></div>
                                   </div>
                               @endforeach
                           </div>
                       </div>
                    </div>
                    <div class="d-lg-none w-100 mb-4"></div>
                    <!-- Qualities -->
                    <div class="col" id="qualities">
                        <div class="row">
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h3 class="card-title text-secondary">Qualities</h3>
                                        <ul class="lead h-100">
                                            @foreach($skills->where('type', \App\Enums\SkillType::Quality) as $quality)
                                                <li class="mb-2">{{ $quality->description }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100 mb-4"></div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h3 class="card-title text-secondary">Technical Skills</h3>
                                        <ul class="lead h-100">
                                            @foreach($skills->where('type', \App\Enums\SkillType::Technical) as $technical)
                                                <li class="mb-2">{{ $technical->description }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Evan Ward {{now('Europe/London')->year}}</small></div>
        </div>
        <!-- Portfolio Modals-->
        @foreach($projects as $project)
            <div class="portfolio-modal modal fade" id="portfolioModal{{ $project->id }}" tabindex="-1" aria-labelledby="portfolioModal{{ $project->id }}" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                        <div class="modal-body text-center pb-5">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <!-- Portfolio Modal - Title-->
                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">{{ $project->title }}</h2>
                                        <!-- Icon Divider-->
                                        <div class="divider-custom">
                                            <div class="divider-custom-line"></div>
                                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                            <div class="divider-custom-line"></div>
                                        </div>
                                        <!-- Portfolio Modal - Image-->
                                        <img class="img" src="assets/img/portfolio/{{ $project->id }}/thumbnail.webp" alt="..." />
                                        @if(!is_null($project->links))
                                            @foreach($project->links as $link)
                                                @php $link = str($link); @endphp
                                                <a href="{{ $link }}" class="@if($link->contains('github.com')) text-secondary @elseif($link->contains('youtube.com') || $link->contains('youtu.be')) text-danger @endif text-decoration-none" target="_blank">
                                                    @if($link->contains('github.com'))
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                                                        </svg>
                                                    @elseif($link->contains('youtube.com') || $link->contains('youtu.be'))
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                                                        </svg>
                                                    @elseif($link->contains('catchapp.mobi'))
                                                        <svg width="24px" height="24px" viewBox="0 0 30 30" version="1.1"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <title>CatchApp Bookings</title>
                                                            <defs>
                                                                <linearGradient x1="87.2906977%" y1="13.4825581%" x2="7.80232558%" y2="91.3313953%" id="linearGradient-1">
                                                                    <stop stop-color="#72B62B" offset="0%"></stop>
                                                                    <stop stop-color="#009DD8" offset="100%"></stop>
                                                                </linearGradient>
                                                                <linearGradient x1="81.5252606%" y1="0.733017744%" x2="19.3132024%" y2="100.537795%" id="linearGradient-2">
                                                                    <stop stop-color="#FFFFFF" offset="0%"></stop>
                                                                    <stop stop-color="#FFFFFF" stop-opacity="0.8" offset="69%"></stop>
                                                                    <stop stop-color="#FFFFFF" stop-opacity="0.7" offset="100%"></stop>
                                                                </linearGradient>
                                                            </defs>
                                                            <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g id="Sections/LinkFooter" transform="translate(-56.000000, 0.000000)">
                                                                    <g id="CatchApp_Platform_Horizontal_RGB" transform="translate(56.000000, 0.000000)">
                                                                        <circle id="Oval" fill="url(#linearGradient-1)" fill-rule="nonzero" cx="15" cy="15" r="15"></circle>
                                                                        <g id="CatchAppIcon-2" transform="translate(5.833333, 5.416667)" fill="url(#linearGradient-2)">
                                                                            <path d="M17.7410131,5.10181818 C17.7410131,2.85409091 15.7561275,1.46015152 14.8427288,0.954848485 C13.4726307,0.205606061 12.1903595,-0.0209090909 11.9093137,0.153333333 C11.5755719,0.362424242 11.3823529,0.780606061 11.4174837,1.80863636 C11.435049,2.26166667 11.4877451,2.69727273 11.5404412,3.16772727 C11.5931373,3.72530303 11.874183,5.13666667 11.874183,5.13666667 C11.874183,5.13666667 11.4701797,3.88212121 11.3296569,3.27227273 C11.0134804,2.29651515 10.8905229,2.00030303 10.2757353,1.46015152 C9.76633987,1.02454545 9.11642157,0.832878788 8.30841503,0.902575758 L8.27328431,0.902575758 C3.59837756,1.40263247 0.054298703,5.31637372 0.0526960784,9.98060606 C0.0526960784,15.0162121 4.21568627,19.0934848 9.34477124,19.0934848 C11.1188725,19.0934848 12.4538399,18.7624242 13.7888072,17.9957576 C14.2103758,17.7343939 15.5804739,16.7934848 15.4048203,15.3298485 C15.3420639,14.8016789 15.0624453,14.3225814 14.6319444,14.0056061 C14.2000623,13.6678426 13.6491328,13.517083 13.1037582,13.5874242 C12.2130223,13.696387 11.577713,14.4977592 11.6809641,15.3821212 C11.7333423,15.7170795 11.9084696,16.02109 12.1727941,16.2359091 C12.4493358,16.4422688 12.7950218,16.5357894 13.1388889,16.4972727 C13.4091303,16.4650167 13.6553692,16.327543 13.823389,16.1151206 C13.9914088,15.9026981 14.0674328,15.6327442 14.0347222,15.364697 C14.0114227,15.157283 13.903512,14.9683822 13.7361111,14.8419697 C13.5693111,14.7063966 13.3514618,14.6491938 13.1388889,14.6851515 C12.9739803,14.6993142 12.8222092,14.7801544 12.719212,14.9086905 C12.6162148,15.0372267 12.5710645,15.2021359 12.5943627,15.364697 C12.6095794,15.4879203 12.6725845,15.6004182 12.7700163,15.6783333 C12.8722703,15.7493784 12.9973957,15.7804084 13.1213235,15.7654545 C13.3193415,15.7386188 13.4723774,15.5795835 13.4901961,15.3821212 C13.4973826,15.2961334 13.4546982,15.2135632 13.3801121,15.1691711 C13.3055259,15.1247789 13.2119931,15.1262753 13.1388889,15.1730303 C13.2135951,15.1014457 13.3152643,15.064422 13.4189175,15.0710556 C13.5225708,15.0776892 13.6186011,15.1273652 13.683415,15.2078788 C13.8461595,15.4145332 13.8388008,15.7065191 13.6658497,15.9048485 C13.5481458,16.0730039 13.3618671,16.1813245 13.1564542,16.2010606 C12.6764547,16.2628581 12.2365318,15.9277739 12.1727941,15.4518182 C12.1462616,15.1792991 12.2212433,14.906575 12.3835784,14.6851515 C12.5507312,14.4712602 12.7976312,14.3331022 13.0686275,14.3018182 C13.3885029,14.2550556 13.7134838,14.3435494 13.9644608,14.5457576 C14.2195459,14.7408028 14.3842675,15.0298921 14.4211601,15.3472727 C14.4834991,15.8601789 14.2618611,16.3665172 13.8415033,16.6715152 L13.8415033,16.6715152 C13.1740196,17.1593939 12.4011438,17.3684848 11.2242647,17.3684848 L11.2066993,17.3684848 C8.59710878,17.3684848 6.48161765,15.2699892 6.48161765,12.6813636 C6.48161765,10.0927381 8.59710878,7.99424242 11.2066993,7.99424242 L13.8415033,7.99424242 C14.6616578,8.0185988 15.4817099,7.94251944 16.2830882,7.76772727 L16.3357843,7.76772727 C16.3533497,7.76772727 16.3533497,7.76772727 16.370915,7.75030303 C16.3978852,7.73621785 16.4283851,7.73016688 16.4587418,7.73287879 C16.5465686,7.6980303 16.6343954,7.66318182 16.6343954,7.64575758 L16.6168301,7.62833333 C16.5864733,7.63104524 16.5559734,7.62499427 16.5290033,7.61090909 C16.4587418,7.61090909 16.4060458,7.59348485 16.3357843,7.59348485 C16.2488298,7.57841759 16.1605052,7.57257659 16.0723039,7.57606061 C15.3064542,7.51159091 14.3631944,7.36 13.7167892,7.06378788 C13.5622141,6.99931818 13.4164216,6.88954545 13.4743873,6.74840909 C13.5428922,6.57416667 13.7238154,6.60204545 14.0276961,6.73621212 L14.0276961,6.73621212 C14.6286185,6.96147032 15.2593786,7.09881749 15.9001634,7.14393939 L15.9001634,7.14393939 C15.9001634,7.14393939 16.9013889,7.26590909 17.2702614,7.12651515 C17.3984483,7.07818391 17.504568,6.98530112 17.5688725,6.86515152 C17.7972222,6.16818182 17.7445261,5.10530303 17.7445261,5.10530303 M12.8086601,3.50227273 C12.7943767,2.90027072 13.1489523,2.34961937 13.7055856,2.10935905 C14.2622188,1.86909873 14.9100843,1.98706515 15.3444097,2.40776391 C15.778735,2.82846267 15.9130463,3.46813286 15.6841601,4.0258574 C15.4552739,4.58358193 14.9087613,4.94831814 14.3017157,4.94848485 C13.9078266,4.95985398 13.5262182,4.81180885 13.2446129,4.53838144 C12.9630076,4.26495404 12.805631,3.88966634 12.8086601,3.49878788 L12.8086601,3.50227273 Z M14.6214052,3.63643939 C14.4855901,3.63643939 14.3754902,3.74565478 14.3754902,3.88037879 C14.3754902,4.0151028 14.4855901,4.12431818 14.6214052,4.12431818 C14.7572204,4.12431818 14.8673203,4.0151028 14.8673203,3.88037879 C14.8687744,3.81525053 14.8433328,3.75236195 14.7968959,3.70629803 C14.7504589,3.6602341 14.6870609,3.63499691 14.6214052,3.63643939" id="Shape"></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    @else
                                                        {{ $link }}
                                                    @endif
                                                </a>
                                                @if(!$loop->last)|@endif
                                            @endforeach
                                        @endif
                                        <!-- Portfolio Modal - Description-->
                                        <div class="text-start mt-3">
                                            {!! $project->description !!}
                                        </div>
                                        <button class="btn btn-primary" data-bs-dismiss="modal">
                                            <i class="fas fa-xmark fa-fw"></i>
                                            Close Window
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
