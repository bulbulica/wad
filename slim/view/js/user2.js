var doGetNews = function (partialURL, jsonDataToPost) {
    var fullUrl = "http://localhost/api/News/";
    return $.ajax({
        url: fullUrl,
        headers: {
            "Content-Type":"application/json"
        },
        data: JSON.stringify(jsonDataToPost),
        dataType: "json",
        success: function(allJSON){
            for (var i = 0, len = allJSON.length; i < len; ++i) {
                var news = allJSON[i];
                var newEntry = $("<div class=\"blog-post\"><h2 class=\"blog-post-title\">" + news.Title + "</h2><br><p>" + news.Text + "</p></div>");
                $('#blog-entries').append(newEntry);
            }
        }
    });
};
