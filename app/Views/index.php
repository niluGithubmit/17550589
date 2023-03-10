
<?php 

//echo $session['ownerData'];
if(isset($_SESSION['ownerData'])){

    echo $this->extend('layouts/customer_layout');
}

else if(isset($_SESSION['service_stationData'])){

    echo $this->extend('layouts/service_station_layout');
}else{
    echo $this->extend('layouts/site_layout');
}

 ?>
<!-- load modals -->
<?= $this->section('modals') ?>

<?= $this->endSection() ?>

<!-- load main content -->
<?= $this->section('main') ?>

<style>
#search-button {
    position: absolute !important;
    top: 30px !important;
    right: 30px !important;
    width: 30px !important;
    height: 30px !important;
    padding: 5px;
}

#search-button .fa {
   font-size: 16px;
   margin: 0px;
   padding-left: 10px;
}

#radiusOption{
    color: black;
}
</style>

<body>
    <ul>
  <li>

    <button id="search-button" class="btn btn-default hidden-xs menu-plus-btn" data-tooltip="Add New Offer" data-tooltip-stickto="bottom" data-tooltip-color="#313539" data-tooltip-animate-function="foldin"><i class="fa fa-search plus-btn-icon" aria-hidden="true"></i>
    </button>
  </li>

</ul>
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <!-- SLIDE  -->
                <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on">
                    <!-- MAIN IMAGE -->
                    <img alt="slidebg1" src="images/dummy.png" data-lazyload="images/background2.png" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="back-img">
                    <!-- LAYERS -->
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption lft customout rs-parallaxlevel-0" data-x="250" data-y="80" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="700" data-start="1400" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 3;">
                        <img alt="dummy" src="images/dummy.png" data-lazyload="images/parallax/1.png" class="slide-doller-img">
                    </div>
                    <div class="tp-caption lft customout rs-parallaxlevel-0" data-x="50" data-y="700" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="700" data-start="1400" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 3;">
                        <img alt="test0" src="images/dummy.png" data-lazyload="images/parallax/2.png" class="slide-doller-img">
                    </div>
                    <div class="tp-caption lft customout rs-parallaxlevel-0" data-x="200" data-y="350" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="700" data-start="1400" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 3;">
                        <img alt="test2" src="images/dummy.png" data-lazyload="images/parallax/3.png" class="slide-doller-img">
                    </div>
                    <div class="tp-caption lft customout rs-parallaxlevel-0" data-x="800" data-y="600" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="700" data-start="1400" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 3;">
                        <img alt="test2" src="images/dummy.png" data-lazyload="images/parallax/4.png" class="slide-doller-img">
                    </div>
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption grey_heavy_72 skewfromrightshort tp-resizeme rs-parallaxlevel-0" data-x="520" data-y="190" data-speed="500" data-start="2250" data-easing="Power3.easeInOut" data-splitin="chars" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 5; max-width:inherit; max-height: inherit; white-space: nowrap;color: #31364c;font-family: roboto, sans-serif;font-weight: 300;font-size:86px;">
                        Welcome to
                    </div>
                    <!-- LAYER NR. 2nd text -->
                    <div class="tp-caption grey_heavy_72 skewfromrightshort tp-resizeme rs-parallaxlevel-0" data-x="535" data-y="296" data-speed="500" data-start="3550" data-easing="Power3.easeInOut" data-splitin="chars" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 5; max-width: inherit; max-height: inherit; white-space: nowrap;color: #31364c;font-family: roboto, sans-serif;font-weight: 200;font-size:46px;">
                        servicemycar.com
                    </div>
                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption grey_regular_18 customin tp-resizeme rs-parallaxlevel-0" data-x="550" data-y="378" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="4600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: inherit; max-height:inherit; white-space: nowrap;">
                        
                    </div>
                    <!-- LAYER NR. 11 -->
                   
                </li>
                <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on">
                    <!-- MAIN IMAGE -->
                    <img alt="slidebg1" src="images/dummy.png" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="back-img" style="background-color:#FF9700;">
                    <!-- LAYERS -->
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption lft customout rs-parallaxlevel-0" data-x="200" data-y="300" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:100% 100%;" data-speed="700" data-start="1400" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 3;">
                        <img alt="dummy" src="images/dummy.png" data-lazyload="images/mainimages/img-08.png" style="width:750px; height:600px">
                    </div>
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption grey_heavy_72 skewfromrightshort tp-resizeme rs-parallaxlevel-0" data-x="350" data-y="50" data-speed="500" data-start="2250" data-easing="Power3.easeInOut" data-splitin="chars" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 5; max-width:100%; max-height: inherit; white-space: nowrap; font-family: roboto, sans-serif;font-weight: 300;font-size:86px; color:#fff;">
                        Find your preffered 
                    </div>
                    <!-- LAYER NR. 2nd text -->
                    <div class="tp-caption grey_heavy_72 skewfromrightshort tp-resizeme rs-parallaxlevel-0" data-x="360" data-y="150" data-speed="500" data-start="3550" data-easing="Power3.easeInOut" data-splitin="chars" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 5; color:#fff; max-width: inherit; max-height: inherit; white-space: nowrap;font-family: roboto, sans-serif;font-weight: 200;font-size:46px;">
                        service station instantly
                    </div>
                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption grey_regular_18 customin tp-resizeme rs-parallaxlevel-0" data-x="375" data-y="225" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="4600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: inherit; max-height:inherit; white-space: nowrap;">
                       
                    </div>
                    <!-- LAYER NR. 11 -->
                  
                </li>
                <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on">
                    <!-- MAIN IMAGE -->
                    <img alt="slidebg1" src="images/dummy.png" style="background-color:#9C26B0;" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="back-img">
                    <!-- LAYERS -->
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption lft customout rs-parallaxlevel-0" data-x="700" data-y="150" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="700" data-start="1400" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 3;">
                        <img alt="dummy" src="images/dummy.png" data-lazyload="images/parallax/sp.png" style="width:600px;height:500px;">
                    </div>
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption grey_heavy_72 skewfromrightshort tp-resizeme rs-parallaxlevel-0" data-x="50" data-y="350" data-speed="500" data-start="2250" data-easing="Power3.easeInOut" data-splitin="chars" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 5; max-width:inherit; max-height: inherit; white-space: nowrap;color: #fff;font-family: roboto, sans-serif;font-weight: 300;font-size:86px;">
                        Affordable pricing
                    </div>
                    <!-- LAYER NR. 2nd text -->
                    <div class="tp-caption grey_heavy_72 skewfromrightshort tp-resizeme rs-parallaxlevel-0" data-x="65" data-y="460" data-speed="500" data-start="3550" data-easing="Power3.easeInOut" data-splitin="chars" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 5; max-width: inherit; max-height: inherit; white-space: nowrap;color: #fff;font-family: roboto, sans-serif;font-weight: 200;font-size:46px;">
                        for any type of vehicle
                    </div>
                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption grey_regular_18 customin tp-resizeme rs-parallaxlevel-0" data-x="80" data-y="520" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="4600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: inherit; max-height:inherit; white-space: nowrap;">
                       
                    </div>
                    <!-- LAYER NR. 11 -->
                    
                </li>

            </ul>

            <div class="tp-bannertimer"></div>
        </div>
    </div>
    <!-- <section class="check-domain all">
        <div class="container">
            <div class="row">
                <div class="col-md-5" style="margin-top: -6%;">
                    <h1 class="check-domain-h pull-left">Real Estate</h1><span class="pull-left">368</span>
                    <p class="check-domain-p clearfix clr">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                        <br> diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                        <br>aliquam erat volutpat. </p>
                    <a href="real_estate_gridlist.html">
                        <p class="arrowbc"><i class="material-icons">arrow_forward</i></p>
                    </a>
                </div>
                <div class="col-md-7 check-domain-left-col">
                    <img class="img-responsive wow bounceInLeft" src="images/mainimages/realestate.png" alt="pets image10">
                </div>
            </div>
        </div>
    </section> -->
   <!--  <section class="automotive all">
        <div class="container">
            <div class="row">
                <div class="col-md-7 check-domain-left-col">
                    <img class="img-responsive wow bounceInLeft" src="images/mainimages/img-02.png" alt="pets image8">
                </div>
                <div class="col-md-5" style="margin-top: 4%;">
                    <h1 class="check-domain-h pull-left">Automotive</h1><span class="pull-left">250</span>
                    <p class="check-domain-p clearfix clr">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                        <br> diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                        <br>aliquam erat volutpat. </p>
                    <a href="automotive_gridlist.html">
                        <p class="arrowbc"><i class="material-icons">arrow_forward</i></p>
                    </a>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section class="restaurant all">
        <div class="container">
            <div class="row">
                <div class="col-md-5" style="margin-top: 4%;">
                    <h1 class="check-domain-h pull-left">Restaurant</h1><span class="pull-left">132</span>
                    <p class="check-domain-p clearfix clr">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                        <br> diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                        <br>aliquam erat volutpat. </p>
                    <a href="restaurant_gridlist.html">
                        <p class="arrowbc"><i class="material-icons">arrow_forward</i></p>
                    </a>
                </div>
                <div class="col-md-7 check-domain-left-col">
                    <img class="img-responsive wow bounceInLeft" src="images/mainimages/img-03.png" alt="pets image7">
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section class="jobs all">
        <div class="container">
            <div class="row">
                <div class="col-md-7 check-domain-left-col">
                    <img class="img-responsive wow bounceInLeft" src="images/mainimages/img-04.png" alt="pets image7">
                </div>
                <div class="col-md-5" style="margin-top: 4%;">
                    <h1 class="check-domain-h pull-left">Jobs</h1><span class="pull-left">98</span>
                    <p class="check-domain-p clearfix clr">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                        <br> diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                        <br>aliquam erat volutpat. </p>
                    <a href="job_gridlist.html">
                        <p class="arrowbc"><i class="material-icons">arrow_forward</i></p>
                    </a>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section class="shopping all">
        <div class="container">
            <div class="row">
                <div class="col-md-5" style="margin-top: 6%;">
                    <h1 class="check-domain-h pull-left">Shopping</h1><span class="pull-left">76</span>
                    <p class="check-domain-p clearfix clr">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                        <br> diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                        <br>aliquam erat volutpat. </p>
                    <a href="shopping_gridlist.html">
                        <p class="arrowbc"><i class="material-icons">arrow_forward</i></p>
                    </a>
                </div>
                <div class="col-md-7 check-domain-left-col">
                    <img class="img-responsive wow bounceInLeft" src="images/mainimages/img-05.png" alt="pets image5">
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section class="hotels all">
        <div class="container">
            <div class="row">
                <div class="col-md-7 check-domain-left-col">
                    <img class="img-responsive wow bounceInLeft" src="images/mainimages/img-06.png" alt="pets image4">
                </div>
                <div class="col-md-5" style="margin-top: 4%;">
                    <h1 class="check-domain-h pull-left">Hotels & Travel</h1><span class="pull-left rating_align">63</span>
                    <p class="check-domain-p clearfix clr">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                        <br> diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                        <br>aliquam erat volutpat. </p>
                    <a href="hotels_travel_gridlist.html">
                        <p class="arrowbc"><i class="material-icons">arrow_forward</i></p>
                    </a>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section class="pets all">
        <div class="container">
            <div class="row">
                <div class="col-md-5" style="margin-top: 6%;">
                    <h1 class="check-domain-h pull-left">Pets</h1><span class="pull-left">50</span>
                    <p class="check-domain-p clearfix clr">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                        <br> diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                        <br>aliquam erat volutpat. </p>
                    <a href="pets_gridlist.html">
                        <p class="arrowbc"><i class="material-icons">arrow_forward</i></p>
                    </a>
                </div>
                <div class="col-md-7 check-domain-left-col">
                    <img class="img-responsive wow bounceInLeft" src="images/mainimages/img-07.png" alt="pets image2">
                </div>
            </div>
        </div>
    </section> -->
   <!--  <section class="services all">
        <div class="container">
            <div class="row">
                <div class="col-md-7 check-domain-left-col">
                    <img class="img-responsive wow bounceInLeft" src="images/mainimages/img-08.png" alt="pets image">
                </div>
                <div class="col-md-5" style="margin-top: 4%;">
                    <h1 class="check-domain-h pull-left">Services</h1><span class="pull-left">28</span>
                    <p class="check-domain-p clearfix clr">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                        <br> diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                        <br>aliquam erat volutpat. </p>
                    <a href="services_gridlist.html">
                        <p class="arrowbc"><i class="material-icons">arrow_forward</i></p>
                    </a>
                </div>
            </div>
        </div>
    </section> -->
    
    <!--Footer section-->
   
    <!--follow us end-->
    <!--Footer section-->
   
   <!--bootstrap modal window-->
    <!--Back to top button end-->
   <div id='myModal' class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Search Service Stations</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="search" method='get'>
        <input type='hidden' name='searched_ids' id="searched_ids"/>
      <div class="modal-body" style='overflow: scroll;'>
      <div id="myMap" style="position:relative;width:100%;height:400px;margin-bottom: 20px;"></div>
   
    <script type='text/javascript'>
 //bing map
var map,mapoptions;
var locTemp;
    var pinInfobox = null;
   var location1;
    function getLatlng(e) { 
        if (e.targetType == "map") {
           var point = new Microsoft.Maps.Point(e.getX(), e.getY());
           locTemp = e.target.tryPixelToLocation(point);
           console.log(location1);
           var location1 = new Microsoft.Maps.Location(locTemp.latitude, locTemp.longitude);
         console.log(locTemp.latitude+"&"+locTemp.longitude);
           
           var pin = new Microsoft.Maps.Pushpin(location1, {'draggable': false});
             map.entities.push(pin);
             //alert("Done");
        }              
       }
   
       function onPositionReady(position) {
// Apply the position to the map
locTemp = new Microsoft.Maps.Location(position.coords.latitude, position.coords.longitude);
map.setView({ zoom: 12, center: location1 });
// Add a pushpin to the map representing the current location
var pin = new Microsoft.Maps.Pushpin(locTemp);
map.entities.push(pin);
}
        var pinLayer, searchPolygon;
        function init() {
            var bingkey="AiYAFxZURO_Oxnz26aXJGjjH07946POZezF0rkNzz1gQHiA7pUahgoAdfpyyrkBO";
       // var loc=new Microsoft.Maps.Location(58.995311, -103.535156)
        //mapOptions ={   credentials: bingkey,
                        //center: loc,
                        //zoom: 3,
                       // mapTypeId: Microsoft.Maps.MapTypeId.road
               // }
        //map = new Microsoft.Maps.Map(document.getElementById("myMap"), mapOptions);
        
            map = new Microsoft.Maps.Map('#myMap', {
                center: navigator.geolocation.getCurrentPosition(onPositionReady, null),
                zoom: 12
            });
            
            //Add some random pushpins to a layer on the map.
            
            Microsoft.Maps.Events.addHandler(map, 'click',getLatlng ); 
            //Load the Spatial Math modules.
            Microsoft.Maps.loadModule('Microsoft.Maps.SpatialMath');
        }
        function search() {
         
            if(pinLayer){
               pinLayer.clear();
            }else{
               pinLayer = new Microsoft.Maps.Layer();
             }
             map.layers.insert(pinLayer);
             // Creating Our XMLHttpRequest object 
        var xhr = new XMLHttpRequest();
  
  // Making our connection  
  var url = 'getall';
  var redPins  = [];
  xhr.open("GET", url, true);
  // function execute after request is successful 
  xhr.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
          console.log(this.responseText[0].latitude);
          for (var k = 0; k<JSON.parse(this.responseText).length; k++) {
            console.log(JSON.parse(this.responseText)[k].latitude);
            console.log(JSON.parse(this.responseText)[k].longitude);
          var  locTemp1 = new Microsoft.Maps.Location(JSON.parse(this.responseText)[k].latitude, JSON.parse(this.responseText)[k].longitude);
          var pin = new Microsoft.Maps.Pushpin(locTemp1);
          pin.id = JSON.parse(this.responseText)[k].station_id;
          console.log(pin.id + "ID");
            //var pushpins = Microsoft.Maps.TestDataGenerator.getPushpins(100, map.getBounds(), { color: 'purple' });
            pinLayer.add(pin);
          }
          
          //Use the center of the map as the center of the search area.
          var origin = new Microsoft.Maps.Location(locTemp.latitude, locTemp.longitude);;
            var radiusOption = document.getElementById("radiusOption");
            var radius = parseFloat(radiusOption.options[radiusOption.selectedIndex].text);
            var redPins = [];
            //Get all the pushpins from the pinLayer.
            var pins = pinLayer.getPrimitives();
            console.log(pins.length + "Hhhee");
            //Loop through each pushpin and calculate its distance from the origin and change the color depending on if it is within the search area or not.
            for (var i = 0; i < pins.length; i++) {
                var distance = Microsoft.Maps.SpatialMath.getDistanceTo(origin, pins[i].getLocation(), Microsoft.Maps.SpatialMath.DistanceUnits.Kilometers);
                if (distance <= radius) {
                    pins[i].setOptions({ color: 'red' });
                    redPins.push(pins[i].id);
                } else {
                    pins[i].setOptions({ color: 'purple' });
                }
                
            }
            let hiddenValue = "0";
            let hiddenField = document.getElementById("searched_ids");
            for (var i = 0; i < redPins.length; i++) {
                if (i== (redPins.length - 1)) {
                    hiddenValue += redPins[i];
                    break;
                }
            
                hiddenValue += redPins[i] + ",";
            }
            hiddenField.value = hiddenValue;
            console.log(hiddenValue);
            //Create a circle polygon to show the search area. 
            var circleLocs = Microsoft.Maps.SpatialMath.getRegularPolygon(origin, radius, 36, Microsoft.Maps.SpatialMath.DistanceUnits.Kilometers);
            if (searchPolygon) {
                searchPolygon.setLocations(circleLocs);
            } else {
                searchPolygon = new Microsoft.Maps.Polygon(circleLocs, {
                    strokeColor: 'red',
                    fillColor: 'transparent'
                });
                map.entities.push(searchPolygon);
            }
          
      }
  }
  // Sending 
  xhr.send();        
             
            
            
        }
    </script>
    
    <div class='form-group'>
    <label>Radius (KM): </label>
    <select class='form-control' id="radiusOption">
        <option>1</option>
        <option selected="selected">5</option>
        <option>10</option>
        <option>15</option>    
        <option>20</option>
        <option>25</option>  
        <option>30</option>       
    </select>
    </div>
    <div class='form-group'>    
   
    </div>
    <div id="outputPanel"></div>
    </div>
      <div class="modal-footer" style='padding-top:50px'>
        <button type="button" onclick="search()" class="btn btn-success">Show</button>
        <button type='submit' class="btn btn-success">Search</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>

</body>


<?= $this->endSection() ?>

