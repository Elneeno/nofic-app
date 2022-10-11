<nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ route('home') }}">Home</a></li>
          <li class="dropdown"><a href="{{ route('about') }}"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('about') }}">About NOFCN</a></li>
              <li><a href="{{ route('about_md') }}">The Medical Director</a></li>
              <li><a href="{{ route('about_fistula') }}">Obstetrics Fistula</a></li>
            </ul>
          </li>
          </li>
          <li class="dropdown"><a href="#"><span>Updates</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('news_home') }}">News</a></li>
                <li><a href="{{ route('gallery') }}">Gallery</a></li>
              <li class="dropdown"><a href="#"><span>Publications</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{ url('/documents') }}">Monthly Bulletin</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="{{ route('contact') }}">Contact Us</a></li>
            <li><b><a class="nav-link" href="{{ route('x') }}"><span class="icofont-ui-lock">&nbsp;Login</span> </a></b></li>
           
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->