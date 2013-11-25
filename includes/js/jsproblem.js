var tumblr_api_read = null; // this is important do not remove
var tumblrPaginate = 0; // **TODO** make loop to increment each for pagination feature
var tumblrpostCount = 50; // set the post count number, max is 50 for API v1

$(document).ready(function () {
    // setup our namespace
    $.tumblr = {};
    // modify these
    $.tumblr.url = 'http://wisdmlab.tumblr.com/api/read/json?callback=?&num=' + tumblrpostCount + '&start=' + tumblrPaginate + ''; // Offset syntax is start=[postnumtobeginat]
    $.tumblr.numPostsToDisplay = 50;
    $.tumblr.postMaxDescriptionLength = 250; // set to -1 to turn off jquery.expander
    /*$.tumblr.videoWidth='200'; // youtube default 400
        $.tumblr.videoHeight='163'; // youtube default 325*/
    // do not modify these unless you are hardcore
    //$.tumblr.imagePath = '..//testscripts/tumblr-jquery-master/img/';
    $.tumblr.postCount = 0;

    $('#next').on("click",function (e) {
          e.preventDefault();
           tumblrPaginate += 5;
            reloadTumblr();
        });
        $('#previous').on("click",function (e) {
          e.preventDefault();
           tumblrPaginate -= 5;
            reloadTumblr();
        });
    reloadTumblr();
});

function reloadTumblr() {
    $("#tumblrFeed").empty();
    $("#tumblrFeed").append("<div class='tumblrTitle' align='center'>Loading News...</div>");
    $.tumblr.url = 'http://wisdmlab.tumblr.com/api/read/json?callback=?&num=' + tumblrpostCount + '&start=' + tumblrPaginate + ''; // set to display 7 posts. off set syntax is start=[postnumtobeginat]
    $.ajax({
        url: $.tumblr.url,
        dataType: 'script',
        timeout: 10000,
        success: function () {
            console.log(tumblr_api_read)
            $("#tumblrFeed").empty();
            if ((tumblr_api_read == undefined) || (tumblr_api_read == null)) {
                $("#tumblrFeed").append("<div class='title tumblrTitle' href='#'>unable to load Tumblr</div>");
                $("#tumblrFeed").append("<div class='body'><a href=\"#\" onclick=\"javascript:reloadTumblr();\">[retry]</a></div>");
            } else {
                //$("#tumblrFeed").append("<div class='body'><a href=\"#\" style=\"float:center\" onclick=\"javascript:reloadTumblr();\">Refresh News Page</a></div>");
                $.tumblr.postCount = 0;
                $.each(tumblr_api_read.posts.slice(0, 50), function (i, post) {
                    if ($.tumblr.postCount >= $.tumblr.numPostsToDisplay) {
                        return;
                    }
                    parseTumblrJSON(post);
                    $.tumblr.postCount++;
                });

                // Apply Expander
              if ($.tumblr.postMaxDescriptionLength > -1) {
                  $('div.expandable').expander({
                    slicePoint:       $.tumblr.postMaxDescriptionLength,  // default is 100
                    expandText:         'Read more.',
                    userCollapseText: 'Read less.'
                  });
              }
            }
        },
        error: function (xhr, statusTxt, errorTxt) {
            $("#tumblrFeed").append("<a class='title tumblrTitle' href='#'>Tumblr Parse Error</a>");
            $("#tumblrFeed").append("<div class='body'>" + errorTxt + "<br/>" + xhr.responseText + "</div>");
        }
    });
}

function formatDate(d) {
    //return (d);
   return (d).toString('dddd, MMMM d, yyyy');
    //return d.getDay();//displays the day of the from (from 0-6)
    //return d.getMonth();//displays the month (from 0-11)
    //return d.getDate();//displays the day of the month (from 1-31)
    //return d.getFullYear();//displays the year (four digits)
}

function processResponse() {}

function parseTumblrJSON(post) {
    //alert(post.type);
    var d = new Date(post["date"]);
    var dateFmt = formatDate(d);

    switch (post.type) {
    case "regular":
        {
            $("#tumblrFeed").append(
                /*"<table style='width: 100%;'><tr><td width='18px'>" +
                      "</td></table>");*/

                "");
            //Place directly before "</td>" <div class='date'>" + dateFmt + "</div>

            $("#tumblrFeed").append("<a class='title tumblrTitle' href='" + post.url + "' target='_blank'>" + (post["regular-title"] == null ? 'view tumblr' : post["regular-title"]) + "</a>");
            $("#tumblrFeed").append("<div class='date'><h6>Posted on " + dateFmt + "</h6></div>");
            $("#tumblrFeed").append("<div class='body expandable'>" + post["regular-body"] + "</div>");

            break;
        }
    

    default:
        break;
    }
    $("#tumblrFeed").append("<div class='clear'>&nbsp;</div>");
}