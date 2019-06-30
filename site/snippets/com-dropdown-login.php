<div class="dropdown-menu dropdown-menu-right"  aria-labelledby="navbarDropdownMenuLink">
    <form class="px-4 py-3" method="post">
        <div class="form-group">
            <label for="exampleDropdownFormEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
        </div>
        <div class="form-group">
            <label for="exampleDropdownFormPassword1">Password</label>
            <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="dropdownCheck">
            <label class="form-check-label" for="dropdownCheck">
                Remember me
            </label>
        </div>
        <br/>
        <button type="submit" class="btn btn-primary btn-sm btn-block" name="login" value="<?= $page->button()->html() ?>">Sign in</button>
    </form>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Forgot password?</a>
</div>