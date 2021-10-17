<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login</title>	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/stylebuku.css">
</head>

<body>
    <center>
        <form action="<?= base_url('register'); ?>" method="post">
        <table>
            <tr>
                <th colspan="3">
                    Login
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Username</th>
                <th>:</th>
                <td>
                    <input type="text" name="nama" id="nama">
                </td>
            </tr>
            <tr>
                <th>Password</th>
                <th>:</th>
                <td>
                    <input type="password" name="pass" id="pass">
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" value="submit">
                </td>
            </tr>
        </table>
</form>
</center>
</body>

</html>


