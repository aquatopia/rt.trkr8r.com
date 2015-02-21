<?php include ( 'includes/header.php'); ?>

<div class="interior-header">
    <img src="assets/imgs/rt-logo_small.png" class="left">
</div>
<div class="clear"></div>

<h1>Register</h1>

<form>
    <div class="row">
        <div class="six cols">
            <label for="lastname">Last Name</label>
            <input class="full-width" type="text" placeholder="" name="lastname">
        </div>
        <div class="six cols">
            <label for="firstname">First Name</label>
            <input class="full-width" type="text" placeholder="" name="firstname">
        </div>
    </div>

    <div class="row">
        <div class="twelve cols">
            <label for="address1">Home Address</label>
            <input class="full-width" type="text" placeholder="" name="address1">
            <input class="full-width" type="text" placeholder="" name="address2">
        </div>
        <div class="row">
            <div class="five cols">
                <label for="ciry">City</label>
                <input class="full-width" type="text" placeholder="" name="city">
            </div>
            <div class="three cols">
                <label for="state">State</label>
                <select name="state">
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District Of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                </select>
            </div>
            <div class="three cols">
                <label for="postalcode">Zip</label>
                <input type="text" name="postalcode">
            </div>
        </div>

    </div>

</form>


</div>


<?php include ( 'includes/footer.php'); ?>