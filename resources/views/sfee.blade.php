@extends("stheme")
@section("content")
<div class="inner-banner"></div>
<!-- <table class="table table-dark table-hover ">
    <thead>        
        <td>Month</td>
        <td>Fee</td>
        <td>Status</td>
    </thead>
    @foreach($list as $row)
    <tr>        
        <td>{{$row->month}}</td>
        <td>{{$row->fee}}</td>
        <td>{{$row->status}}</td>
    </tr>
    @endforeach
</table> -->
<div class="w3l-menublock py-5">
    <!-- menu block -->
    <div id="w3l-menublock" class="text-center py-lg-4 py-md-3">
        <div class="container">
            <div class="title-content mb-5">
                <h5 class="title-small text-center mb-2">Fee Dues</h5>
                <h3 class="title-big text-center mb-5">My Payment History</h3>
            </div>

            <input id="tab1" type="radio" name="tabs" checked>
            <label class="tabtle" for="tab1">All</label>

            <input id="tab2" type="radio" name="tabs">
            <label class="tabtle" for="tab2">Unpaid</label>

            <input id="tab3" type="radio" name="tabs">
            <label class="tabtle" for="tab3">Paid</label>

            
            
            <section id="content1" class="tab-content text-left">
                <!-- <h3 class="title-small text-center">Coffee - <span>We make the delicious coffee</span></h3> -->
                <div class="row menu-body">
                    <!-- Section starts: Appetizers -->
                    <div class="col-lg-6 menu-section pr-lg-5">
                        <!-- Item starts -->
                        @foreach($list as $row)
                        <div class="menu-item">
                            <img  alt="" class="radius-image img-fluid">
                            <div>
                                <div class="row border-dot no-gutters">
                                    <div class="col-8 menu-item-name">
                                        <h6>{{ $row->month }} </h6>
                                    </div>
                                    <div class="col-4 menu-item-price text-right">
                                        <h6>{{ $row->status}}</h6>
                                    </div>
                                </div>
                                <div class="menu-item-description">
                                    <p>Amount: Rs.{{ $row->fee }}</p>
                                </div>
                                
                            </div>
                        </div> 
                        @endforeach
                       
                    </div>                   
            </section>
            <section id="content2" class="tab-content text-left">
                <!-- <h3 class="title-small text-center">Coffee - <span>We make the delicious coffee</span></h3> -->
                <div class="row menu-body">
                    <!-- Section starts: Appetizers -->
                    <div class="col-lg-6 menu-section pr-lg-5">
                        <!-- Item starts -->
                        @foreach($listu as $row)
                        <div class="menu-item">
                            <img  alt="" class="radius-image img-fluid">
                            <div>
                                <div class="row border-dot no-gutters">
                                    <div class="col-8 menu-item-name">
                                        <h6>{{ $row->month }} </h6>
                                    </div>
                                    <div class="col-4 menu-item-price text-right">
                                        <h6>{{ $row->status}}</h6>
                                    </div>
                                </div>
                                <div class="menu-item-description">
                                    <p>Amount: Rs.{{ $row->fee }}&nbsp;&nbsp;<a class="btn btn-style btn-white " href="/">Pay Now</a></p>
                                </div>
                                <div class="menu-item-description">
                                    <p></p>
                                </div>
                            </div>
                        </div> 
                        @endforeach
                       
                    </div>                   
            </section>
            <section id="content3" class="tab-content text-left">
                <!-- <h3 class="title-small text-center">Coffee - <span>We make the delicious coffee</span></h3> -->
                <div class="row menu-body">
                    <!-- Section starts: Appetizers -->
                    <div class="col-lg-6 menu-section pr-lg-5">
                        <!-- Item starts -->
                        @foreach($listp as $row)
                        <div class="menu-item">
                            <img  alt="" class="radius-image img-fluid">
                            <div>
                                <div class="row border-dot no-gutters">
                                    <div class="col-8 menu-item-name">
                                        <h6>{{ $row->month }} </h6>
                                    </div>
                                    <div class="col-4 menu-item-price text-right">
                                        <h6>{{ $row->status}}</h6>
                                    </div>
                                </div>
                                <div class="menu-item-description">
                                    <p>Amount: Rs.{{ $row->fee }}</p>
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