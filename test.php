<!DOCTYPE html>
<html>
<head>
    <title>�f�[�^�x�[�X�ڑ�����</title>
</head>
<body>
    <?php
    // MySQL�T�[�o�[�̐ڑ����
    $host = "testdb01-murayama.mysql.database.azure.com";
    $username = "mysqladmin";
    $password = "1qaZXsw23edCVfr4";
    $dbname = "test_database";

    // MySQL�T�[�o�[�ւ̐ڑ�
    $mysqli = new mysqli($host, $username, $password, $dbname);

    // �ڑ����ʂ̏o��
    if ($mysqli->connect_error) {
        echo "<h2>�f�[�^�x�[�X�ڑ�NG</h2>";
    } else {
        echo "<h2>�f�[�^�x�[�X�ڑ�OK</h2>";
    }

    // MySQL�ڑ��̏I��
    $mysqli->close();
    ?>
</body>
</html>