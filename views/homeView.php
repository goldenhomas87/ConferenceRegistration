<div class="container mt-5 pb-5">
    <div class="row">
        <div class="col-12 text-center">
            <h3>Зареєстровані учасники</h1>
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-4">
        <div class="col-md-10">
            <?php 
                if (!empty($data)) {
                    ?>
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">№</th>
                                    <th scope="col">Прізвище та ім'я</th>
                                    <th scope="col">Назва організації</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <?php 
                                    foreach ($data as $row)
                                    {
                                        echo '<tr>
                                                <th scope="row">'.$row['id'].'</th>
                                                <td>'.$row['firstName'].' '.$row['lastName'].'</td>
                                                <td>'.$row['organizationName'].'</td>
                                                <td>
                                                    <a href="mailto:'.$row['email'].'">'.$row['email'].'</a>
                                                </td>
                                              </tr>';
                                    }
                                ?>
                            </tbody>
                    <?php
                }
                else {
                    ?>
                        <div class="row d-flex justify-content-center mt-3">
                            <div class="col-md-6 text-center">
                                <div class="alert alert-secondary" role="alert">
                                    Наразі учасників немає
                                </div>
                            </div>
                        </div>
                    <?php
                }
            ?>
        </div>
    </div>
</div>