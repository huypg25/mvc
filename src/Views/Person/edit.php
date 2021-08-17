<h1>Edit person</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="name">name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter a name" name="name" value ="<?php if (isset($person["name"])) echo $person["name"];?>">
    </div>

    <div class="form-group">
        <label for="age">age</label>
        <input type="text" class="form-control" id="age" placeholder="Enter a age" name="age" value ="<?php if (isset($person["age"])) echo $person["age"];?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>