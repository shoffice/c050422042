<html>
<head>
    <title>Form Input ComboBox</title>
</head>
<body>
    <p>Binatang apa yang Anda suka?</p>
    <form id="form_combobox" name="form_combobox" method="POST"
    action="proses_combobox.php">
    <select name="favorit">
        <option value="Kucing">Kucing</option>
        <option value="Anjing">Anjing</option>
        <option value="Burung">Burung</option>
        <option value="Sapi">Sapi</option>
        <option value="Kambing">Kambing</option>
    </select>
    <p></p>
    <p><input type="submit" name="button" value="Tampil"/></p>
    </form>
</body>
</html>