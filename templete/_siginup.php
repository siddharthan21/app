<main class="form-siginup w-100 m-auto">
  <form method="post" action="test.php" >
    <img class="mb-4" onblur=""  src="/app/assets/login.jpg" alt="" width="90
    " height="90
    ">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input name="username"  type="username" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input name="phone"  type="phone" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Phone</label>
    </div>
    <div class="form-floating">
      <input name="email"  type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input name="pass" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label> 
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
  </form>
</main> 