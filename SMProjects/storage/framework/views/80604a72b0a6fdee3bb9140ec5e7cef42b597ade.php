
<?php $__env->startSection('content'); ?>
<body>
    <section>
        <div class="imgBx"><img src="img/signup.png" alt=""></div>
        <div class="contentBx">
            <div class="formBx">
                <h2>Sign Up</h2>
                <form>
                    <div class="inputBx">
                        <span>Username</span>
                        <input type="text" name="" id="">
                    </div>
                    <div class="inputBx">
                        <span>Password</span>
                        <input type="password" name="" id="">
                    </div>
                    <div class="inputBx">
                        <span>Email</span>
                        <input type="text" name="" id="">
                    </div>
                    <div class="remember">
                        <label><input type="checkbox"> &nbsp;&nbsp;&nbsp;I agree with <a href="">Terms & Privacy</a></label>
                    </div>
                    <div class="inputBx">
                        <input type="submit" value="Sign Up">
                    </div>
                    <div class="inputBx">
                        <p>Already have an account?<a href="<?php echo e(route('client.page.indexsignin')); ?>"> Sign In</a></p>
                    </div>
                </form>
                <h3>Sign Up with Social Media</h3>
                <ul class="sci">
                    <li><img src="img/fbicon.png" alt=""></li>
                    <li><img src="img/ggicon.png" alt=""></li>
                    <li><img src="img/instaicon.png" alt=""></li>
                </ul>
            </div>
        </div>
    </section>
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('client.layout.mastersignup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\New folder\htdocs\Semi-project-PBIT17102\SMProjects\resources\views/client/page/indexsignup.blade.php ENDPATH**/ ?>