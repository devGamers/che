<!-- Header
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-fixed bottom-border dark no-background bootsnav">

            <div class="container">

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index-2.html">
                        <img src="{{ asset('storage/logo.png') }}" class="logo logo-display" alt="Logo">
                        <img src="{{ asset('storage/logo.png') }}" class="logo logo-scrolled" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li class="{{ $page=='accueil' ? 'active' : '' }}">
                            <a href="{{ url('/') }}">Accueil</a>
                        </li>
                        <li class="{{ $page=='specialite' ? 'active' : '' }}">
                            <a href="{{ route('specialite') }}">Spécialité</a>
                        </li>
                        <li class="{{ $page=='partenaire' ? 'active' : '' }}">
                            <a href="{{ route('partenaire') }}">Partenaires</a>
                        </li>
                        <li class="{{ $page=='actualite' ? 'active' : '' }}">
                            <a href="{{ route('actualite') }}">Actualités</a>
                        </li>
                        <li class="{{ $page=='contact' ? 'active' : '' }}">
                            <a href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->
