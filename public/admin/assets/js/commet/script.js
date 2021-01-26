(function($){
	$(document).ready(function(){

      //Data Table Show
      $('table#dataTabletwo').DataTable();
 
      //Category Edit Modal show
      $(document).on('click','#category_edit', function(e){
	      e.preventDefault();

      	   //get id
      	   let id = $(this).attr('edit_id');

      	   //ajax request send
      	   $.ajax({
      	   	  url : 'category-edit/' + id,
      	   	  success : function(data){
      	   	  	 $('form#category_edit_id input[name="name"]').val(data.name);
      	   	  	 $('form#category_edit_id input[name="id"]').val(data.id);
      	   	  	 //modal show
      	             $('#category_modal_update').modal('show');
      	   	  }
      	   });
      });

      //Tag Edit Modal Show
      $(document).on('click','#tag_edit', function(e){
            e.preventDefault();
            
            //get id
            let id = $(this).attr('edit_id');

            //ajax requiest
            $.ajax({
                  url : 'tag-edit/' + id,
                  success : function(data){
                        $('#tag_edit_id input[name="name"]').val(data.name);
                        $('#tag_edit_id input[name="id"]').val(data.id);
                        $('#tag_edit_id input[name="slug"]').val(data.slug);
                        //modal show
                        $('#tag_modal_update').modal('show');
                  }
            });
      });

      //product img change
      $(document).on('change','#pimage', function(e){
            e.preventDefault();

            //get img value
            let photo_url = URL.createObjectURL(e.target.files[0]);
            
            //img show
            $('#photo_show_product').attr('src', photo_url);
      });

      //product uploadimg change
      $(document).on('change','#upmage', function(e){
            e.preventDefault();

            //get img value
            let photo_url = URL.createObjectURL(e.target.files[0]);
            
            //img show
            $('#product_update').attr('src', photo_url);
      });

      //product Edit Section
      $(document).on('click','#product_edit',function(e){
            e.preventDefault();

            //get id
            let id = $(this).attr('product_id');

            //modal show
            $('#product_modal_update').modal('show');

            //ajax requiest
            $.ajax({
                  url : 'product-edit/' + id,
                  success : function(data){
                        $('#product_update_form input[name="name"]').val(data.name);
                        $('#product_update_form input[name="id"]').val(data.id);
                        $('#product_image').attr('src', 'media/product/' + data.product_image);
                        $('#product_update_form input[name="price"]').val(data.price);
                        $('#product_update_form .cl').html(data.cat_list);
                        $('#product_update_form .tg').html(data.tag_list);
                        $('#product_update_form input[name="old_photo"]').val(data.product_image);
                  }
            });
      });

      //slider Image Change1
      $(document).on('change','#slider_image1', function(e){
            e.preventDefault();

            //get value
            let file_img_url = URL.createObjectURL(e.target.files[0]);
            $('#slider_image').attr('src', file_img_url);
      });

      //slider Image Change2
      $(document).on('change','#slider_image2', function(e){
            e.preventDefault();

            //get value
            let file_img_url2 = URL.createObjectURL(e.target.files[0]);
            $('#slider_imagetwo').attr('src', file_img_url2);
      });

      //slider Image Change3
      $(document).on('change','#slider_image3', function(e){
            e.preventDefault();

            //get value
            let file_img_url2 = URL.createObjectURL(e.target.files[0]);
            $('#slider_imagethree').attr('src', file_img_url2);
      });

       //slider Image Change4
      $(document).on('change','#slider_image4', function(e){
            e.preventDefault();

            //get value
            let file_img_url2 = URL.createObjectURL(e.target.files[0]);
            $('#slider_imagefour').attr('src', file_img_url2);
      });

      //Patner Image Change1
      $(document).on('change','#pimage1', function(e){
            e.preventDefault();

            //get value
            let file_img_url = URL.createObjectURL(e.target.files[0]);

            //img show
            $('#patner_image1').attr('src', file_img_url);
      });

      //Patner Image Change2
      $(document).on('change','#pimage2', function(e){
            e.preventDefault();

            //get value
            let file_img_url2 = URL.createObjectURL(e.target.files[0]);

            //img show
            $('#patner_image2').attr('src', file_img_url2);
      });

      //Patner Image Chang3
      $(document).on('change','#pimage3', function(e){
            e.preventDefault();

            //get value
            let file_img_url3 = URL.createObjectURL(e.target.files[0]);

            //img show
            $('#patner_image3').attr('src', file_img_url3);
      });

      //Patner Image Change4
      $(document).on('change','#pimage4', function(e){
            e.preventDefault();

            //get value
            let file_img_url4 = URL.createObjectURL(e.target.files[0]);

            //img show
            $('#patner_image4').attr('src', file_img_url4);
      });
 

	});
})(jQuery)