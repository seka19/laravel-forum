<?php

use Riari\Forum\Models\Category;
use Riari\Forum\Models\Thread;
use Riari\Forum\Models\Post;

function forum_category_class(): string
{
    return config('forum.integration.models.category');
}

/**
 * @return Category
 */
function forum_category(): Category
{
    return app(forum_category_class());
}

/**
 * @return string
 */
function forum_thread_class(): string
{
    return config('forum.integration.models.thread');
}

/**
 * @return Thread
 */
function forum_thread(): Thread
{
    return app(forum_thread_class());
}

/**
 * @return string
 */
function forum_post_class(): string
{
    return config('forum.integration.models.post');
}

/**
 * @return Post
 */
function forum_post(): Post
{
    return app(forum_post_class());
}