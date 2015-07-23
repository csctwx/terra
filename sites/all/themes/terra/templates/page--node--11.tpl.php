<style type="text/css">
    #map-canvas {
      height: 400px;
      margin: 15px 0px;
      border: 1px solid #000;
    }
  </style>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false" type="text/javascript"></script>
    <script src="<?php echo myfunctionlib_theme_path('where/markerwithlabel.js'); ?>"></script>
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
    <h4><?php echo $title; ?></h4>      
    <h2>Find TERRA by Battat™<br>Items near you</h2>
  </div>
  <table class="thumbPageContainer" >

    <tr>
      <td colspan="2">Specialty stores throughout the United States and Canada carry <strong>TERRA by Battat™</strong> from time to time. While
we can't guarantee these stores will have what you are looking for when you are looking, the following is a
list of stores that sometimes carry our toys.
      </td>
    </tr>
    <tr>
      <td colspan="2">
      <b>Country:</b>
      <Select class="CountrySelect" id="countrycode" >
        <option value="US">US</option>
        <!-- <option value="CA">Canada</option> -->        
      </Select>
      </td>
    </tr>
   <tr style="display:none;">
      <td>
       <b>Address:&nbsp;</b><input type="text" id="address" style="width:40%" value="">
      </td>

      <td>
        <b>City:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="text" id="city" style="width:40%" value="">
      </td>
    </tr>
    <tr>
      <td colspan="2">
      <div id="US" class="country" ><b>Address, City, State, and/or Zipcode:</b></div>            
      <div id="CA" class="country" style="display:none"><b>Address, City, Province, and/or Postal code:</b></div>
      <input type="text" id="addressInput" style="width:80%" value="">
    </td>
    </tr> 
    <tr>
      <td colspan="2">                
      <div id="searchbar">
          <div id="search-location"> 
          
            <b>Radius:</b>
            <select name="radiusSelect" id="radiusSelect">
              <option value="1">1 mile</option>
              <option value="5">5 miles</option>
              <option value="10">10 miles</option>
              <option selected="" value="25">25 miles</option>
              <option value="50">50 miles</option>
              <option value="100">100 miles</option>
            </select>
                  
            <br>
            <br>
            <input type="button" value="Search" onClick="getcoord();">            
            <div id="outputDiv"></div>
          </div>
          
      </div>
    </td>
    </tr> 
  </table>
  <div id="map-container">
    <div id="sidebar">
      <ul id="sidebar-list"></ul>
    </div>
    <div id="map-canvas"></div>
    <div id="sidebar2">
      <ul id="sidebar-list-2"></ul>
    </div>
  </div> 
   
</div>
<!-- InstanceEndEditable -->
