

requirejs([\'jquery\'], function( $ ) {
                console.log( $ ); // OK
                $(document).ready(function () { alert("Hello World"); });
            });