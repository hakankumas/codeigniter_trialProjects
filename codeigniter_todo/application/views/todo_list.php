<!doctype html>
<html lang="tr">
<head>
  <title>to Do List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php $this->load->view("dependencies/style"); ?>
</head>
<body>
  <div class="container">
    <div class="row">
      <h3 class="w-100 text-center bg-primary text-light my-3 mb-4 p-3 rounded">to Do List</h3>
      <div class="col-12">
        <form action="<?php echo base_url('todo/insert')?>" method="post">
          <div class="row">
            <div class="form-group col-11">
              <textarea class="form-control" name="todo_title" id="todo_title" placeholder="toDo" rows="3"></textarea>
            </div>
            <div class="col-1">
              <button type="submit" name="add_todo" id="add_todo" class="btn btn-success">Kaydet</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-12">
        <table class="table table-bordered table-hover table-striped">
          <thead>
            <th class="ps-5 pe-5">Açıklama</th>
            <th class="text-center">Durum</th>
            <th class="text-center">Sil</th>
          </thead>
          <tbody>
            <?php foreach($todos as $todo){ ?>
            <tr class="row-wrapper <?php echo ($todo->isCompleted) ? "selected": ""; ?>">
              <td class="ps-5 pe-5 text-wrapper"><?php echo $todo->title; ?></td>
              <td class="text-center" style="width: 150px;">
                <input 
                  type="checkbox" 
                  data-url="<?php echo base_url("todo/iscompletedsetter/$todo->id"); ?>"
                  class="js-switch" <?php echo ($todo->isCompleted) ? "checked": ""; ?> />
              </td>
              <td class="text-center" style="width: 100px;"><a href="<?php echo base_url("todo/delete/$todo->id"); ?>" class="btn btn-danger">Sil</a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <footer class="w-100 mt-5">
    <div class="bg-secondary p-3">
      <p class="text-center text-white" style="font-size: 20px;"><i>toDoList - trialProject</i></p>
    </div>
  </footer>
  <?php $this->load->view("dependencies/scripts"); ?>
</body>
</html>