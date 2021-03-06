<div id="new-progect-popup">
  <div class="modal-wrapper">
    <div class="modal-header">
      <button type="button" class="b-close"></button>
      <h4 class="modal-title">Добавление проекта</h4>
    </div>

    <div class="modal-body">
      <form id="add-new-project" class="form" role="form">   
      <!-- Название проекта -->
      <div class="form-group">
        <label for="projectName" class="label">Название проекта</label>
        <input type="text" name="projectName" class="input" id="projectName" placeholder="Введите название">
      </div>
      <!-- Картинка проекта -->
      <div class="form-group">
        <label for="projectImage" class="label">Картинка проекта</label>
        <input type="file" name="projectImage" class="file" id="projectImage">
      </div>
      <!-- URL проекта -->
      <div class="form-group">
        <label for="projectUrl" class="label">URL проекта</label>
        <input type="text" name="projectUrl" class="input" id="projectUrl" placeholder="Добавьте ссылку">
      </div>
      <!-- Описание -->
      <div class="form-group">
        <label for="projectDesc" class="label">Описание</label>
        <textarea name="text" id="projectDesc" class="textarea" rows="3" placeholder="Пара слов о вашем проекте"></textarea>
      </div>
      <!-- Кнопка "Отправить" -->
        <div class="text-center">
          <button type="submit" class="btn">Добавить</button>
        </div>      
      </form>
    </div>
  </div>
</div>
