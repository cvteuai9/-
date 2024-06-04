<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <style>
        #preview {
            width: 400px;
            height: 400px;
            border: 1px solid #ddd;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #preview img {
            max-width: 100%;
            max-height: 100%;
        }
    </style>
</head>

<body>
    <div class="row justify-content-start">

        <!-- 商品圖片預覽區 -->
        <div class="col-lg-4 d-flex flex-column align-items-center">
            <div id="preview">
                <img src="../product_images/<?= $rowId["path"] ?>" alt="">
            </div>
            <div class="h4 mt-1">圖片預覽</div>
        </div>

        <div class="col-lg-6">
            <!-- 編輯商品表單 -->
            <form action="doUpload.php" method="post" enctype="multipart/form-data">
                <table class="table table-bordered align-middle text-center">
                    <!-- 商品圖片 -->
                    <tr>
                        <th>商品圖片</th>
                        <td>
                            <!-- accept 限制檔案類型，image/* 所有image的類型都可上傳 -->
                            <input type="file" name="image" id="image" accept="image/*" onchange="previewImage(event)" required>
                        </td>
                    </tr>
                </table>
        </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <script>
        // 圖片預覽函式
        function previewImage(event) {
            const preview = document.getElementById('preview');
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function() {
                const img = document.createElement('img');
                img.src = reader.result;
                preview.innerHTML = '';
                preview.appendChild(img);
            };

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>

</html>