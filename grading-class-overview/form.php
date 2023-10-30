<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Compute Result</title>
</head>
<body>
    <div class="container" style="margin-top: 1 rem;">
        <h2>Student Result</h2>
        <form action="" method="POST">
            <div class="row">
                <div class="col">
                    <input type="text" name="name" class="form-control" placeholder="Full name">
                </div>
                <div class="col">
                    <input type="text" name="id" class="form-control" placeholder="Student ID">
                </div>
            </div>

            <div style="margin-top: 1rem;">
                <h4>Courses</h4>
                <div class="row" style="margin-bottom: 0.6rem;">
                    <div class="form-group col-md-2">
                        <label for="php">PHP</label>
                        <input type="text" name="php" class="form-control" id="php">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="java">Java</label>
                        <input type="text" name="java" class="form-control" id="java">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="cpp">C++</label>
                        <input type="text" name="cpp" class="form-control" id="cpp">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="ruby">Ruby</label>
                        <input type="text" name="ruby" class="form-control" id="ruby">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="nodejs">Nodejs</label>
                        <input type="text" name="nodejs" class="form-control" id="nodejs">
                    </div>
                </div>
                <button id="submit" type="submit" class="btn btn-primary">Compute</button>
            </div>
        </form>

    
    <?php if(isset($student) && $student instanceof \App\Student): ?>
        <h2 style="margin-top: 1.2rem;">ABC Final College Final Result Sheet</h2>
        <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">PHP</th>
                <th scope="col">Java</th>
                <th scope="col">C++</th>
                <th scope="col">Ruby</th>
                <th scope="col">Nodejs</th>
                <th scope="col">Total Score</th>
                <th scope="col">Average Score</th>
                <th scope="col">Grade</th>
                <th scope="col">Remark</th>
                <th scope="col">Final Result</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><?= $student->getId() ?></th>
                <td><?= $student->getName() ?></td>
                <td><?= $php ?></td>
                <td><?= $java ?></td>
                <td><?= $cpp ?></td>
                <td><?= $ruby ?></td>
                <td><?= $nodejs ?></td>
                <td><?= $student->totalScore() ?></td>
                <td><?= $student->averageScore() ?></td>
                <td><?= $student->grade() ?></td>
                <td><?= $student->remark() ?></td>
                <td><?= $student->finalResult() ?></td>
            </tr>
        </tbody>
        </table>
    <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
