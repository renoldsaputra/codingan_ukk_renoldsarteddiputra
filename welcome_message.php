<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-gap: 10px;
            padding: 20px;
        }

        .gallery-item {
            overflow: hidden;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .gallery-item img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        .gallery-item:hover {
            transform: scale(1.05);
        }

        /* Modal styling */
        .modal {
            display: none;
            position: fixed;
            z-index: 999;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.9);
        }

        .modal-content {
            margin: auto;
            display: block;
            max-width: 80%;
            max-height: 80%;
        }

        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="gallery">
    <div class="gallery-item">
        <img src="https://source.unsplash.com/WLUHO9A_xik/400x300" alt="Pemandangan 1" onclick="openModal(this)">
    </div>
    <div class="gallery-item">
        <img src="https://via.placeholder.com/400x300?text=Pemandangan%202" alt="Pemandangan 2" onclick="openModal(this)">
    </div>
    <div class="gallery-item">
        <img src="https://via.placeholder.com/400x300?text=Pemandangan%203" alt="Pemandangan 3" onclick="openModal(this)">
    </div>
    <!-- Add more gallery items here -->
</div>

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" onclick="closeModal()">&times;</span>
  <img class="modal-content" id="modalImg">
</div>

<script>
// Open the Modal
function openModal(img) {
  var modal = document.getElementById("myModal");
  var modalImg = document.getElementById("modalImg");
  modal.style.display = "block";
  modalImg.src = img.src;
}

// Close the Modal
function closeModal() {
  var modal = document.getElementById("myModal");
  modal.style.display = "none";
}
</script>

</body>
</html>
