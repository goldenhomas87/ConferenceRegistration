<div class="container mt-5">
    <div class="row">
        <div class="col-12 text-center">
            <h3>Форма реєстрації</h1>
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body p-4">
                    <form action="/ConferenceRegistration/form/submit" method="post">
                        <div class="mb-3">
                            <label for="formFirstName" class="form-label">Ім'я</label>
                            <input type="text" class="form-control" name="firstName" id="formFirstName" placeholder="Вкажіть ваше ім'я" required>
                        </div>
                        <div class="mb-3">
                            <label for="formLastName" class="form-label">Прізвище</label>
                            <input type="text" class="form-control" name="lastName" id="formLastName" placeholder="Вкажіть ваше прізвище" required>
                        </div>
                        <div class="mb-3">
                            <label for="formSex" class="form-label">Ваша стать</label>
                            <select class="form-select" name="sex" id="formSex" required>
                                <option selected disabled value="">Оберіть вашу стать</option>
                                <option value="Чоловік">Чоловік</option>
                                <option value="Жінка">Жінка</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="formNationality" class="form-label">Національність</label>
                            <input type="text" class="form-control" name="nationality" id="formNationality" placeholder="Вкажіть вашу національність" required>
                        </div>
                        <div class="mb-3">
                            <label for="formOrganizationName" class="form-label">Назва організації</label>
                            <input type="text" class="form-control" name="organizationName" id="formOrganizationName" placeholder="Вкажіть назву вашої організації" required>
                        </div>
                        <div class="mb-3">
                            <label for="formPosition" class="form-label">Посада</label>
                            <input type="text" class="form-control" name="position" id="formPosition" placeholder="Вкажіть вашу посаду" required>
                        </div>
                        <div class="mb-3">
                            <label for="formDateOfBirth" class="form-label">Дата народження</label>
                            <input type="date" class="form-control" name="dateOfBirth" id="formDateOfBirth" placeholder="Вкажіть вашу дату народження" required>
                        </div>
                        <div class="mb-5">
                            <label for="formEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="formEmail" placeholder="Вкажіть ваш email" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Зареєструватись</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>