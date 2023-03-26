<?php
include "jounrul/db.php";
$error="";
  session_start();
//if(isset($_SESSION['user_id'])!="") {
//header("Location: books_page.php?page=cart");
//}
if (isset($_POST['signup1'])) {

$name = mysqli_real_escape_string($conn, $_POST['title']);
$dairy = mysqli_real_escape_string($conn, $_POST['dairy']);

if (!$error) {
if(mysqli_query($conn, "INSERT INTO jourrul(person_name, dairy) VALUES('" .$name. "', '" .$dairy. "')")) {
  header("location: http://localhost/emo");
exit();
} else {
echo "Error: " . $sql . "" . mysqli_error($conn);
}
}
mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Main Style Sheet -->
    <link rel="stylesheet" href="css/jounrul.css" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.1/css/all.css"
      integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q"
      crossorigin="anonymous"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet"
    />
    <title>My Diary App</title>
  </head>
  <body>
    <script type="text/javascript">
      function con() {
        confirm("Thanku for sharing Your felling with Us.");
      }
    </script>
    <header><h1 class="title">My Personal Journal</h1></header>

    <!-- Journal Entry Section -->
    <section class="section journal-section">
      <div class="container">
        <div class="container-row container-row-journal">
          <div class="container-item container-item-journal">
           <form  method = "post"action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <label for="entry-title" class="journal-label">Entry Title</label>
              <input
                type="text"
                name="title"
                
                class="entry-text-title"
                placeholder="Name of entry ✏️"
              />
              <label for="entry" class="journal-label">Today's Entry</label>
              <textarea
                name="dairy"
                
                class="entry-text-box"
                placeholder="What's on your mind today? 💭"
              ></textarea>            
  <input type="submit" class="btn-main entry-submit-btn" name="signup1" value="submit" onclick="con()">
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Journal Entry Results -->
    <section class="section sectionEntryResults" id="entryResultsSection">
      <div class="container">
        <div class="container-row entryResultRow"></div>
      </div>
    </section>

    <script src="js/jounrul.js"></script>
  </body>
</html>
