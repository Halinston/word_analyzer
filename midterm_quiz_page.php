<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Word Analyzer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f9;
            margin: 0;
        }
        .container {
            width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ddd;
            margin-bottom: 15px;
            box-sizing: border-box;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Word Analyzer</h2>
    <form action="" method="post">
        <label for="words">Enter a list of words separated by commas:</label><br><br>
        <input type="text" id="words" name="words" placeholder="word1, word2, word3..." required><br>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $words = $_POST["words"];
        
        // split the input into an array of words
        $wordArray = array_map('trim', explode(',', $words));

        //count the total words
        $wordCount = count($wordArray);
        
        //check if the count is even or odd
        $evenOrOdd = ($wordCount % 2 == 0) ? 'even' : 'odd';

        //count words containing 'a' or 'A'
        $countWithA = 0;
        foreach ($wordArray as $word) {
            if (stripos($word, 'a') !== false) {
                $countWithA++;
            }
        }

        //displaying the results
        echo "<p><strong>Total words:</strong> $wordCount ($evenOrOdd)</p>";
        echo "<p><strong>Words containing 'a' or 'A':</strong> $countWithA</p>";
    }
    ?>
</div>

</body>
</html>
