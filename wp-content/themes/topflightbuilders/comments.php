<?php 

    if (!have_comments()) {
        echo "Leave a comment";
    } else {
        echo get_comments_number() . " Comments";
    }

    wp_list_comments(
        array(
            'avatar_size' => 120,
            'style' => 'div'
        )
    );

?>

<?php 

    if (comments_open()) {
        comment_form(
            array(
                'class_form' => '',
                'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title></h2>',
                'title_reply_after' => '</h2>'
            )
        );
    }

?>