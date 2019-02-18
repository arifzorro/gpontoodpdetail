
 $(document).ready(function(){
    //
    // load_data();
    //
    // function load_data()
    // {
    //     $.ajax({
    //         url:"<?php echo base_url(); ?>excel_import/fetch",
    //         method:"POST",
    //         success:function(data){
    //             $('#customer_data').html(data);
    //         }
    //     })
    // }

     $('#import_form').on('submit', function(event){
         alert(1);
         event.preventDefault();
         $.ajax({
             url:"<?php echo base_url(); ?>excel_import/import",
             method:"POST",
             data:new FormData(this),
             contentType:false,
             cache:false,
             processData:false,
             success:function(data){
                 $('#file').val('');
                 load_data();
                 alert(data);
             }
         })
     });
    });
//
