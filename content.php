<header>
                <h1>Registration Form</h1>
            </header>
            <form action="index.php" name="registrationForm" id="regi_form" method="post">
                <div class="row" id="sectionBody">
                    <label>NAME:</label>
                    <input class="txtbx" type="text" name="Name" id="name" placeholder="Name">
                    <label for="name" id="nameValue" class="error"></label>
                    <label>EMAIL:</label>
                    <input class="txtbx" type="text" id="email" placeholder="Email">
                    <label for="email" id="emailValue" class="error"></label>
                    <label>MOBILE NO:</label>
                    <input class="txtbx" type="text" id="mobile" placeholder="Mobile">
                    <label for="mobile" id="mobileValue" class="error"></label>
                    <label>GENDER:</label>
                    <select placeholder="Gender">
                            <option value="" disabled selected>Gender</option>
                            <option value="Kitchen Team">Male</option>
                            <option value="Dinning Room">Female</option>
                    </select>
                    <!--<input type="checkbox" class="abc" id="notification" value="Notification">Get Notification via email-->
                    <input type="submit" value="Apply">
                </div>
            </form>