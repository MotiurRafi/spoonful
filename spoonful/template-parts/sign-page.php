<form id="custom-signin-form" class="custom-signin-form" action="" method="post">
    <!-- Existing fields -->
    <button class="cancel_btn"><i class='bx bx-x' id="cancel_btn"></i></button>
    <label for="username">Username</label>
    <input type="text" name="username" id="username" class="username" required>

    <label for="password">Password</label>
    <input type="password" name="password" class="password" id="password" required>

    <label for="email">Email</label>
    <input type="email" name="email" id="email" required>

    <!-- New fields -->
    <label for="country">Country</label>
    <input type="text" name="country" id="country" required>

    <label for="city">City</label>
    <input type="text" name="city" id="city" required>

    <label for="region">Region</label>
    <input type="text" name="region" id="region">

    <label for="postal_code">Postal Code</label>
    <input type="text" name="postal_code" id="postal_code" required>

    <button type="submit" class="submit">Sign In</button>
    <p class="login_toggle">Have an account! <button class="login_toggle_btn" id="login_toggle_btn">LogIn!</button></p>
</form>



<form id="custom-login-form" class="custom-login-form" action="<?php echo esc_url(wp_login_url()); ?>" method="post">
    <button class="cancel_btn"><i class='bx bx-x' id="cancel_btn2"></i></button>
    <label for="username">Username</label>
    <input type="text" name="log" id="username" class="username" required>

    <label for="password">Password</label>
    <input type="password" name="pwd" class="password" id="password" required>

    <input type="hidden" name="redirect_to" value="<?php echo esc_url(home_url('/')); ?>">

    <?php wp_nonce_field('custom-login', 'custom-login-nonce'); ?>

    <button type="submit" class="submit">Log In</button>
    <p class="login_toggle">Doesn't have an account! <button class="login_toggle_btn" id="login_toggle_btn2">SignUp!</button></p>
</form>
<div class="log_error">
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = sanitize_user($_POST['username']);
        $password = $_POST['password'];
        $email = sanitize_email($_POST['email']);
        $country = sanitize_text_field($_POST['country']);
        $city = sanitize_text_field($_POST['city']);
        $region = sanitize_text_field($_POST['region']);
        $postal_code = sanitize_text_field($_POST['postal_code']);

        // Validate fields (add more validation as needed)

        // Check if username and email are unique
        $existing_user = get_user_by('login', $username);
        $existing_email = email_exists($email);

        if ($existing_user || $existing_email) {
            echo 'Username or email already exists. Please choose a different one.';
        } else {
            // Create WordPress user
            $user_id = wp_create_user($username, $password, $email);

            if (is_wp_error($user_id)) {
                echo 'Error creating user: ' . $user_id->get_error_message();
            } else {
                // Update user meta with additional information
                update_user_meta($user_id, 'country', $country);
                update_user_meta($user_id, 'city', $city);
                update_user_meta($user_id, 'region', $region);
                update_user_meta($user_id, 'postal_code', $postal_code);

                echo 'User created successfully!';
            }
        }
    }


    
    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['log'])) {
        // Verify nonce
        if (isset($_POST['custom-login-nonce']) && wp_verify_nonce($_POST['custom-login-nonce'], 'custom-login')) {
            // Prepare login data
            $login_data = array(
                'user_login'    => sanitize_user($_POST['log']),
                'user_password' => $_POST['pwd'],
                'remember'      => true,
            );

            // Perform the login
            $user = wp_signon($login_data, false);

            // Check if the login was successful
            if (!is_wp_error($user)) {
                // Redirect the user after successful login
                $redirect_to = isset($_POST['redirect_to']) ? esc_url($_POST['redirect_to']) : home_url('/');
                wp_safe_redirect($redirect_to);
                exit;
            } else {
                // Login failed, handle the error
                echo '<p class="error-message">Login failed. Please check your username and password.</p>';
            }
        } else {
            // Nonce verification failed, handle the error
            echo '<p class="error-message">Nonce verification failed. Please try again.</p>';
        }
    }
    ?>
</div>



<script>
    let customSignupForm = document.getElementById('custom-signin-form');
    let customloginForm = document.getElementById('custom-login-form');
    document.getElementById('log-toggle-btn').addEventListener('click', function() {
        customSignupForm.style.right = 0;
    });

    document.getElementById('cancel_btn').addEventListener('click', function() {
        customSignupForm.style.right = '-40%';
    });
    document.getElementById('cancel_btn2').addEventListener('click', function() {
        customloginForm.style.right = '-40%';
    });

    document.getElementById('login_toggle_btn').addEventListener('click', function() {
        customSignupForm.style.right = '-40%';
        customloginForm.style.right = '0';
    });
    document.getElementById('login_toggle_btn2').addEventListener('click', function() {
        customSignupForm.style.right = '0';
        customloginForm.style.right = '-40%';
    });
</script>

<style>
    .log_error {
        position: absolute;
        z-index: 111;
        right: 10px;
        font-size: 0.7rem;
        color: #ffa000;
    }

    .login_toggle {
        padding: 1rem 0 0 4rem;
        color: white;
    }

    .log-toggle-btn {
        color: #fff;
        font-size: 1.2rem;
    }

    .custom-login-form,
    .custom-signin-form {
        position: fixed;
        z-index: 11111111;
        right: -40%;
        top: 0;
        width: 40%;
        height: 100vh;
        background-color: rgb(27, 27, 27, .8);
        display: flex;
        flex-direction: column;
        justify-content: center;
        transition: .3s ease;

    }

    .custom-login-form label,
    .custom-signin-form label {
        color: #fff;
        padding: 0 0 0 4rem;
        font-family: 'Noah', sans-serif;
        margin: 0 0 .5rem 0;
    }

    .custom-login-form input,
    .custom-signin-form input {
        color: #fff;
        background-color: rgb(27, 27, 27);
        padding: 0.5rem 4rem;
        font-size: 1rem;
        letter-spacing: 2px;
        font-family: 'Noah', sans-serif;
    }

    .cancel_btn {
        color: #C19D60;
        align-self: end;
        padding: 0 4rem 0 0;
        margin: 0 0 -20px;
        font-size: 1.5rem;
    }

    .cancel_btn i {
        cursor: pointer;
    }

    .submit {
        background-color: #C19D60;
        padding: 11.5px 18px;
        border-radius: 0px;
        color: #fff;
        border: 0;
        font-family: 'Noah', sans-serif;
        font-size: 12px;
        letter-spacing: 3px;
        text-transform: uppercase;
        font-weight: 400;
        outline: none;
        width: max-content;
        margin: 0 0 0 4rem;
    }

    .login_toggle_btn {
        color: #8f8fff;
        text-decoration: underline;
    }
</style>