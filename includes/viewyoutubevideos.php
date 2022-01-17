<?php
function viewyoutubevideos($number)
{
    global $conn;
    $BIGyoutubelinks = array();
    $id0 = "video00";
    $id1 = "video01";
    $id2 = "video02";

    $yt_videos_query = $conn->prepare("SELECT * FROM `youtubevideos_table` where id=?");

    $yt_videos_query->bind_param("s", $id0);
    $yt_videos_query->execute();
    $BIGyoutubelinks[0] = $yt_videos_query->get_result()->fetch_assoc()['link'];

    $yt_videos_query->bind_param("s", $id1);
    $yt_videos_query->execute();
    $BIGyoutubelinks[1] = $yt_videos_query->get_result()->fetch_assoc()['link'];

    $yt_videos_query->bind_param("s", $id2);
    $yt_videos_query->execute();
    $BIGyoutubelinks[2] = $yt_videos_query->get_result()->fetch_assoc()['link'];

    if ($number === 3) {
        echo html_entity_decode($BIGyoutubelinks[0]);
        echo html_entity_decode($BIGyoutubelinks[1]);
        echo html_entity_decode($BIGyoutubelinks[2]);
    }else if($number === 2){
        echo html_entity_decode($BIGyoutubelinks[0]);
        echo html_entity_decode($BIGyoutubelinks[1]);
    }else if($number === 1){
        echo html_entity_decode($BIGyoutubelinks[0]);
    }
}
