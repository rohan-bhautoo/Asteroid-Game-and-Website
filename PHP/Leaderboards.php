<?php

include('Common.php');

outputHeader("Leaderboards");

?>

<script type="text/javascript" src="../Javascript/Scores.js">
    window.onload(sortArray());
</script>

<!-- Header tag -->
<header>
    <!-- Navigation Bar -->
    <div class="top-nav-bar">
        <?php
        outputNavigationBar();
        ?>
    </div>
</header>


<!-- Creating table for leaderboards. -->
<div class="leaderboards-table">
    <!-- Title -->
    <h3><i class="fas fa-medal" style="color: #d40000"></i> Leaderboards</h3>
    <table class="table" align="center">
        <colgroup>
            <!-- Table of 3 columns each with specific widths. -->
            <col style="width: 280px;">
            <col style="width: 750px;">
            <col style="width: 750px;">
        </colgroup>

        <!-- First Row -->
        <tr>
            <th class="ranks">Ranks<br></th>
            <th class="username">Usernames</th>
            <th class="scores">Scores</th>
        </tr>

        <tbody id="generateTable"></tbody>

        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <br>
    <br>

    <!-- Outputs footer -->
    <?php
    outputFooter();
    ?>
</div>

<!-- Outputs the closing tag of body and html. -->
<?php
outputFooterEnd();
?>