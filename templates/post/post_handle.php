<?php
include("../core/config.php");
session_start();
$_SESSION["post"] = NULL;
$_SESSION["article"] = NULL;
// test usage remove later
$_SESSION["post"]["id"] = 1;

if (!isset($_SESSION["post"]["id"])) {
    exit();
}

$return_msg = "";
$url = "../post.php";

$sql_link = connect('root', '');

if (!$sql_link) {
    $_SESSION["show_message"] = "Error at connect to database";
    exit();
}

$return_msg = "";

$post_id = $_SESSION["post"]["id"];
$sql = "SELECT * FROM `post` WHERE `id` = '$post_id'";

$post_result = $sql_link->query($sql);

if ($post_result) {
    $row = $post_result->fetch();

    $_SESSION["post"] = [
        "post_email" => $row['email'],
        "title" => $row["title"],
        "description" => $row["description"],
        "picture" => $row["picture"],
        "create_at" => $row["create_at"]
    ];

    $sql = "SELECT * FROM `article` WHERE `for_post` = '$post_id' ORDER BY `position`";

    $article_result = $sql_link->query($sql);

    if ($article_result) {
        $article_rows = [];

        while ($row = $article_result->fetch()) {
            $_SESSION["article"][$row["id"]] = [
                "id" => $row["id"],
                "title" => $row["title"],
                "description" => $row["description"],
                "picture" => $row["picture"],
                "display" => $row["display"],
                "edit_time" => $row["edit_time"],
                "for_post" => $row["for_post"],
                "position" => $row["position"]
            ];
        }
    } else {
        $url = "../index.php";
        $return_msg = "Fail to fetch article data from database";
    }
} else {
    $url = "../index.php";
    $return_msg = "Fail to fetch post data from database";
}

if ($return_msg != "") {
    $_SESSION["show_message"] = $return_msg;
}
?>
<script>
    window.location.href = '<?= $url ?>';
</script>
<?php exit() ?>