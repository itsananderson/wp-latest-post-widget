jQuery(function($) {
    function updateLatestPost() {
        var posts = new wp.api.collections.Posts();
        posts.fetch().done(function() {
            var post = posts.first().attributes;
            $('.widget_latest_post_widget .latest-post-widget-post-title a').attr('href', post.link).text(post.title);
        });
    }
    updateLatestPost();
    setInterval(updateLatestPost, 15 * 1000);
});
