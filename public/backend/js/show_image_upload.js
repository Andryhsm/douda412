$(document).ready(function() {
    $(function() {
           // A chaque sélection de fichier
           $('#user_form').find('input[name="image-profile"]').on('change', function(e) {
               var files = $(this)[0].files;
        
               if (files.length > 0) {
                   var file = files[0],
                   $image_preview = $('#image_preview');
                   $image_preview.find('.thumbnail').removeClass('hidden');
                   $image_preview.find('img').attr('src', window.URL.createObjectURL(file));
               }
           });

       });
});