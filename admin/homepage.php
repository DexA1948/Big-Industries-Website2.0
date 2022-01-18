<h2>Admin Panel - Homepage</h2>
<?php include($adminnavbar_p); ?>
<style>
  #admin_post_table {
    table-layout: fixed;
  }

  #admin_post_table td {
    overflow: hidden;
    white-space: nowrap;
  }
</style>

<!-- Submitted Apply Share Forms -->
<div class="sectionheader mb-2 mt-4" id="applyshareheader">
  <h3>Submitted Apply Share Forms</h3>
  <p class="bg-success p-2 text-white">Click on item to view full details or edit it</p>
</div>
<div class="submittedshareformstable">
  <table class="table table-bordered table-hover w-100" id="admin_post_table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Submitted Date</th>
        <th>Petitioner Name</th>
        <th>Contact Number</th>
        <th>Applied Kitta</th>
        <th>Applied Amount</th>
        <th>Deposited Amount</th>
      </tr>
    </thead>
    <tbody>

      <?php

      if (isset($_GET['asoffset'])) {
        $asoffset = htmlspecialchars($_GET['asoffset']);
        $asoffset = $conn->real_escape_string($asoffset);
        if ($asoffset < 0) {
          $asoffset = 0;
        }
      } else {
        $asoffset = 0;
      }

      $appliedshare_query = $conn->prepare("SELECT * FROM `applyshare_table` ORDER BY id DESC LIMIT 10 OFFSET ?");
      $appliedshare_query->bind_param("i", $asoffset);
      $appliedshare_query->execute();
      $result = $appliedshare_query->get_result();

      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
          echo "<tr class='clickable-row' data-href='" . $adminindex_p . "?&action=viewsubmittedform&id=" . $row["id"] . "'><td>" . $row["id"] . "</td><td>" . $row["submittedDate"] . "</td><td>" . $row["petitionername"] . "</td><td>" . $row["contactnumber"] . "</td><td>" . $row["appliedkitta"] . "</td><td>" . $row["appliedamount"] . "</td><td>" . $row["depositedamount"] . "</td></tr>";
        }
        echo "</tbody></table>";
      } else {
        echo "</tbody></table><br>No data to fetch<br>";
      }

      if ($asoffset > 0) {
        echo "<a class='btn btn-dark mx-2' href='admin.php?&action=homepage&asoffset=" . ($asoffset - 10) . "'>Prev</a>";
      }
      echo "<a class='btn btn-dark mx-2' href='admin.php?&action=homepage&asoffset=" . ($asoffset + 10) . "'>Next</a>";
      ?>
</div>

<!-- News -->
<div class="sectionheader mb-2 mt-4" id="newsheader">
  <h3>News</h3>
  <p class="bg-success p-2 text-white">Click on item to view full details or edit it</p>
</div>
<div class="newstable">
  <table class="table table-bordered table-hover w-100" id="admin_post_table">
    <thead>
      <tr>
        <th class="w-10">ID</th>
        <th>Publication Date</th>
        <th>Title</th>
        <th>Summary</th>
        <th>Photopath</th>
      </tr>
    </thead>
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
          echo "<tr class='clickable-row' data-href='" . $adminindex_p . "?&action=editpost&id=" . $row["id"] . "'><td>" . $row["id"] . "</td><td>" . $row["publicationDate"] . "</td><td>" . $row["title"] . "</td><td>" . $row["summary"] . "</td><td>" . $row["photopath"] . "</td></tr>";
        }
        echo "</tbody></table>";
      } else {
        echo "</tbody></table><br>No data to fetch<br>";
      }

      if ($offset > 0) {
        echo "<a class='btn btn-dark mx-2' href='admin.php?&action=homepage&offset=" . ($offset - 10) . "'>Prev</a>";
      }
      echo "<a class='btn btn-dark mx-2' href='admin.php?&action=homepage&offset=" . ($offset + 10) . "'>Next</a>";
      ?>
</div>

<!-- Board Members -->
<div class="sectionheader mb-2 mt-4" id="boardmembersheader">
  <h3>Board Members</h3>
  <p class="bg-success p-2 text-white">Click on item to view full details or edit it</p>
</div>
<div class="boardmemberstable">
  <table class="table table-bordered table-hover w-100" id="admin_post_table">
    <thead>
      <tr>
        <th class="w-10">ID</th>
        <th>Name</th>
        <th>DOB</th>
        <th>Email</th>
        <th>Address</th>
        <th>Contact Number</th>
        <th>Details</th>
        <th>Photopath</th>
      </tr>
    </thead>
    <tbody>

      <?php

      if (isset($_GET['bmoffset'])) {
        $bmoffset = htmlspecialchars($_GET['bmoffset']);
        $bmoffset = $conn->real_escape_string($bmoffset);
        if ($bmoffset < 0) {
          $bmoffset = 0;
        }
      } else {
        $bmoffset = 0;
      }

      $board_members_query = $conn->prepare("SELECT * FROM `boardmembers_table` ORDER BY id LIMIT 10 OFFSET ?");
      $board_members_query->bind_param("i", $bmoffset);
      $board_members_query->execute();
      $result = $board_members_query->get_result();

      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
          echo "<tr class='clickable-row' data-href='" . $adminindex_p . "?&action=editboardmember&id=" . $row["id"] . "'><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["dob"] . "</td><td>" . $row["email"] . "</td><td>" . $row["address"] . "</td><td>" . $row["phoneno"] . "</td><td>" . $row["details"] . "</td><td>" . $row["photopath"] . "</td></tr>";
        }
        echo "</tbody></table>";
      } else {
        echo "</tbody></table><br>No data to fetch<br>";
      }

      if ($bmoffset > 0) {
        echo "<a class='btn btn-dark mx-2' href='admin.php?&action=homepage&bmoffset=" . ($bmoffset - 10) . "'>Prev</a>";
      }
      echo "<a class='btn btn-dark mx-2' href='admin.php?&action=homepage&bmoffset=" . ($bmoffset + 10) . "'>Next</a>";
      ?>
</div>

<script>
  $(document).ready(function($) {
    $(".clickable-row").click(function() {
      window.location = $(this).data("href");
    });
  });
</script>