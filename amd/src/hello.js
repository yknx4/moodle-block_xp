 define(['jquery','toastr'], function($,toastr) {
       // Private functions.
       var privateFunc = function(a) {
           // JQuery is available via $ if I want it
           return a + 1;
       };
   
       // Public functions.
       return {
          initialise: function(b) {
               // JQuery is available via $ if I want it
               alert('aaaaaaaah'),
                console.log(toastr);
               //return privateFunc(b) + 1;
           }
       }
   });
