<h2>Admin Panel - Edit Youtube Links</h2>
<p class="text-danger">Warning please proceed carefully, embedding outside links on website is dangerous.</p>

<?php
include($adminnavbar_p);

$BIGyoutubelinks = array();
$id0 = "video00";
$id1 = "video01";
$id2 = "video02";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['postvideos'])) {
        $BIGyoutubelinks[0] = htmlspecialchars($_POST["youtubelink0"]);
        $BIGyoutubelinks[1] = htmlspecialchars($_POST["youtubelink1"]);
        $BIGyoutubelinks[2] = htmlspecialchars($_POST["youtubelink2"]);

        $yt_videos_insert_query = $conn->prepare("UPDATE `youtubevideos_table` SET link=? where id=?;");
        
        $yt_videos_insert_query->bind_param("ss", $BIGyoutubelinks[0], $id0);
        $yt_videos_insert_query->execute();

        $yt_videos_insert_query->bind_param("ss", $BIGyoutubelinks[1], $id1);
        $yt_videos_insert_query->execute();

        $yt_videos_insert_query->bind_param("ss", $BIGyoutubelinks[2], $id2);
        $yt_videos_insert_query->execute();

        echo("<script>alert('The links were updated successfully');</script>");
    }
} else {

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
}

?>

<div class="container-fluid my-3">
    <form action="<?php echo $adminindex_p . '?&action=edityoutubelinks'; ?>" method="post">
        <div class="row bg-info p-2" id="howto">
            <h4>How to include a youtube video:</h4>
            <ol class="list-group">
                <li class="list-group-item">Go to <a href="https://www.youtube.com">youtube.com</a></li>
                <li class="list-group-item">Click on share button below the video.</li>
                <li class="list-group-item">Get the embed code. Remember to turn on the privacy-enhanced mode.</li>
                <li class="list-group-item">Paste the embed code in the input field.</li>
                <li class="list-group-item">Click the input field to view if video loads.</li>
                <li class="list-group-item">Press Post Videos button.</li>
            </ol>
        </div>
        <div class="row my-4">
            <h4 class="mx-0 px-0">Video 0:</h4>
            <input class="form-control mt-1 mb-3" type="text" id="youtubelink0" name="youtubelink0" onclick="document.getElementById('youtubevideo0').innerHTML=this.value" value="<?php echo $BIGyoutubelinks[0]; ?>"><br>
            <div id="youtubevideo0" style="height: 600px;margin:auto;border:2px solid red;"></div>
        </div>

        <div class="row my-4">
            <h4 class="mx-0 px-0">Video 1:</h4>
            <input class="form-control mt-1 mb-3" type="text" id="youtubelink1" name="youtubelink1" onclick="document.getElementById('youtubevideo1').innerHTML=this.value" value="<?php echo $BIGyoutubelinks[1]; ?>"><br>
            <div id="youtubevideo1" style="height: 600px;margin:auto;border:2px solid red;"></div>
        </div>

        <div class="row my-4">
            <h4 class="mx-0 px-0">Video 2:</h4>
            <input class="form-control mt-1 mb-3" type="text" id="youtubelink2" name="youtubelink2" onclick="document.getElementById('youtubevideo2').innerHTML=this.value" value="<?php echo $BIGyoutubelinks[2]; ?>"><br>
            <div id="youtubevideo2" style="height: 600px;margin:auto;border:2px solid red;"></div>
        </div>

        <button class="btn btn-lg btn-dark mx-0" name="postvideos" type="submit">Post Videos</button>

    </form>
</div>