<?php

$igniteNews = $crawler->filter('ignite-news')->count();
$igniteBlog = $crawler->filter('ignite-blog')->count();
$newsletters = $crawler->filter('newsletters')->count();

// search for and replace ignite-news, if necessary
if ($igniteNews > 0) {
    $news_content = Tsawler\Phpackage\NewsController::getEmbeddedIgniteNews();
    $content = str_replace("<ignite-news></ignite-news>", $news_content, $content);
}

// search for and replace ignite-blog, if necessary
if ($igniteBlog > 0) {
    $news_content = Tsawler\Phpackage\PostsController::getEmbeddedIgniteBlog();
    $content = str_replace("<ignite-blog></ignite-blog>", $news_content, $content);
}

// search for and replace newsletters, if necessary
if ($newsletters > 0) {
    $news_content = Tsawler\Phpackage\NewsletterController::getEmbeddedNewsletters();
    $content = str_replace("<newsletters></newsletters>", $news_content, $content);
}