 define(['jquery'], function($) {
       // Private functions.
       var privateFunc = function(a) {
           // JQuery is available via $ if I want it
           return a + 1;
       };
   
       // Public functions.
       return {
          initialize: function(b) {
               // JQuery is available via $ if I want it
               alert('aaaaaaaah')
               //return privateFunc(b) + 1;
           }
       }
   });
