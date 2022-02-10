<section id="subscribe">
    <div class="container" data-aos="zoom-in">
        <div class="section-header">
            <h2>Реєстрація</h2>
        </div>
        <div class="form">
            <form action="regresult.php" method="post" role="form" class="php-form">
                <div class="row">
                    <div class="form-group col-md-6">
                        <input type="text" name="fname" class="form-control" id="fname" placeholder="Ваше ім'я"
                            required maxlength="30">
                    </div>
                    <div class="form-group col-md-6 mt-3 mt-md-0">
                        <input type="text" class="form-control" name="lname" id="lname" placeholder="Ваше прізвище"
                            required maxlength="40">
                    </div>
                </div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject"
                        placeholder="Компанія/організація яку Ви представляєте" maxlength="100">
                </div>
                <div class="row mt-3">
                    <div class="form-group col-md-6 mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Ваша електронна пошта" required>
                    </div>
                    <div class="form-group col-md-6">
                        <select id="customer" name="customer" class="form-select">
                            <option value="">-- Статус --</option>
                            <option value="Заявник">Заявник</option>
                            <option value="Представник">Представник</option>
                            <option value="Асоціація">Член асоціації</option>
                        </select>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Повідомлення або питання, які Вас цікавлять (максимум 1000 символів)"
                        maxlength="1000"></textarea>
                </div>
                <div class="my-3">
                </div>
                <div class="text-center"><button type="submit">Відправити</button></div>
            </form>
        </div>
    </div>
</section>