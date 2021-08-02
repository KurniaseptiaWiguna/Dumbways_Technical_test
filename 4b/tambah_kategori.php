<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<a href="index_kategori.php" class="btn btn-primary">kembali</a>
<div class="card" style="width:20rem;">
            <div class="card-header">
            
                <label>Form tambah data</label>
            </div>
                <div class="card-body">
                    <form action="simpan_kategori.php" method="post">
                        <div class="form-group">
                            <label class="col-sm-2 col-form-label">id</label>
                            <input  type="text" name="id" > 
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-form-label">name</label>
                            <input type="text" name="name"> 
                        </div>
                        
                        <div class="form-group" style="margin-left:30px;">
                            <a href="index_kategori.php" class="btn btn-warning" style="margin-right:20px;" role="button">Batal</a> 
                            <input type="submit" value="simpan" class="btn btn-primary" role="button">            
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>