 jQuery(function( $ ) {

    var frame;

     $( document ).on ( 'click', '.upload-media-button', function( event ) {

         event.preventDefault();
         //knappen
         var self = $( this),
         //find the siblings, don´t want to select all others
             imageContainer = self.siblings( '.image-container' ),
             mediaInput = self.siblings( '.media-input' );

         frame = wp.media({
            title: 'Insert Media',
             button: {
                 text: 'Use Image'
             },
             library: {
                 type: 'Image'
             },
             multiple: false
         });



         frame.on( 'select', function() {
             //Attachment object
             var attachment = frame.state().get( 'selection' ).first().toJSON();
             //Make preview if attachment type is image
             if ( attachment.type === 'image' ) {
                imageContainer.html( '<img src="' + attachment.url + '" style="max-width: 100%; margin: 5px 0; display: block;">');
             }

             mediaInput.val( attachment.url );
                //triggas av key down, samma som onclick
             mediaInput.change();

         });

         frame.open();
     });
 });

