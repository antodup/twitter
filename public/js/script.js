document.querySelector("#post-tweet").addEventListener("submit", function (e) {

    var valTweet = document.querySelector("#tweet-text").value;
    //e.preventDefault(); pour le non rechargement de page...
    axios({
        method: 'post',
        url: '/post-tweet',
        data: {
            tweetVal: valTweet
        }
    })
        .then(function (response) {
            console.log(response);
        })
        .catch(function (error) {
            console.log(error);
        });
});