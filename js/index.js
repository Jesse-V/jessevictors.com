
$("#header .item a").click(function() {
   var clickedObj = $(this)[0];
   var label = $(clickedObj.parentElement)[0].children[0].innerHTML;
   var href = clickedObj.href;
   var page = href.substring(href.indexOf("#/") + 2);

   $("head title").html(label + " - JesseVictors.com");

   var jqxhr = $.ajax(page + ".php")
      .done(function() {
         var contentObj = $("#content");
         var contentEl  = document.getElementById("content");

         //transition to 90 degrees (on edge)
         contentObj.css({
            "transform": "perspective(700px) rotateY(90deg)",
            "transition": "all 0.25s linear",
            "transform-style": "preserve-3d"
         });

         contentEl.addEventListener("webkitTransitionEnd", switchPage, true);
         contentEl.addEventListener("transitionend",       switchPage, true);

         //callback when #content is on edge (90 degs)
         function switchPage()
         {
            contentEl.removeEventListener("webkitTransitionEnd", switchPage, true);
            contentEl.removeEventListener("transitionend",       switchPage, true);

            //replace HTML, swap CSS
            contentObj.html(jqxhr.responseText);
            $("head #customCSS").attr("href", "css/" + page + ".css");
            contentObj.css({
               "transition": "all 0s",
               "transform": "perspective(700px) rotateY(270deg)",
            });

            //complete remaining rotation
            setTimeout(function() {
               contentObj.css({
                  "transform": "perspective(700px) rotateY(360deg)",
                  "transition": "all 0.25s linear",
               });
            }, 25);

            contentEl.addEventListener("webkitTransitionEnd", finalize, true);
            contentEl.addEventListener("transitionend",       finalize, true);

            //callback when the transition finishes
            function finalize()
            {
               contentEl.removeEventListener("webkitTransitionEnd", finalize, true);
               contentEl.removeEventListener("transitionend",       finalize, true);

               //finalize and reset rotation
               contentObj.css({
                  "transform": "perspective(700px) rotateY(0deg)",
                  "transition": "all 0s linear",
               });
            }
         }
      })
      .fail(function() {
         console.log("There was an error processing your request; the page you requested does not exist.");
   });
});

//initialize page load, look at URL
//https://stackoverflow.com/questions/1034621/get-current-url-with-javascript
var url = window.location.href;
var i = url.indexOf("#/");
if (i > 0)
{
   var page = i < 0 ? "home" : url.substring(i + 2);
   var jqxhr = $.ajax(page + ".php")
      .done(function() {
         $("head #customCSS").attr("href", "css/" + page + ".css");
         $("#content").html(jqxhr.responseText);
      }
   );
}


//page load animation, uses JQuery UI
$("#header").hide();
$("#content").hide();
setTimeout(function() {
   $("#header").show("blind", {}, 500);
   $("#content").show("clip", {}, 750); //blind, clip, fold, scale
}, 500);

