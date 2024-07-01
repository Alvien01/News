<div class="row">
  <div class="col-sm-12 col-md-10 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add user</h4>
        <p class="card-description">
          Please input your personal data
        </p>
        <form class="forms-sample" method="POST" action="<?=base_url('dashboard/edituser')?>">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" value="<?= $user->name ?>" class="form-control" id="name" name="name" minlength="3" required>
              </div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" id="gender" name="gender">
                  <option value="L" <?= $user->gender == 'L'? 'selected' : ''?>>Male</option>
                  <option value="P" <?= $user->gender == 'P'? 'selected' : ''?>>Female</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email">
              </div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone">
              </div>
            </div>
          </div>
         
          <div class="form-group">
            <label for="profile">Profile</label>
            <textarea name="profile" id="profile" class="form-control textarea"></textarea>
            <button type="button" class="btn btn-light mb-1 mt-2" onclick="generateProfile()">Generate</button>
          </div>


          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="status" id="active" value="1" checked>Active
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="status" id="nonactive" value="0">
                Non Active
              </label>
            </div>
          </div>

          <button type="submit" class="btn btn-primary text-white me-2">Submit</button>
        </form>
        
      </div>
    </div>
  </div>

</div>
<script>
        function generateProfile() {
            const name = document.getElementById("name").value;
            const gender = document.getElementById('gender').value;
            let profile = "";

            if (name === "") {
                profile = "Hello, nice to meet you.";
            } else {
                if (gender === "L") {
                    profile = `Hello, my name is ${name}. I am a programmer.`;
                } else if (gender === "P") {
                    profile = `Hello, my name is ${name}. I am a designer.`;
                }
            }

            document.getElementById("profile").innerText = profile;
        }
    </script>
