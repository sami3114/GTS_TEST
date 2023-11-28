<!DOCTYPE html>
<html>
<head>
    <title>Exam Results Processing</title>
</head>
<body>
    <h2>Exam Results Processing</h2>
    <form method="post">
        <textarea name="inputData" rows="10" cols="50" placeholder="Enter data here..."></textarea><br>
        <input type="submit" name="submit" value="Process Results">
    </form>

    <?php
    if (isset($_POST['submit']) && !empty($_POST['inputData'])) {
        $inputData = $_POST['inputData'];
        echo "<h3>Results</h3>";
        echo processResults($inputData);
    }

    function processResults($data) {
        $lines = explode("\n", trim($data));
        $numPass = 0;

        foreach ($lines as $line) {
            $parts = explode(" ", $line);
            if (count($parts) < 6) {
                continue;
            }

            $division = array_shift($parts);
            $scores = array_map('intval', $parts);
            $totalScore = array_sum($scores);

            if ($totalScore >= 350) {
                if ($division === 's' && ($scores[1] + $scores[2] >= 160)) {
                    $numPass++;
                } elseif ($division === 'l' && ($scores[3] + $scores[4] >= 160)) {
                    $numPass++;
                }
            }
        }

        return "Number of Passers: $numPass";
    }
    ?>
</body>
</html>
