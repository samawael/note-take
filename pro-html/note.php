<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Note Application</title>
  
  

</head>
<body>
    <style>
        body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f7f7f7;
}

.container {
  max-width: 600px;
  margin: 20px auto;
  background-color: #fff;
  padding: 20px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

header {
  text-align: center;
  margin-bottom: 20px;
}

h1 {
  color: #333;
}

.note-form {
  display: flex;
  flex-direction: column;
  align-items: stretch;
}

textarea {
  height: 120px;
  resize: none;
  padding: 8px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

button {
  padding: 10px 15px;
  background-color: #007BFF;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #0056b3;
}

.note-list {
  margin-top: 20px;
}

.note-item {
  padding: 10px;
  background-color: #f0f0f0;
  border: 1px solid #ddd;
  border-radius: 4px;
  margin-bottom: 10px;
}

.note-item p {
  margin: 0;
}

.note-item small {
  font-size: 12px;
  color: #888;
}
</style>
  <div class="container">
    <header>
      <h1>Note Application</h1>
     <h2> <?php
     session_start();
        echo $_GET["g"].'   '.$_SESSION['username'];
            ?></h2>
    </header>
    <main>
      <form action="out.php">
      <div class="note-form">
        <textarea id="note-input" placeholder="Write your note here..."></textarea>
        <button id="save-btn">Save Note</button>
      </div>
      <div class="note-list" id="note-list">
        <!-- Note items will be dynamically added here -->
        

      </div>
      </form>
      <div>
  <button onclick="window.location.href='out.php'">Go to out.php</button>
     </div>

      <div id="saved-note"></div>
    </main>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const noteInput = document.getElementById("note-input");
    const saveBtn = document.getElementById("save-btn");

    
    const noteList = document.getElementById("note-list");

    
    const savedNote = localStorage.getItem("savedNote");

    if (savedNote) {
      const savedNoteDiv = document.getElementById("saved-note");
      savedNoteDiv.textContent = savedNote;
    }

    saveBtn.addEventListener("click", function (event) {
      event.preventDefault();
      const noteText = noteInput.value.trim();

      if (noteText !== "") {
        const currentDate = new Date();
        const formattedDate = `${currentDate.getDate()}/${currentDate.getMonth() + 1}/${currentDate.getFullYear()}`;
        const newNoteItem = document.createElement("div");
        newNoteItem.classList.add("note-item");
        newNoteItem.innerHTML = `<p>${noteText}</p><small>${formattedDate}</small>`;
        noteList.prepend(newNoteItem); 

    
        localStorage.setItem("savedNote", noteText);
        const savedNoteDiv = document.getElementById("saved-note");
        savedNoteDiv.textContent = noteText;
      }
    });
  });
</script>

  
</body>
</html>
