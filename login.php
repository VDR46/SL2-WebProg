<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body style="margin: 0%; background-color: #fbfdac;">
    <div>
        <h2 style="text-align: center;">Login</h2>
    </div>

    <div style="display: flex; justify-content: center; width: 100%;">
        <div style="background-color: #ace6fd; height: 300px; width: 600px;">
            <div style="display: flex;  justify-content: center; margin-top: 70px;">
                <form action="prosesLogin.php" method="post">
                    <table>
                        <tr style="display:flex; padding-bottom: 20px;">
                            <td style="font-size: 16pt;">
                                Username
                            </td>
                            <td style="font-size: 16pt;">
                                <input type="text" name="usernameLogin" id="" style="display:flex; width: 300px; ">
                            </td>
                        </tr>
                        <tr style="display:flex; padding-bottom: 20px;">
                            <td style="font-size: 16pt;">
                                Password
                            </td>
                            <td style="font-size: 16pt;">
                                <input type="password" name="passwordLogin" id="" style="display:flex; width: 300px;">
                            </td>
                        </tr>
                        <tr style="display: flex;">
                            <td style="display: flex;">
                                <input type="submit" value="Login" name="login" style="background-color: #adf59f; border: 0cm; font-size: 16pt; width: 100px; height: 50px;">
                            </td>
                            <!-- <td style="display: flex; padding-left: 2rem;">
                                <a href="./welcome.php"><button style="border: 0cm; background-color: #fdd7ac; font-size: 16pt; width: 100px; height: 50px;">Kembali</button></a>
                            </td> -->
                        </tr>
                    </table>
                </form>
            </div>

            <div style="padding-left: 102px;">
                <a href="./welcome.php"><button style="border: 0cm; background-color: #fdd7ac; font-size: 16pt; width: 100px; height: 50px;">Kembali</button></a>
            </div>
            
        </div>
    </div>
</body>
</html>