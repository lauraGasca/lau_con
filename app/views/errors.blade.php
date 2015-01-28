@extends ('layout')

@section('encabezado')
    <div class="full_page_photo" style="background-image: url({{url('images/404.jpg')}});">
        <div class="hgroup">
             <div class="hgroup_title animated bounceInUp">
                  <div class="container">
                       <h1>OMG! <strong>error 404</strong></h1>
                  </div>
             </div>
             <div class="hgroup_subtitle animated bounceInUp skincolored">
                  <div class="container">
                       <p>We are really sorry but the page you requested cannot be found!</p>
                  </div>
             </div>
        </div>
    </div>
@stop

@section('contenido')
    <div class="container triangles-of-section">
        <div class="triangle-up-left"></div>
        <div class="square-left"></div>
        <div class="triangle-up-right"></div>
        <div class="square-right"></div>
   </div>
   <section class="call_to_action four-o-four">
        <div class="container"> <i class="fa fa-ambulance"></i>
             <h3>error 404 is nothing to really worry about...</h3>
             <h4>you may have mis-typed the URL, please check your spelling and try again.</h4>
        </div>
   </section>
   <section>
        <div class="container">
             <div class="search_form">
                  <form name="search_form" id="search_form" method="post" action="#">
                       <div class="row">
                            <div class="col-sm-2 col-md-2"></div>
                            <div class="col-sm-6 col-md-6">
                                 <input name="search" id="search" class="form-control" type="text">
                            </div>
                            <div class="col-sm-4 col-md-4"> <a id="submit_btn" class="btn btn-primary" name="submit">Search</a> </div>
                            <div class="col-sm-2 col-md-2"></div>
                       </div>
                  </form>
             </div>
        </div>
   </section>
   <section class="twitter_feed_wrapper skincolored_section">
        <div class="container">
             <div class="row">
                  <div class="twitter_feed_icon wow fadeInDown"><a href="https://twitter.com/PlethoraThemes"><i class="fa fa-twitter"></i></a></div>
                  <div id="twitter_flexslider" class="flexslider">
                       <ul class="slides">
                            <li class="item">
                                 <blockquote>
                                      <p> This Clean Flexible Multipurpose Bootstrap 3.1.1 HTML5 Template will soon become a Wordpress theme with great support! <a href="#">http://unhub.com/LIot</a> — Plethora Themes (@plethorathemes) <a href="https://twitter.com/plethorathemes/">April 4 2014</a> </p>
                                 </blockquote>
                            </li>
                            <li class="item">
                                 <blockquote>
                                      <p> 'Game of Thrones' Opening Sequence Reimagined With Social Media http://flip.it/3AiCh  via @mashable </p>
                                 </blockquote>
                            </li>
                            <li class="item">
                                 <blockquote>
                                      <p> SEO expert debunks 5 of the biggest SEO myths @CreativeBloQ http://www.creativebloq.com/business/seo-expert-debunks-5-biggest-seo-myths-21410786 … </p>
                                 </blockquote>
                            </li>
                       </ul>
                  </div>
             </div>
        </div>
   </section>
@stop