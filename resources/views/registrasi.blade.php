<!DOCTYPE html>
<html>

<head>
    <title>Buat Account Baru !</title>
</head>

<body>

    <h1>Buat Account Baru! </h1>
    <h3>Sign Up Form</h3>
        <form action="/welcome" method="post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

            <label for="fname">First Name :</label><br>
            <input type="text" name="fname" id="fname"><br>
            <br>
            <label for="lname">Last Name :</label><br>
            <input type="text" name="lname" id="lname"><br>
            <br>
            <label>Gender:</label><br>
            <input type="radio" name="gender" value="male" id="male">
            <label for="male">Male</label><br>
            <input type="radio" name="gender" value="female" id="female">
            <label for="female">Female</label><br>
            <input type="radio" name="gender" value="other" id="other">
            <label for="other">Other</label>
            <br>
            <br>
            <label>Nationality:</label><br>
                <select name="nationality">
                    <option value="indonesian">Indonesian</option>
                    <option value="italian">Italian</option>
                    <option value="japanese">Japanese</option>
                    <option value="libyan">Libyan</option>
                    <option value="malaysian">Malaysian</option>
                    <option value="new zealander">New Zealander</option>
                    <option value="norwegian">Norwegian</option>
                    <option value="papua new guinean">Papua New Guinean</option>
                    <option value="portuguese">Portuguese</option>
                    <option value="qatari">Qatari</option>
                    <option value="romanian">Romanian</option>
                    <option value="russian">Russian</option>
                    <option value="scottish">Scottish</option>
                    <option value="south african">South African</option>
                    <option value="south korean">South Korean</option>
                    <option value="spanish">Spanish</option>
                    <option value="swedish">Swedish</option>
                    <option value="swiss">Swiss</option>
                    <option value="syrian">Syrian</option>
                    <option value="taiwanese">Taiwanese</option>
                    <option value="tanzanian">Tanzanian</option>
                    <option value="thai">Thai</option>
                    <option value="tunisian">Tunisian</option>
                    <option value="turkish">Turkish</option>
                    <option value="ukrainian">Ukrainian</option>
                    <option value="uruguayan">Uruguayan</option>
                    <option value="uzbekistani">Uzbekistani</option>
                    <option value="venezuelan">Venezuelan</option>
                    <option value="vietnamese">Vietnamese</option>
                    <option value="welsh">Welsh</option>
                    <option value="zimbabwean">Zimbabwean</option>
                </select>
            <br>
            <br>
            <label>Language Spoken:</label><br>
            <input type="checkbox" name="language" value="bahasaindonesia" id="bahasaindonesia">
            <label for="bahasaindonesia">Bahasa Indonesia</label><br>
            <input type="checkbox" name="language" value="english" id="english">
            <label for="english">English</label><br>
            <input type="checkbox" name="language" value="other" id="other">
            <label for="other">Other</label>
            <br>
            <br>
            <label for="bio">Bio:</label><br>
            <p><textarea cols="50" rows="10" name="bio" id="bio"> </textarea></p>
            <br>
            <input type="submit" value="Sign Up">
        </form>

</body>

</html>
