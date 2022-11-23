$(document).ready(function () {
    console.log("document loaded");

    $.ajax({
        type:"GET",
        url:"http://localhost:8000/api/gallery",
        success: function(response){
            console.log (response['galleries'])
            var gal = '';
            response['galleries'].forEach(element => {
                gal += '<div> <a class="example-image-link" href="http://localhost:8000/storage/projects_storage/' + element['picture'] + '" data-lightbox="roadtrip" data-title=""> <img class ="example-image img-fluid mb-2" src="http://localhost:8000/storage/projects_storage/' + element['picture'] + '" alt="image-1"/> </a></div>';
            });

            $('gallery-api').html(gal);
            console.log(gal)

        }
    });
});
$(window).on("load", function(){
    console.log("window loaded")
});