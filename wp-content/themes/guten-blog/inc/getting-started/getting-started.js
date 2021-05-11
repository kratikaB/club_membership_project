jQuery(document).ready(function($) {
    $( '.guten-blog-install-plugins' ).click( function ( e ) {
        e.preventDefault();

        $( this ).addClass( 'updating-message' );
        $( this ).text( guten_blog_adi_install.btn_text );

        $.ajax({
            type: "POST",
            url: ajaxurl,
            data: {
                action     : 'guten_blog_getting_started',
                security : guten_blog_adi_install.nonce,
                slug : 'advanced-import',
                filename : 'advanced-import',
                request : 1
            },
            
            success:function( response ) {
                setTimeout(function(){
                    $.ajax({
                        type: "POST",
                        url: ajaxurl,
                        data: {
                            action : 'guten_blog_getting_started',
                            security : guten_blog_adi_install.nonce,
                            slug : 'layouts-importer',
                            filename : 'gutenblog-demo-import',
                            request : 2
                        },

                        success:function( response ) {
                            setTimeout(function(){

                                $.ajax( {
                                    type: "POST",
                                    url: ajaxurl,
                                    data: {
                                        action : 'guten_blog_getting_started',
                                        security : guten_blog_adi_install.nonce,
                                        slug : 'gutentor',
                                        filename : 'gutentor',
                                        request : 3
                                    },
                                    success:function( response ) {
                                        var extra_uri, redirect_uri, dismiss_nonce;
                                        redirect_uri = guten_blog_adi_install.adminurl+'/themes.php?page=advanced-import&browse=all';
                                        window.location.href = redirect_uri;
                                    },
                                    error: function( xhr, ajaxOptions, thrownError ){
                                        console.log( thrownError );
                                    }
                                } );

                            }, 2000 );
                            
                        },
                        error: function( xhr, ajaxOptions, thrownError ){
                            console.log( thrownError );
                        }

                    } );
                    

                }, 2000 );
            },
                       
            error: function( xhr, ajaxOptions, thrownError ){
                console.log(thrownError);
            }
        });
    } );


} );