<div class="row gx-0">
    <div class="col-lg-3 bg-dark d-none d-lg-block">
        <a href="#" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
            <h1 class="m-0 text-primary text-uppercase">Hotel</h1>
        </a>
    </div>
    <div class="col-lg-9">
        <div class="row gx-0 bg-white d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                    <i class="fa fa-envelope text-primary me-2"></i>
                    <p class="mb-0">ivannoss393@gmail.com.com</p>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-2">
                    <i class="fa fa-phone-alt text-primary me-2"></i>
                    <p class="mb-0">+237 680623711</p>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="d-inline-flex align-items-center py-2">
                    <a class="me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="me-3" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="me-3" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="me-3" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="" href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
            <a href="index.html" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 text-primary text-uppercase">Hotelier</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="/" class="nav-item nav-link">Acceuil</a>
                    <a href="/propos" class="nav-item nav-link">à Propos</a>
                    <a href="/services" class="nav-item nav-link">Services</a>
                    <a href="/room" class="nav-item nav-link">Chambres</a>
                    <a href="/equipe" class="nav-item nav-link">Notre équipe</a>
                    <a href="/temoignage" class="nav-item nav-link ">Témoignage</a>
                    <a href="/contact" class="nav-item nav-link">Contact</a>
                    
                     {{-- <ul class="dropdown nav-item nav-link " style="align: right">
                        <li class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                         <img src="{{Auth::user()->photo}}" alt="profil" style="height: 1cm; width: 1cm; border-radius: 100%"> 
                          {{Auth::user()->name}}
                        </li>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li>
                            <form action="{{route('logout')}}" method="POST">
                                @csrf 
                                <button class="decon btn btn-white" type="submit">Déconnexion</button>
                              </form> <br>
              
                             
                          </li>
                          <li>
                            <form action="/profile" method="POST">
                                @csrf 
                                <input class="decon btn btn-white" type="submit" value="Profile">
                              </form>  
                          </li>
                          
                        </ul>
                    </ul> --}}
                </div>

            </div>
        </nav>
    </div>
</div>