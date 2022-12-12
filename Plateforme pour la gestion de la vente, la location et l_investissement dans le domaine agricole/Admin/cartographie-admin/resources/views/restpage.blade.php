<div class="whatever">

  <section id="about" class="about">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
       
    <div class="row">
      <div class="container px-4 px-lg-5 mt-5" style="display:flex;justify-content: center;">
    <!-- Indicators -->

    <!-- Wrapper for slides -->
    @php($i=0)
    <div class="carousel-inner">
      <div class="item active">
            @foreach ($annonces as $annonce)
            @php($i++)
            @php($id=$annonce->id_annonce)
            @if($i<=2)
          <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300":>
            <div class="product-card mb-30">
            @if($annonce->achat!=NULL)
              <div class="product-badge bg-secondary border-default" style="z-index:1;">Achat</div>
              @endif
              @if($annonce->invest!=NULL)
              <div class="product-badge bg-secondary border-default" style="z-index:1;">Investissement</div>
              @endif
              @if($annonce->location!=NULL)
              <div class="product-badge bg-secondary border-default" style="z-index:1;">Location</div>
              @endif
              <a class="product-thumb" href="#" data-abc="true">
                  <div id="product-carousel{{$i}}" class="carousel slide" data-interval="false">
                  <div class="carousel-inner border">
                  @php($count=0)
                  @foreach($images as $image)              
                  @if($image->terrain==$annonce->id_terrain)
                  @php($count++)
                          @if($count==1)                      
                              <div class="carousel-item active">
                                <img class="w-100 card-img-top" style="width: 100% !important;height: 300px !important;" src="data:image/png;base64,{{ chunk_split(base64_encode($image->image)) }}" style="height: 157px;width: auto;" alt="Image">
                              </div>
                          @else
                          <div class="carousel-item">
                                    <img class="w-100 card-img-top" style="width: 100% !important;height: 300px !important;" src="data:image/png;base64,{{ chunk_split(base64_encode($image->image)) }}" style="height: 157px;width: auto;" alt="Image">
                          </div>
                          <a class="carousel-control-prev" href="#product-carousel{{$i}}" data-slide="prev"><i class="fa fa-2x fa-angle-left text-dark"></i></a>
                          <a class="carousel-control-next" href="#product-carousel{{$i}}" data-slide="next"><i class="fa fa-2x fa-angle-right text-dark"></i></a>     
                          @endif 
                @endif
                @endforeach
                </div> 
                </div>
             
              <div class="product-card-body">
              <div class="product-category"><a href="#" data-abc="true">{{$annonce->ville}}</a></div>
              <h3 class="product-title"><a href="#" data-abc="true"></a></h3>
              @if($annonce->achat!=NULL)
              <h4 class="product-price">{{$annonce->prix_achat}} DH</h4>
              @endif
              @if($annonce->invest!=NULL)
              <h4 class="product-price">{{$annonce->prix_invest}} DH</h4>
              @endif
              @if($annonce->location!=NULL)
              <h4 class="product-price">{{$annonce->prix_loca}} DH</h4>
              @endif
              </div>
              @if($annonce->validation==0)
              <div class="product-button-group"><a class="product-button btn-wishlist" href="check/{{ $id }}" data-abc="true"><i class="mdi mdi-check-all"></i><span>Valider</span></a>
                <a class="product-button btn-wishlist" href="delete/{{ $id }}" data-abc="true"><i class="mdi mdi-delete"></i><span>Suprimmer</span></a></div>
              <div class="product-button-group"><a class="product-button" style="cursor: pointer;" data-toggle="modal"  data-target="#myModal{{$annonce->id_annonce}}"><i class="fa fa-angle-right"></i><span>Details</span></a></div>
                
                @else
                <div class="product-button-group">
                  <a class="product-button" style="cursor: pointer;" data-toggle="modal"  data-target="#myModal{{$annonce->id_annonce}}"><i class="fa fa-angle-right"></i><span>Details</span></a></div>
                  @endif
            </div>
          </div> 
          @endif
          @endforeach
                </div>
        <div class="item">
        @php($i=0)
            @foreach ($annonces as $annonce)
            @php($i++)
            @php($id=$annonce->id_annonce)
            @if($i>2)
          <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300":>
            <div class="product-card mb-30">
              @if($annonce->achat!=NULL)
              <div class="product-badge bg-secondary border-default" style="z-index:1;">Achat</div>
              @endif
              @if($annonce->invest!=NULL)
              <div class="product-badge bg-secondary border-default" style="z-index:1;">Investissement</div>
              @endif
              @if($annonce->location!=NULL)
              <div class="product-badge bg-secondary border-default" style="z-index:1;">Location</div>
              @endif
              <a class="product-thumb" href="#" data-abc="true">
                  <div id="product-carousel{{$i}}" class="carousel slide" data-interval="false">
                  <div class="carousel-inner border">
                  @php($count=0)
                  @foreach($images as $image)              
                  @if($image->terrain==$annonce->id_terrain)
                  @php($count++)
                          @if($count==1)                      
                              <div class="carousel-item active">
                                <img class="w-100 card-img-top" style="width: 100% !important;height: 300px !important;" src="data:image/png;base64,{{ chunk_split(base64_encode($image->image)) }}" style="height: 157px;width: auto;" alt="Image">
                              </div>
                          @else
                          <div class="carousel-item">
                                    <img class="w-100 card-img-top" style="width: 100% !important;height: 300px !important;" src="data:image/png;base64,{{ chunk_split(base64_encode($image->image)) }}" style="height: 157px;width: auto;" alt="Image">
                          </div>
                          <a class="carousel-control-prev" href="#product-carousel{{$i}}" data-slide="prev"><i class="fa fa-2x fa-angle-left text-dark"></i></a>
                          <a class="carousel-control-next" href="#product-carousel{{$i}}" data-slide="next"><i class="fa fa-2x fa-angle-right text-dark"></i></a>     
                          @endif 
                @endif
                @endforeach
                </div> 
                </div>
              </a>
              <div class="product-card-body">
              <div class="product-category"><a href="#" data-abc="true">{{$annonce->ville}}</a></div>
              <h3 class="product-title"><a href="#" data-abc="true"></a></h3>
              @if($annonce->achat!=NULL)
              <h4 class="product-price">{{$annonce->prix_achat}} DH</h4>
              @endif
              @if($annonce->invest!=NULL)
              <h4 class="product-price">{{$annonce->prix_invest}} DH</h4>
              @endif
              @if($annonce->location!=NULL)
              <h4 class="product-price">{{$annonce->prix_loca}} DH</h4>
              @endif
              </div>
              @if($annonce->validation==0)
              <div class="product-button-group"><a class="product-button btn-wishlist" href="check/{{ $id }}" data-abc="true"><i class="mdi mdi-check-all"></i><span>Valider</span></a>
                <a class="product-button btn-wishlist" href="delete/{{ $id }}" data-abc="true"><i class="mdi mdi-delete"></i><span>Suprimmer</span></a></div>
                <div class="product-button-group">
                <a class="product-button" style="cursor: pointer;" data-toggle="modal"  data-target="#myModal{{$annonce->id_annonce}}"><i class="fa fa-angle-right"></i><span>Details</span></a></div>
                @else
                <div class="product-button-group">
                  <a class="product-button" style="cursor: pointer;" data-toggle="modal"  data-target="#myModal{{$annonce->id_annonce}}"><i class="fa fa-angle-right"></i><span>Details</span></a></div>
                  @endif
          </div> 
          @endif
          @endforeach
</div>
</div>

      </div>
</div>
</div>
<a class="carousel-control-next" href="#myCarousel" data-slide="next">
  <i class="fa fa-2x fa-angle-right text-dark"></i>
</a>
@php($title=1)
<!--Modal1-->  
@foreach ($annonces as $index => $annonce)
<div id="myModal{{$annonce->id_annonce}}"
  class="modal fade"  
  tabindex="-1"
  role="dialog" 
  aria-labelledby="myModalLabel" 
  aria-hidden="true"
  style="display: none;overflow-y: initial !important"
>    <div class="modal-dialog modal-lg">
      <div class="modal-content" style="width: 100%">
        <div class="modal-body">
        <?php $p=$annonce->id_annonce;?>
        <?php $terrain=$annonce->id_terrain;?>
        @include('product')
      </div>
      </div>
    </div>
  </div>
@endforeach
    </section><!-- End About Section -->