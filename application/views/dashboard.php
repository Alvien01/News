<div class="row">
  <div class="col-lg-12 d-flex flex-column">
    <div class="row flex-grow">
      <div class="col-12 grid-margin stretch-card">
        <div class="card card-rounded">
          <div class="card-body">
            <div class="d-sm-flex justify-content-between align-items-start">
              <div>
                <h4 class="card-title card-title-dash">User List</h4>
               <p class="card-subtitle card-subtitle-dash">This is all user in our database</p>
              </div>
              <div>
                <a class="btn btn-primary btn-lg text-white mb-0 me-0" href="<?=base_url('dashboard/adduser')?>"><i class="mdi mdi-account-plus"></i>Add new user</a>
              </div>
            </div>
            <div class="table-responsive  mt-1">
              <table class="table select-table">
                <thead>
                  <tr>
                    <th>
                      <div class="form-check form-check-flat mt-0">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                      </div>
                    </th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Contact</th>
                    <th>Profie</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($users as $key => $user) : ?>
                    <tr>
                      <td>
                        <div class="form-check form-check-flat mt-0">
                          <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex ">
                          <img src="<?=base_url('assets/images/faces/face8.jpg')?>" alt="">
                          <div>
                            <h6><?=$user['name']?></h6>
                            <p><?=$user['initial']?></p>
                          </div>
                        </div>
                      </td>
                       <td>
                        <p><?=$user['gender'] == 'L' ? 'Male' : 'Female' ?></p>
                      </td>
                      <td>
                        <h6><?=$user['email']?></h6>
                        <p><?=$user['phone']?></p>
                      </td>
                      <td>
                        <p><?=$user['profile']?></p>
                      </td>
                      <td>
                        <?= $user['status'] == 1 ? '<div class="badge badge-opacity-success">Active</div>' : '<div class="badge badge-opacity-warning">Non Active</div>'?>
                        <td><a class="btn btn-primary btn-lg text-white mb-0 me-0" href="<?= base_url('dashboard/edituser') ?>">Edit</a></td>
                      </td>
                      </td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
