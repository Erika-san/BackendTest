<!DOCTYPE html>
<html>
    <head>
        <title>Book List</title>
    </head>
    <body>
        <h1>Book List</h1>
        <div>
            <label for="show">List shown :</label>
            <select name="show" id="show">
                <option value="10">10</option>
            </select>
        </div>
        <div>
            <table>
                <tr>
                    <th>No</th>
                    <th>Book Name</th>
                    <th>Category Name</th>
                    <th>Author Name</th>
                    <th>Average Rating</th>
                    <th>Voter</th>
                </tr>
                @foreach ($bookList as $book)
                    <tr>
                        <td>{{$book->id}}</td>
                        <td>{{$book->name}}</td>
                        <td>{{$book->category->name}}</td>
                        <td>{{$book->author->name}}</td>
                        <td>
                            <?php
                                $count = 0;
                                $voterSum = 0;
                                foreach ($book->ratings as $rating) {
                                    $count += 1;
                                    $voterSum += $rating->rating;
                                }
                                $avg = $voterSum / $count;
                                echo number_format($avg, 1);
                            ?>
                        </td>
                        <td>
                            <?php echo $count; ?>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>
