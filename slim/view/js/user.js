var doGetNews = function (partialURL, jsonDataToPost) {
    var fullUrl = "http://localhost/web/public/users/admin";
    return $.ajax({
        url: fullUrl,
        headers: {
            "Content-Type":"application/json"
        },
        data: JSON.stringify(jsonDataToPost),
        dataType: "json",
        success: function(allJSON){
            var allJSONs = JSON.parse(allJSON);
            var newEntry = $("<h2>Welcome " + allJSONs.username + "</h2>");
            $('#acc').append(newEntry);
        }
    });
};