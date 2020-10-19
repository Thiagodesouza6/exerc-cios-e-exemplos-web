
   
    

    
        <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-light bg-custom-1">
           
            

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
               
                    <ul class="navbar-nav mr-auto">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{ asset('img/tupper.png') }}"width="200px" alt="Logo da Mirror Fashion">
                          </a>
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                              <span class="navbar-toggler-icon"></span>
                          </button>
                    </ul>
     
                    <div class="input-group margem ">
                        <form action="/produtos/pesquisar" method="post" class="form-inline ">
                          <input type="hidden" name="_token" value="{{{csrf_token()}}}">
                        
                     
                          <input type="text" class="form-control" placeholder="Digite o que você procura"  id="nome" name="nome" >
                          <button class="btn btn-dark" type="submit" value="Pesquisar">
                            <i class="fa fa-search"></i>
                       </button>
                      </form>
                      
                      </div>
                    <ul class="navbar-nav centralizar ">
                      
                        @guest
                           
                            @if (Route::has('register'))
                            <div class="row pr-4">  <li class="nav-item dropdown  " >
                                    <a class="nav-link dropdown-toggle  text-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-user"></i> <p >Sua conta</p>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="{{ route('register') }}">{{ __('Cadastrar') }}</a>
                                      <a class="dropdown-item" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                                  
                                    </div>
                                  </li> 
                                </div><div class="row">
                                  <li class="nav-item ">
                                        <a class="nav-link "  href="{{ route('login') }}">Carrinho</a>
                                      </li>
                                
                              	  </div>
                            @endif
                        @else
                        <div class="row"> <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/home') }}">Dashboard</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }}
                                    </a>
                                   

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                           
                            </li>
                        </div>
                            <div class="row">
                            <li class="nav-item pl-4 ">
                                    <a class="nav-link "  href="{{ url('/carrinho') }}">Carrinho</a>
                                  </li>
                                </div>
                            
                        @endguest
                    </ul>
               
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-dark bg-purple py-2">

            <div class="collapse navbar-collapse "  id="navbarSupportedContent">
              <ul class="navbar-nav container  ">
                      <li class="nav-item hoverbar col-sm px-3 " >
                              <a class="nav-link" href="{{ url('/armazenagem') }}"> <p class="lead text-center"> Armazenagem</p></a>
                            </li>
                
                            <li class="nav-item hoverbar  col-sm px-3  ">
                                  <a class="nav-link" href="{{ url('/freezer') }}"> <p class="lead text-center">Freezer</p></a>
                                </li>
                                <li class="nav-item hoverbar col-sm px-3 ">
                                      <a class="nav-link" href="{{ url('/garrafa') }}"><p class="lead text-center">Garrafa</p></a>
                                    </li>
                                    <li class="nav-item dropdown hoverbar col-sm px-3 " >
                                        <a class="nav-link dropdown-toggle  text-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                           <p class="lead text-center"> Coleção por Cor</p>
                                        </a>
                                        <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ url('/azul') }}">Azul</a>
                                            <a class="dropdown-item" href="{{ url('/rosa') }}">Rosa</a>
                                            <a class="dropdown-item" href="{{ url('/verde') }}">Verde</a>
                                            <a class="dropdown-item" href="{{ url('/preto') }}">Preto</a>
                                      
                                        </div>
                                      </li> 
                                   
                                      <li class="nav-item dropdown hoverbar px-3 col-sm" >
                                          <a class="nav-link dropdown-toggle  text-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                             <p class="lead text-center">Outros</p>
                                          </a>
                                          <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                                              <a class="dropdown-item " href="{{ url('/micro-ondas') }}">Micro-Ondas</a>
                                        
                                          </div>
                                        </li> 
                                        
                                      
              </ul>
             
            </div>
            </nav>
        
    


