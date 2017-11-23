$(document).ready(function () {

    var $document = $(document);
    $.noConflict();
    if ($("#user_list").length > 0) {
            $("#user_list").DataTable({
                
                "processing": true,
                "serverSide": true,
                "ajax": base_url+"user/get-data",
                "responsive"   : true,
                "bPaginate"    : true,
                "bLengthChange": true,
                "bFilter"      : true,
                "bInfo"        : true,
                "bAutoWidth"   : false,
                "order"        : [[0, "desc"]],
                "lengthMenu"   : [20, 40, 60, 80, 100],
                "pageLength"   : 20,
                columns        : [
                    {data: 'name', name:'name',searchable: true, sortable: true},
                    {data: 'email', name:'email',searchable: true, sortable: true},
                    {data: 'created_at', name:'created_at',searchable: false, sortable: true, visible: true},
                    {data: 'updated_at', name:'updated_at',searchable: false, sortable: true, visible: true},
                    {data: 'action', name:'action',searchable: false, sortable: false}
                ],
                fnDrawCallback : function () {
                    var $paginate = this.siblings('.dataTables_paginate');

                    if (this.api().data().length <= this.fnSettings()._iDisplayLength) {
                        $paginate.hide();
                    }
                    else {
                        $paginate.show();
                    }
                }
            });
    }

    $(function() {
           // A chaque sélection de fichier
           $('#edit_form').find('input[name="image-profile"]').on('change', function(e) {
               var files = $(this)[0].files;

               alert(files);
        
               if (files.length > 0) {
                   // On part du principe qu'il n'y qu'un seul fichier
                   // étant donné que l'on a pas renseigné l'attribut "multiple"
                   var file = files[0],
                       $image_preview = $('#image_preview');
        
                   // Ici on injecte les informations recoltées sur le fichier pour l'utilisateur
                   $image_preview.find('.thumbnail').removeClass('hidden');
                   $image_preview.find('img').attr('src', window.URL.createObjectURL(file));
                   $image_preview.find('#titre').html(file.name);
               }
           });

       });
    
});

    