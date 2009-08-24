<ul>
<?php
require_once('rss/rss_fetch.inc');

/* define('MAGPIE_CACHE_DIR', '/tmp/magpie_cache'); */

/* Testing URL Param */
/* $url = 'https://sourceforge.net/export/rss2_projnews.php?group_id=172556'; */
$url = 'http://github.com/feeds/toobs/commits/Toobs/master';


if ( $url ) {
        $num_items = 5;
        $rss = fetch_rss($url);
        $items = array_slice($rss->items, 0, $num_items);
        if ( !$items ) {
        echo "<li>No data found</li>";}
        else {
        foreach ($items as $item) {
                $href = $item['link'];
                $title = $item['title'];
                $date = $item['pubdate'];
                echo "<li><a href='$href'>$title</a></li>";
        }
        }
        echo "";
}
?>
</ul>