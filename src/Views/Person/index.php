

<h1>Person</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/mvc/person/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new person</a>
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>age</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        foreach ($person as $per)
        {
            echo '<tr>';
            echo "<td>" . $per->getId() . "</td>";
            echo "<td>" . $per->getName() . "</td>";
            echo "<td>" . $per->getAge() . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/mvc/person/edit/" . $per->getId() . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='/mvc/person/delete/" . $per->getId()  . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>