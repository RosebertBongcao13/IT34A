<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library System</title>
</head>
<body>
    <h1>Simple Library System</h1>
    <nav>
        <a href="index.php?section=students">Students</a>
        <a href="index.php?section=books">Books</a>
        <a href="index.php?section=borrow">Borrow</a>
    </nav>
    <hr>


    <?php if($section === 'students'): ?>
        <h1>Students</h1>
        <p>
            <a href="index.php?section=students&action=create">
                Add Student
            </a>

        </p>

        <?php if($action==='create'): ?>
       
            <h2> Add Student </h2> 
        
        <form method="POST">
                <p>
                    <label>First Name</label>
                    <br>
                    <input type="text"
                        name="student_first_name"
                        required
                    />
                </p>


                <p>
                    <label>Last Name</label>
                    <br>
                    <input type="text"
                        name="student_last_name"
                        required
                    />
                </p>

                <p>
                    <label>Course</label>
                    <br>
                    <input type="text"
                        name="student_course"
                        required
                    />
                </p>

                <button type="submit">
                    Save
                </button>

                <a href="index.php?section=students">
                    Cancel
                 </a>

        </form>
        
        <?php elseif($action==='update'): ?>

          <h2> Update Student</h2>
          <h2><?=  htmlspecialchars($student['student_first_name'])?></h2>

                <form method="POST">
                <p>
                    <label>First Name</label>
                    <br>
                    <input type="text"
                        name="student_first_name"
                        value="<?=  htmlspecialchars($student['student_first_name'])?>"
                        required
                    />
                </p>


                <p>
                    <label>Last Name</label>
                    <br>
                    <input type="text"
                        name="student_last_name"
                         value="<?=  htmlspecialchars($student['student_last_name'])?>"
                        required
                    />
                </p>

                <p>
                    <label>Course</label>
                    <br>
                    <input type="text"
                        name="student_course"
                         value="<?=  htmlspecialchars($student['student_course'])?>"
                        required
                    />
                </p>

                <button type="submit">
                    Save
                </button>

                <a href="index.php?section=students">
                    Cancel
                 </a>

            </form>

        <?php else: ?>   

            <table border="1" cellpadding="10" cellspacing="0">
                <thead>
                     <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Course</th>
                    <th>Created at</th>
                    <th>Actions</th>
                     </tr>
             </thead>
                <tbody>
                  <?php foreach($students as $student): ?>
                    <tr>
                        <td>
                            <?=htmlspecialchars($student['student_id']) ?>
                        </td>
                        <td>
                            <?=htmlspecialchars($student['student_first_name']) ?>
                        </td>
                        <td>
                            <?=htmlspecialchars($student['student_last_name']) ?>
                        </td>
                        <td>
                            <?=htmlspecialchars($student['student_course']) ?>
                        </td>
                        <td>
                            <?=htmlspecialchars($student['student_created_at']) ?>
                        </td>
                         <td>
                            <a href="index.php?section=students&action=update&id=<?= $student['student_id'] ?>">Edit</a>
                            |


                             
                            <a>Delete</a>
                        </td>
                    </tr>
                  <?php endforeach?>
                </tbody>
            </table>

        <?php endif;?>

    <?php endif;?>





    <?php if($section === 'books'): ?>
        <h1>Books</h1>

        <p>
            <a href="index.php?section=books&action=create">
            Add Book
            </a>

        </p>

        <?php if($action==='create'): ?>
            <h2>Add Books</h2>


            <form method="POST">
            <p>
             <label>Book Title</label>
                <br>
                <input type="text"
                    name="book_title"
                    required
                    />
             </p>
                    <p>
              <label>Book Author</label>
             <br>
                <input type="text"
                    name="book_author"
                    required
                    />
             </p>
            <p>
                <label>Book Category</label>
                <br>
                <input type="text"
                    name="book_category"
                    required
                    />
             </p>

             <button type="submit">
                 save
                </button>

                <a href= "index.php?section=books">
                  Cancel
             </a>


            </form>


    <?php elseif($action==='update'): ?>

          <h2> Update Book</h2>
          <h2><?=  htmlspecialchars($book['book_title'])?></h2>

     <form method="POST">
             <p>
             <label>Book Title</label>
                <br>
                <input type="text"
                    name="book_title"
                    value="<?=  htmlspecialchars($book['book_title'])?>"
                    required
                    />
             </p>
                    <p>
              <label>Book Author</label>
             <br>
                <input type="text"
                    name="book_author"
                    value="<?=  htmlspecialchars($book['book_author'])?>"
                    required
                    />
             </p>
            <p>
                <label>Book Category</label>
                <br>
                <input type="text"
                    name="book_category"
                    value="<?=  htmlspecialchars($book['book_category'])?>"
                    required
                    />
             </p>

                <button type="submit">
                    Save
                </button>

                <a href="index.php?section=books">
                    Cancel
                 </a>

    </form>


    <?php else : ?>
    
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Book Title</th>
                    <th>Book Author</th>
                    <th>Book Category</th>
                    <th>Created at</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($books as $book): ?>
                    <tr>
                        <td>
                            <?=htmlspecialchars($book['book_id']) ?>
                        </td>
                        <td>
                            <?=htmlspecialchars($book['book_title']) ?>
                        </td>
                        <td>
                            <?=htmlspecialchars($book['book_author']) ?>
                        </td>
                        <td>
                            <?=htmlspecialchars($book['book_category']) ?>
                        </td>
                        <td>
                            <?=htmlspecialchars($book['book_created_at']) ?>
                        </td>
                         <td>
                            <a href="index.php?section=books&action=update&id=<?= $book['book_id'] ?>">Edit</a>
                            
                             
                            <a>Delete</a>
                        </td>
                    </tr>
                <?php endforeach?>
            </tbody>

        </table>
    <?php endif;?>


    <?php endif;?>

    <?php if($section === 'borrow'): ?>
        <h1>Borrow</h1>

        <p>
            <a href="index.php?section=borrow&action=create">
                Borrow a Book
            </a>
        </p>

        <?php if($action==='create'):?>
            <h3>Borrow a Book</h3>
            <form method="POST">

                <p>

                    <label>Student: </label>
                    <br>
                    <select name="student_id" required>
                        <option value="">
                            -- Select Student --
                        </option>

                        <?php foreach($students as $student): ?>

                            <option value=" <?=  $student['student_id'] ?> ">
                                <?= htmlspecialchars(
                                    $student['student_first_name']
                                    .' '.
                                    $student['student_last_name']
                                )?>
                            </option>

                        <?php endforeach;?>

                    </select>
                </p>


                <p>
                    <label>Book: </label>
                    <br>
                    <select name="book_id" required>
                        <option value="">
                            -- Select Book --
                        </option>

                        <?php foreach($books as $book): ?>

                            <option value=" <?=  $book['book_id'] ?> ">
                                <?= htmlspecialchars(
                                    $book['book_title']
                                    .' - '.
                                    $book['book_author']
                                )?>
                            </option>

                        <?php endforeach;?>

                    </select>
                </p>

                <button type="submit">
                    Borrow
                </button>
                <a href="index.php?section=borrow">
                    Cancel
                </a>
            </form>

        <?php else: ?>

            <h3>Borrowed Books</h3>

            <table border="1" cellpadding="10" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Student</th>
                        <th>Book</th>
                        <th>Return Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($borrows as $borrow): ?>
                        <tr>
                            <td>
                                <?=htmlspecialchars($borrow['borrow_id']) ?>
                            </td>
                            <td>
                                <?=htmlspecialchars(
                                    $borrow['student_first_name']
                                    .' '.
                                    $borrow['student_last_name']
                                ) ?>
                            </td>
                            <td>
                                <?=htmlspecialchars(
                                    $borrow['book_title']
                                    .' - '.
                                    $borrow['book_author']
                                ) ?>
                            </td>
                            <td>
                                <?php if($borrow['borrow_return_date'] === null): ?>
                                     Not Returned
                                <?php else: ?>
                                    <?=htmlspecialchars($borrow['borrow_return_date']) ?>
                                
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if($borrow['borrow_return_date'] === null): ?>

                                    Borrowed

                                    <?php else: ?>

                                    Returned

                                    <?php endif; ?>
                            </td>
                            <td>   
                                <?php if($borrow['borrow_return_date'] === null): ?>
                                    <a href="index.php?section=borrow&action=return&id=<?= $borrow['borrow_id'] ?>"
                                       onclick="return confirm('Mark this book returned?')">
                                        Return
                                    </a>
                                <?php else: ?>
                                    Returned
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach?>
                </tbody>
            </table>

        <?php endif;?>

    <?php endif;?>

    
</body>

<?php if (isset($_SESSION['alert'])): ?>

     <script>
         alert(<?=json_encode($_SESSION['alert'])?>);

    </script>

    <?php unset($_SESSION['alert']); ?>

<?php endif; ?>



</html>
