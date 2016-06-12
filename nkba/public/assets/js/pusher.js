( function( $, pusher, addItem ) {

var itemActionChannel = pusher.subscribe( 'event-tansfer' );

itemActionChannel.bind( "App\\Events\\TransferEvent", function( data ) {

    addItem( data.id, false );
} );

} )( jQuery, pusher, addItem);