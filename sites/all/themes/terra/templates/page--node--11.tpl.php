<style type="text/css">
    #map-canvas {
      height: 400px;
      margin: 15px 0px;
      border: 1px solid #000;
    }
  </style>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false" type="text/javascript"></script>
    <script src="<?php echo myfunctionlib_theme_path('where/map.js'); ?>"></script>
    <script>
      $(function()
      {
        $('#countrycode').change(function(){
          $('.country').hide();
          $('#' + $(this).val()).show();            
        });     
      });
    </script>
<!-- InstanceBeginEditable name="mainContainer" -->
<div id="container" style="padding-bottom:5%;">
  <div id="breadcrumb">
    <?php print $breadcrumb; ?>    
  </div>
  <div id="productTitleDetailPage">    
    <h2><?php echo $title; ?></h2>
  </div>
  <!-- <div class="thumbPageContainer" style="background:url(images/ivory-transparent-back-TEMP.png) repeat;">-->
  <div class="thumbPageContainer" style="background:ivory;"> 
  <div id="about-content">
    <!-- <h1 class="page-header"><img src="http://www.mybtoys.com/media/images/where/wheretobuy.png" alt="Where to Buy" /></h1> -->
    <div class="page-text">
      <p>Specialty stores throughout the United States and Canada carry <strong>B.</strong> toys from time to time. While we can't guarantee these stores will have what you are looking for when you are looking, the following is a list of stores that sometimes carry our toys. It would B. smart to call before you go.</p>
    </div>
    <div class="col-xs-12">
      <b>Country:</b>
      <Select class="CountrySelect" id="countrycode" >
        <option value="US">US</option>
        <option value="CA">Canada</option>        
      </Select>
    </div>
    <div  class="col-xs-12 col-md-6">
      <b>Address:&nbsp;</b><input type="text" id="address" style="width:40%" value="">
    </div>
    <div  class="col-xs-12 col-md-6">
      <b>City:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="text" id="city" style="width:40%" value="">
    </div>
    <div  class="col-xs-12">
      <div id="US" class="country" ><b>State, and/or Zipcode:</b></div>            
      <div id="CA" class="country" style="display:none"><b>Province, and/or Postal code:</b></div>
      <input type="text" id="addressInput" style="width:80%" value="">
    </div>                   
    
    <div id="map-container">
      <div id="searchbar">
        <div id="search-location"> 
        <div class="col-xs-12">
          <strong>Radius:</strong>
          <select name="radiusSelect" id="radiusSelect">
            <option value="1">1 mile</option>
            <option value="5">5 miles</option>
            <option value="10">10 miles</option>
            <option selected="" value="25">25 miles</option>
            <option value="50">50 miles</option>
            <option value="100">100 miles</option>
          </select>
        </div>          
          <br>
          <br>
          <input type="button" value="Search Locations" onClick="getcoord();">
          <br>
          <div id="map-canvas"></div>
          <div id="outputDiv"></div>
        </div>
        <div id="sidebar"></div>
      </div>
    </div>
  </div>
  </div>
</div>
<!-- InstanceEndEditable -->
