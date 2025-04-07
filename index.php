<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Agenda de Tarefas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Agenda de Tarefas </h1>

    <?php include 'conexao.php'; ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Início</th>
            <th>Fim</th>
        </tr>

        <?php
        $sql = "SELECT * FROM tabela";
        $result = $conexao->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id_tarefa"] . "</td>";
                echo "<td>" . $row["descricao_tarefa"] . "</td>";
                echo "<td>" . $row["data_inicio_tarefa"] . "</td>";
                echo "<td>" . $row["data_fim_tarefa"] . "</td>" ;
                echo "</tr> <br>";
            }
        } else {
            echo "<tr><td colspan='4'>Nenhuma tarefa encontrada.</td></tr>";
            echo "<br>";
        }

        $conexao->close();
        ?>
    </table>
</body>
</html>