<style>
    #news_table {
        table-layout: fixed;
    }

    #news_table td {
        overflow: hidden;
    }
</style>

<table class="table table-hover" id="news_table">
    <tbody>

        <?php

        if (isset($_GET['offset'])) {
            $offset = htmlspecialchars($_GET['offset']);
            $offset = $conn->real_escape_string($offset);
            if ($offset < 0) {
                $offset = 0;
            }
        } else {
            $offset = 0;
        }

        $post_query = $conn->prepare("SELECT * FROM `post_table` ORDER BY id DESC LIMIT 10 OFFSET ?");
        $post_query->bind_param("i", $offset);
        $post_query->execute();
        $result = $post_query->get_result();

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr class='clickable-row' data-href='news.php?&action=viewpost&id=" . $row["id"] . "'><td><b>" . $row["title"] . "</b><br>Published: " . $row["publicationDate"] . "<br><br>" . $row["summary"] . "</td></tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "</tbody></table><br>No data to fetch<br>";
        }

        if ($offset > 0) {
            echo "<a class='btn btn-dark mx-2' href='news.php?offset=" . ($offset - 10) . "'>Prev</a>";
        }
        echo "<a class='btn btn-dark mx-2' href='news.php?offset=" . ($offset + 10) . "'>Next</a>";
        ?>

        <script>
            $(document).ready(function($) {
                $(".clickable-row").click(function() {
                    window.location = $(this).data("href");
                });
            });
        </script>