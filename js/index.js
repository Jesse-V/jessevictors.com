
$("#header .item a").click(function() {
   var clickedObj   = $(this)[0];
   var labelObj     = $(clickedObj.parentElement)[0].children[0].children[0];
   var href = clickedObj.href;

   //remove selected flag from all menu items
   $("#header .item .label span.selected").each(function() {
      $(this).removeClass("selected");
   });

   $(labelObj).addClass('selected');
   $("head title").html(labelObj.innerHTML + " - JesseVictors.com");
   navigate(href.substring(href.indexOf("#/") + 2));
});



function navigate(page)
{
   var jqxhr = $.ajax(page + ".php")
      .done(function() {
         var contentObj = $("#content");
         var contentEl  = document.getElementById("content");

         contentEl.classList.add("transform1");

         //transition to 90 degrees (on edge)
         contentObj.css({
            "transform": "perspective(700px) rotateY(90deg)",
            "-webkit-transform": "perspective(700px) rotateY(90deg)",
            "-moz-transform": "perspective(700px) rotateY(90deg)",

            "transition": "all 0.2s",
            "-o-transition": "all 0.2s",
            "-ms-transition": "all 0.2s",
            "-moz-transition": "all 0.2s",
            "-webkit-transition": "all 0.2s"
         });

         contentEl.addEventListener("webkitTransitionEnd", switchPage, true);
         contentEl.addEventListener("transitionend",       switchPage, true);

         //callback when #content is on edge (90 degs)
         function switchPage()
         {
            contentEl.removeEventListener("webkitTransitionEnd", switchPage, true);
            contentEl.removeEventListener("transitionend",       switchPage, true);

            //replace HTML, swap CSS
            setTimeout(function() {
               contentObj.html(jqxhr.responseText);
            }, 0);

            $("head #customCSS").attr("href", "css/" + page + ".css");
            contentObj.css({
               "transform": "perspective(700px) rotateY(270deg)",
               "-webkit-transform": "perspective(700px) rotateY(270deg)",
               "-moz-transform": "perspective(700px) rotateY(270deg)",

               "transition": "all 0s",
               "-o-transition": "all 0s",
               "-ms-transition": "all 0s",
               "-moz-transition": "all 0s",
               "-webkit-transition": "all 0s"
            });

            //complete remaining rotation
            setTimeout(function() {
               contentObj.css({
                  "transform": "perspective(700px) rotateY(360deg)",
                  "-webkit-transform": "perspective(700px) rotateY(360deg)",
                  "-moz-transform": "perspective(700px) rotateY(360deg)",

                  "transition": "all 0.2s",
                  "-o-transition": "all 0.2s",
                  "-ms-transition": "all 0.2s",
                  "-moz-transition": "all 0.2s",
                  "-webkit-transition": "all 0.2s"
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
                  "-webkit-transform": "perspective(700px) rotateY(0deg)",
                  "-moz-transform": "perspective(700px) rotateY(0deg)",

                  "transition": "all 0s",
                  "-o-transition": "all 0s",
                  "-ms-transition": "all 0s",
                  "-moz-transition": "all 0s",
                  "-webkit-transition": "all 0s"
               });
            }
         }
      })
      .fail(function() {
         console.log("There was an error processing your request; the page you requested does not exist.");
   });
}



//initialize page load, look at URL
//https://stackoverflow.com/questions/1034621/get-current-url-with-javascript
var url = window.location.href;
var i = url.indexOf("#/");
if (i > 0)
{
   var page = url.substring(i + 2);
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
   $("#header").show("scale", {}, 500);
   $("#content").show("clip", {}, 750); //blind, clip, fold, scale
}, 500);

