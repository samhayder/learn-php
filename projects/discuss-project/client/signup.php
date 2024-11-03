<div class="container py-5">
  <div class="row">
    <div class="col-6 mx-auto">
      <h2 class="text-center">Signup Page</h2>

      <form  method="POST" action="./server/requests.php">
        <div class="mb-3">
          <label for="userName" class="form-label">User Name</label>
          <input type="text" class="form-control" id="userName" name="userName">
        </div>
        <div class="mb-3">
          <label for="userEmail" class="form-label">User Email Address</label>
          <input type="email" class="form-control" id="userEmail" name="userEmail">
        </div>
        <div class="mb-3">
          <label for="userPassword" class="form-label">User Password</label>
          <input type="password" class="form-control" id="userPassword" name="userPassword">
        </div>
        <div class="mb-3">
          <label for="userAddress" class="form-label" >User Address</label>
          <input type="text" class="form-control" id="userAddress" name="userAddress">
        </div>
        <button type="submit" class="btn btn-primary" name="signup">Signup</button>
      </form>
    </div>
  </div>
</div>
