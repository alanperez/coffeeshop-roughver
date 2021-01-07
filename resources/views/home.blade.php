@extends('layouts.landing')

@section('title')
{{$settings["general"]->site_title}} Best Coffee
@endsection

@section('content')
<section id="information">
  <div class="restaurant-image">
    <img
      src="/img/Bear-Cave-1.jpg"
      alt="placeholder image">
  </div>

  <div class="info">
    <h2>A Little Bit About Ourselves</h2>
    <div class="paragraphs">
      <p>Bear Cave Coffee is a family owned and operated coffee shop located in downtown Mesquite, Texas. Founding the
        coffee shop in November of 2018 was our opportunity to merge two of our greatest passions: crafting delicious
        coffee beverages, and giving back to the community in Mesquite. We have extended our love of the community to
        our business practices as well. Here at Bear Cave Coffee, we source all of our coffee from Porch Culture in
        Tyler, Texas.

      </p>
      <p>Bear Cave Coffee has firmly established itself at the Corner Theatre in downtown Mesquite. This location has
        given us the opportunity to satisfy everyone's caffeine craving from a spot that places us right in the middle
        of all the warmth and love this town has to offer. Our biggest hope is that we can give as much back to this
        town as it has given us throughout our lives.
      </p>

    </div>
    <a href="/about" class="about-link">
      <span>Learn more about our coffees</span>
      <div class="circle-right">
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
      </div>
    </a>
  </div>
</section>
<!-- <section id="drink-preview">
      <h2>Quench your thirst</h2>
      <div class="button-rounded">View Our Menu</div>
      <div class="container">
        <div class="left-btn">
          <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </div>
        <div class="right-btn">
          <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </div>
        <div class="drink-slider">
          <div class="sliding-system">
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="drink-title">
                  Hot Drinks
                </div>
                <p class="drink-description">
                  Espresso shots topped with hot water create a light layer of crema culminating in this wonderfully rich cup with depth and nuance. 
     Pro Tip: For an additional boost, ask your barista to try this with an extra shot.
                </p>
                <div class="drink-image">
                  <img src="https://png.pngtree.com/element_our/20190531/ourlarge/pngtree-a-cup-of-delicious-chocolate-image_1298629.jpg" alt="">
                </div>
              </div>
            </div>
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="drink-title">
                  Hot Drinks
                </div>
                <p class="drink-description">
                  Espresso shots topped with hot water create a light layer of crema culminating in this wonderfully rich cup with depth and nuance. 
     Pro Tip: For an additional boost, ask your barista to try this with an extra shot.
                </p>
                <div class="drink-image">
                  <img src="https://png.pngtree.com/element_our/20190531/ourlarge/pngtree-a-cup-of-delicious-chocolate-image_1298629.jpg" alt="">
                </div>
              </div>
            </div>
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="drink-title">
                  Hot Drinks
                </div>
                <p class="drink-description">
                  Espresso shots topped with hot water create a light layer of crema culminating in this wonderfully rich cup with depth and nuance. 
     Pro Tip: For an additional boost, ask your barista to try this with an extra shot.
                </p>
                <div class="drink-image">
                  <img src="https://png.pngtree.com/element_our/20190531/ourlarge/pngtree-a-cup-of-delicious-chocolate-image_1298629.jpg" alt="">
                </div>
              </div>
            </div>
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="drink-title">
                  Hot Coffees
                </div>
                <p class="drink-description">
                  Espresso shots topped with hot water create a light layer of crema culminating in this wonderfully rich cup with depth and nuance. 
     Pro Tip: For an additional boost, ask your barista to try this with an extra shot.
                </p>
                <div class="drink-image">
                  <img src="https://png.pngtree.com/element_origin_min_pic/16/08/26/1557bff12de9b0e.jpg" alt="">
                </div>
              </div>
            </div>
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="drink-title">
                  Hot Teas
                </div>
                <p class="drink-description">
                  Espresso shots topped with hot water create a light layer of crema culminating in this wonderfully rich cup with depth and nuance. 
     Pro Tip: For an additional boost, ask your barista to try this with an extra shot.
                </p>
                <div class="drink-image">
                  <img src="https://png.pngtree.com/element_origin_min_pic/16/12/25/6af12fc04a5c47161047603a7da7b7f7.jpg" alt="">
                </div>
              </div>
            </div>
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="drink-title">
                  Iced Teas
                </div>
                <p class="drink-description">
                  Espresso shots topped with hot water create a light layer of crema culminating in this wonderfully rich cup with depth and nuance. 
     Pro Tip: For an additional boost, ask your barista to try this with an extra shot.
                </p>
                <div class="drink-image">
                  <img src="https://png.pngtree.com/element_our/20200609/ourlarge/pngtree-simulation-with-ice-tea-image_2228943.jpg" alt="">
                </div>
              </div>
            </div>
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="drink-title">
                  Cold Coffees
                </div>
                <p class="drink-description">
                  Espresso shots topped with hot water create a light layer of crema culminating in this wonderfully rich cup with depth and nuance. 
     Pro Tip: For an additional boost, ask your barista to try this with an extra shot.
                </p>
                <div class="drink-image">
                  <img src="https://png.pngtree.com/element_our/png_detail/20181102/milk-tea-mixed-with-whipped-cream-ice-coffee-in-a-jar-png_227648.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section> -->


  @include('includes.drink-categories-slider')
@endsection