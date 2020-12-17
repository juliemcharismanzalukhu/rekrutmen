
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <?php $this->extend('footer_script'); ?>

    <script>

      $('.berkas-uploader').click(function(){
          $('#i-berkas_uploader').trigger('click');
      })

      $('#i-berkas_uploader').change(function(e){

          let berkastUploaderTitleEl = $('.berkas-uploader').find('.berkas_uploader_title');
          berkastUploaderTitleEl.html('Loading...');

          uploadBerkas( e.target.files[0] )
          .then( response => {
            console.log( 'upload berkas', response );

            let obj = JSON.parse( response )

            switch( obj.code ) {

              case 200:
                berkastUploaderTitleEl.html('Upload Berkas');
                addBerkastList( obj.data )

                break;

            }
            

          });
      })


      function uploadBerkas( file ){
          let formData = new FormData();
          formData.append('file', file);

          return $.ajax({
            method: 'POST',
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            url: '?pagename=user-upload-berkas'
          })

      }

      function deleteBerkas( id )
      {

        return $.ajax({
          method: 'POST',
          data: {
            id: id
          },
          url: '?pagename=user-delete-berkas'
        })

      }

      function addBerkastList( file ) {

          let templateList = `
          
            <li>
              <a href="<?php echo base_url('/uploads/') ?>${file.name}" download>
                <span>${file.name}</span>
                
              </a>
              <a href="javascript:void(0)" class="delete-user-berkas" data-id="${file.id}">
                <span class="ml-2 text-danger">Hapus</span>
              </a>
            </li>
          
          `

          $('.berkas-lists').append( templateList );

      }

      $(document).on('click', '.delete-user-berkas', function(){
        let btn = $(this);
        btn.html( 'Loading...' );
        deleteBerkas( $(this).data('id') )
        .then( () => {
          btn.parent().remove();
        })
      })
    
    
    </script>
  </body>
</html>