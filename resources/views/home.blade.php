@extends ('app')
@include('navbar')
@section ('content')
<div class="row">
  <div class="col-1 ms-5 me-2 mt-5">
    <div class="row">
      <a class="btn btn-round btn-outline-dark btn-floating mb-3 p-1">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
        </svg>
      </a>
    </div>
    <div class="row">
      <a class="btn btn-round btn-outline-dark btn-floating mb-3 p-1">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
          <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
        </svg>
      </a>
    </div>
    <div class="row">
      <a class="btn btn-round btn-outline-dark btn-floating mb-3 p-1">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pinterest" viewBox="0 0 16 16">
          <path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z"/>
        </svg>
      </a>
    </div>
  </div>


  <div class="col-4 ms-5 mt-4">
    <div class="row">
      <h1 class="fw-bold display-5 title" id="home">How do you design content for every language</h1>
    </div>
    <div class="row my-3">
      <p class="fw-lighter subtitle">We're the content of the research and design at Oxford. We help riders move, restaurants grow and customers eat in over 200 cities around the world. Come find the answers with us</p>
    </div>
    <div class="row my-3">
      <a class="btn btn-work btn-round btn-dark btn-floating ms-2 mb-3 text-white">Work with us</a>
    </div>
    <div class="row">
      <a class="btn border border-secondary btn-circle btn-outline-light rounded-circle btn-floating ms-2 mt-5 text-black py-4">Scroll</a>
    </div>
  </div>

  <div class="col-5 overflow ms-auto">
    <div class="blue_image">
      <img class="image" src="{{url('img/laptop_person.png')}}" alt="A picture of someone on a laptop" >
    </div>
  </div>

  <div class="row">
    <div class="blue_image2">
      <div class="col-12 background bg-image text-white p-5">
        <div class="col-4 ms-5 mt-5 mb-2">
          <h2 id="info" class="h3 mb-2 fw-bold">Delighting customers in over 200 cities in the world.</h2>

          <p class="mb-2">We're the content, research and design team at Oxford. We help riders move, restaurants grow and customers eat in over 200 cities around the world. Come find the answer with us.</p>

          <a class="btn btn-work btn-round btn-dark btn-floating ms-2 my-3 text-white">Find Out More</a>
        </div>
      </div>
    </div>
    <div class="container overflow">
      <img class="image_width absolute" src="{{url('img/3d_shapes.png')}}" alt="A graphic of 3d shapes" >
    </div>
  </div>

  <div class="row background-grey pt-5">
    <div class="col pb-3 px-5">
      <div class="col-6 mx-auto">
        <div class="row mb-4">
          <h2 class="title" id="expertises" >Our Expertises</h2>
        </div>
        <div class="row">
          <p class="subtitle">We're the content, research and design team at Oxford. We help riders move, restaurants grow and customers eat in over 200 cities around the world. Come find the answer with us.</p>        
        </div>
      </div>

      <div class="container w-75">
        <div class="row bg-white">
          <div class="col-4 p-5">
            <div class="mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z"/>
              </svg>
            </div>
            <h3 class="subheading">
              Research
            </h3>
            <p class="subtitle">We're the content, research and design team at Oxford. We help riders move, restaurants grow and customers eat in over 200 cities around the world. Come find the answer with us.</p>
            <a class="btn btn-work btn-sm btn-outline-dark ms-2 my-auto rounded-pill mt-5">Find Out More</a>        
          </div>
          <div class="col-4 p-5">
            <div class="mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="currentColor" class="bi bi-tv" viewBox="0 0 16 16">
                <path d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM13.991 3l.024.001a1.46 1.46 0 0 1 .538.143.757.757 0 0 1 .302.254c.067.1.145.277.145.602v5.991l-.001.024a1.464 1.464 0 0 1-.143.538.758.758 0 0 1-.254.302c-.1.067-.277.145-.602.145H2.009l-.024-.001a1.464 1.464 0 0 1-.538-.143.758.758 0 0 1-.302-.254C1.078 10.502 1 10.325 1 10V4.009l.001-.024a1.46 1.46 0 0 1 .143-.538.758.758 0 0 1 .254-.302C1.498 3.078 1.675 3 2 3h11.991zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2z"/>
              </svg>
            </div>
            <h3 class="subheading">
              Content
            </h3>
            <p class="subtitle">We're the content, research and design team at Oxford. We help riders move, restaurants grow and customers eat in over 200 cities around the world. Come find the answer with us.</p>        
            <a class="btn btn-work btn-sm btn-outline-dark ms-2 mb-3 rounded-pill mt-5">Find Out More</a>
          </div>
          <div class="col-4 p-5">
            <div class="mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="currentColor" class="bi bi-box" viewBox="0 0 16 16">
                <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5 8.186 1.113zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
              </svg>
            </div>
            <h3 class="subheading">
              Product Design
            </h3>
            <p class="subtitle">We're the content, research and design team at Oxford. We help riders move, restaurants grow and customers eat in over 200 cities around the world. Come find the answer with us.</p>        
            <a class="btn btn-work btn-sm btn-outline-dark ms-2 mb-3 rounded-pill mt-5">Find Out More</a>
          </div>
        </div>
      </div>


        </div>
      </div>
    </div>
  </div>



</div>

@endsection