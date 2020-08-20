<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <form>
            <div class="form-group row">
                <label for="firstName" class="col-4 col-form-label">firstName</label> 
                <div class="col-8">
                    <input id="firstName" name="firstName" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="lastName" class="col-4 col-form-label">lastName</label> 
                <div class="col-8">
                    <input id="lastName" name="lastName" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">City</label> 
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="City" id="City_0" type="radio" class="custom-control-input" value="Taipei"> 
                        <label for="City_0" class="custom-control-label">Taipei</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="City" id="City_1" type="radio" class="custom-control-input" value="TaiChung"> 
                        <label for="City_1" class="custom-control-label">TaiChung</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="City" id="City_2" type="radio" class="custom-control-input" value="TaiNan"> 
                        <label for="City_2" class="custom-control-label">TaiNan</label>
                    </div>
                </div>
             </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>