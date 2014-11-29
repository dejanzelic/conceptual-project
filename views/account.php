<div class="row">
    <form action="/dzelic/Conceptual/index.php/account" method="post">
    <div class="col-lg-6">
        <h2>User</h2>
            <div class="form-group" >
                <input type="email" class="form-control" id="email" name="email" value = "<?php echo $user->email; ?>" placeholder="Enter Email">
                <br/>
                <input type="text" class="form-control" id="Name" name="name" value = "<?php echo $user->name; ?> " placeholder="Name: <?php echo $this->data->name; ?>">
                <br/>
                <input type="password" class="form-control" id="password" placeholder="Enter new Password"
                       title="At least 1 small-case letter At least 1 Capital letter At least 1 digit At least 1 special character Length should be between 8-30 characters. Spaces allowed "
                       pattern="(?=^.{8,30}$)(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&amp;*()_+}
                       {&quot;&quot;:;'?/&gt;.&lt;,]).*$" onchange="form.reenter.pattern=this.value"
                       name="password">
                <br/>
                <input type="password" class="form-control" id="reenter" placeholder="Reenter new Password">
                <br/>
            </div>
    </div>
    <div class="col-lg-6">
        <h2>Address</h2>
            <div class="form-group" >
                <input type="text" class="form-control" id="address" name="address" value = "<?php echo $user->address; ?>" placeholder="Enter Address">
                <br/>
                <input type="text" class="form-control" id="city" name="city" value = "<?php echo $user->city; ?>" placeholder="Enter City">
                <br/>
                <input type="text" class="form-control" id="state" name="state" value = "<?php echo $user->state; ?>" placeholder="Enter State">
                <br/>
                <input type="text" class="form-control" id="zip" name="zip" value = "<?php echo $user->zip; ?>" placeholder="Enter Zip">
                <br/>
                <input type="tel" class="form-control" id="phone" name="phone" value = "<?php echo $user->phone; ?>" placeholder="Enter Phone">
                <br/>
                <button type="submit" class="btn btn-primary btn-lg">Update</button>
            </div>
        </form>
    </div>
</div>

