<section id="drink-preview">
    <h2>Menu</h2>
    
    <div class="container">
      <div class="left-btn">
        <i class="fa fa-chevron-left" aria-hidden="true"></i>
      </div>
      <div class="right-btn">
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
      </div>
      <div class="drink-slider">
        <div class="sliding-system">
        @foreach ($categories as $category)
            <a href="/menu/{{$category->title}}" class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="drink-title">
                  {{$category->title}}
                </div>
                <p class="drink-description">
                  {{$category->description}}
                </p>
                <div class="drink-image">
                  <img src="{{$category->image_url}}">
                </div>
              </div>
          </a>
        @endforeach
          
          
        </div>
      </div>
    </div>

  </section>