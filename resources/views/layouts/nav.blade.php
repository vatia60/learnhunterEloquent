<section>
    <div class="main-menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><img src="{{asset('images/logo.png')}}" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="{{route('index')}}">Home</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="{{route('book.create')}}">Book</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="{{route('category.create')}}">Category</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="{{route('phone.create')}}">Phone</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="{{route('phone.show')}}">All Show</a>
                    </li>
                  </ul>
                </div>
              </nav>
        </div>
    </div>
</section>
