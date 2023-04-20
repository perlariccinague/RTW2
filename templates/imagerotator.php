<script>

    const open = document.getElementById('imagerotator-popup-toggle');
    const close = document.getElementById('imagerotator-popup-close');


    open.addEventListener("click", openPopUpImagerotator);
    close.addEventListener("click", closePopUpImagerotator);

    function openPopUpImagerotator(){
        const popup = document.getElementById('imagerotator-popup');
        popup.style.display = "unset";
        console.log('Script läuft');
    }

    function closePopUpImagerotator(){
        const popup = document.getElementById('imagerotator-popup');
        popup.style.display = "none";
        console.log('Script läuft');
    }



</script>


<script type="text/javascript">

function wr360Callback(api, isFullScreen) {


    $("#amount").click(function(e){
        let indexNum = document.getElementById('amount').value;
            e.preventDefault();
            api.images.showImageByIndex(indexNum);
        });
}


jQuery(document).ready(function(){

    jQuery('#wr360PlayerId').rotator({
        licenseFileURL: 'license.lic',
        configFileURL: 'files/content/Showroom/Haselblad_A/Hasselblad_360.xml',
        graphicsPath: 'files/content/Showroom/Haselblad_A/published/css/basic.css',
        alt: '360 degree view - autoPlayAPI',
        responsiveBaseWidth: 0,
        responsiveMinHeight: 0,
        googleEventTracking: false,
        apiReadyCallback: wr360Callback
    });

});

</script>

<script>
$(function() {
    $( "#slider-range-max" ).slider({
      range: "max",
      min: 13,
      max: 84,
      value: 13,
      slide: function( event, ui ) {
        $( "#amount" ).val( ui.value );

        var wert = $( "#amount" ).val();

        $("#amount").click();
    },

    });
  });
</script>