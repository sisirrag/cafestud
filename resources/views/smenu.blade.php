@extends("stheme")
@section("content")
<div class="inner-banner"></div>
<section class="w3l-breadcrumb">
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="#url">Home</a></li>
            <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Menu page</li>
        </ul>
    </div>
</section>
<div class="w3l-menublock py-5">
    <!-- menu block -->
    <div id="w3l-menublock" class="text-center py-lg-4 py-md-3">
        <div class="container">
            <div class="title-content mb-5">
                <h5 class="title-small text-center mb-2">Check it below</h5>
                <h3 class="title-big text-center mb-5">Our Menu Items</h3>
            </div>

            <input id="tab1" type="radio" name="tabs" checked>
            <label class="tabtle" for="tab1">Breakfast</label>

            <input id="tab2" type="radio" name="tabs">
            <label class="tabtle" for="tab2">Lunch</label>

            <input id="tab3" type="radio" name="tabs">
            <label class="tabtle" for="tab3">Dinner</label>

            
            
            <section id="content1" class="tab-content text-left">
                <!-- <h3 class="title-small text-center">Coffee - <span>We make the delicious coffee</span></h3> -->
                <div class="row menu-body">
                    <!-- Section starts: Appetizers -->
                    <div class="col-lg-6 menu-section pr-lg-5">
                        <!-- Item starts -->
                        @foreach($bf as $row)
                        <div class="menu-item">
                            <img src="images/middle.png" alt="" class="radius-image img-fluid">
                            <div>
                                <div class="row border-dot no-gutters">
                                    <div class="col-8 menu-item-name">
                                        <h6>{{ $row->Day }} </h6>
                                    </div>
                                    <div class="col-4 menu-item-price text-right">
                                        <h6>₹100</h6>
                                    </div>
                                </div>
                                <div class="menu-item-description">
                                    <p>{{ $row->Breakfast }}</p>
                                </div>
                            </div>
                        </div> 
                        @endforeach
                       
                    </div>                   
            </section>
            
            
            <section id="content2" class="tab-content text-left">
                <!-- <h3 class="title-small text-center">Hot Beverages - <span>Coffee and Cappuccino</span></h3> -->
                <div class="row menu-body">
                    <!-- Section starts: Drinks -->
                    <div class="col-lg-6 menu-section pr-lg-5">
                        <!-- Item starts -->
                        @foreach($lu as $row)
                        <div class="menu-item">
                            <img src="images/middle3.png" alt="" class="radius-image img-fluid">
                            <div>
                            <div class="row border-dot no-gutters">
                                <div class="col-8 menu-item-name">
                                    <h6>{{ $row->Day }}</h6>
                                </div>
                                <div class="col-4 menu-item-price text-right">
                                    <h6>₹100</h6>
                                </div>
                            </div>
                            <div class="menu-item-description">
                                <p>{{ $row->Lunch }}</p>
                            </div>
                            </div>
                        </div>                     
                        @endforeach
                    </div>                   
                    
                </div>
            </section>
            

            
            <section id="content3" class="tab-content text-left">
                <!-- <h3 class="title-small text-center">Cold Beverages - <span>Coffee and Cappuccino</span></h3> -->
                <div class="row menu-body">
                    <!-- Section starts: Appetizers -->
                    <div class="col-lg-6 menu-section pr-lg-5">
                        <!-- Item starts -->
                        @foreach($dn as $row)
                        <div class="menu-item">
                            <img src="images/middle.png" alt="" class="radius-image img-fluid">
                            <div>
                                <div class="row border-dot no-gutters">
                                    <div class="col-8 menu-item-name">
                                        <h6>{{ $row->Day }}</h6>
                                    </div>
                                    <div class="col-4 menu-item-price text-right">
                                        <h6>₹100</h6>
                                    </div>
                                </div>
                                <div class="menu-item-description">
                                    <p>{{ $row->Dinner }}</p>
                                </div>
                            </div>
                            
                        </div>
                        @endforeach
                    </div>
                    
            </section>
            
           

        </div>
    </div>
    <!-- menu block -->
</div>

@endsection