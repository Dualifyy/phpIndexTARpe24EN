<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>midagi ikka jah</title>
    <script src="JS4index.js"></script>
</head>
<body>
<h1>ÕPILASE REGISTREERIMISVORM</h1>

<fieldset>
    <legend>Isikuandmed</legend>
    <form>
        <label for="fname" >Eesnimi:</label><br>
        <td>
            <input type="text" id="fname" name="fname" placeholder="nt Mario" required maxlength="30" oninput="fnameLugemine()"><br>
        </td>
        <td>
            <div id="vastus" >Vastusekoht</div>
        </td>
        <td>
            <label for="lname">Perekonnanimi:</label><br>
        </td>
        <td>
            <input type="text" id="lname" name="lname" placeholder="nt Metshein" required maxlength="30" oninput="lnameLugemine()"><br>
        </td>
        <td>
            <div id="vastus2" >Vastusekoht</div>
        </td>
        <td>
            <label for="birthday">Sünnikuupäev</label> <br>
        </td>
        <td>
            <input type="date" id="birthday" name="birthday" required min="1980-01-01" max="2025-12-31" oninput="birthdayLugemine()"><br>
        </td>
        <td>
            <div id="vastus3" >Vastusekoht</div>
        </td>
        <label>Sugu</label> <br>
        <input type="radio" id="gender1" name="gender" value="Mees"  onchange="suguLugemine()">
        <label for="gender1">Mees</label>
        <input type="radio" id="gender2" name="gender" value="Naine"  onchange="suguLugemine()">
        <label for="gender2">Naine</label>
        <input type="radio" id="gender3" name="gender" value="Muu"  onchange="suguLugemine()">
        <label for="gender3">Muu</label>
        <td>
            <div id="vastus4" >Vastusekoht</div>
        </td>
    </form>

</fieldset>

<fieldset>
    <br> <br>
    <legend>Kontakt</legend>
    <form>
        <label for="email">E-post</label> <br>
        <input type="text" id="email" name="email" placeholder="nt nimi@kool.ee" required maxlength="100"><br>
        <label for="phone">Mobiiltelefon</label> <br>
        <input type="text" id="phone" name="phone" placeholder="372 51234567" required pattern="^\+372\s?\d{7,8}$"><br>
        <label>Address</label> <br>
        <textarea name="info" id="info" cols="30" rows="5">
        Tänav, maja, korter
    </textarea> <br>
        <label for="city">Linn/Asula</label> <br>
        <input type="text" id="city" name="city" placeholder="nt Tallinn"><br>
        <label for="postindex">Postiindeks</label> <br>
        <input type="text" id="postindex" name="postindex" placeholder="nt 10111" required maxlength="5" pattern="^\d{5}$"><br>
        <label for="country">Riik</label> <br>
        <input type="disabled" id="country" name="country" placeholder="Eesti"><br>
    </form>
</fieldset>

<fieldset>
    <legend> Muu Info</legend>
    <form>
        <label>Huvialad</label> <br>
        <input type="checkbox" id="huvialad1" name="Joonistamine" value="Joonistamine">
        <label for="huvialad1">Joonistamine</label>
        <input type="checkbox" id="huvialad2" name="Laulmine" value="Laulmine">
        <label for="huvialad2">Laulmine</label>
        <input type="checkbox" id="huvialad3" name="Tantsimine" value="Tantsimine">
        <label for="huvialad3">Tantsimine</label>
        <input type="checkbox" id="huvialad4" name="Kokkamine" value="Kokkamine">
        <label for="huvialad4">Kokkamine</label>
        <input type="checkbox" id="huvialad5" name="Muu" value="Muu">
        <label for="huvialad5">Muu</label>
        <input type="text" placeholder="täpsusta (kuni 30 märki)"><br>
        <label for="webpage">Isiklik veebileht</label> <br>
        <input type="url" id="webpage" name="webpage" placeholder="https://google.com"><br>
        <label for="favcolor">Lemmikvärv?</label> <br>
        <input type="color" id="favcolor" name="favcolor"> <br>
        <label for="documents">Dokumendid (PDF või pilt)</label> <br>
        <input type="file" id="documents" name="documents"> <br>
        <label> (lubada PDF ja pildid)</label>

    </form>

</fieldset>

<fieldset>
    <legend>Nõustumine</legend>
    <form>
        <input type="checkbox" id="agree" name="agree">
        <label for="agree">Kinnitan, et esitatud andmed on õiged ja luban nende töötleemist vasatavalt kooli tingimustele.</label>
    </form>
</fieldset>

<button type="submit">Saada</button>
<button type="reset">Tühjenda</button>
</body>
</html>
