<!DOCTYPE html>
<html>
<style>
    input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
    <!--</style>
<!--<head><link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"></head>-->
<body>

<h3>Feedback from student</h3>

<div>
    <form action="/exam-dw/insert.php" method="post">
        <label for="name">Student name</label>
        <input type="text"  name="name" placeholder="Your name..">

        <label for="email">Student email</label>
        <input type="text"  name="email" placeholder="Your email..">

        <label for="phone">Student telephone</label>
        <input type="text"  name="phone" placeholder="Your phone..">

        <label for="content">Feedback Content</label>
        <input type="text"  name="content" placeholder="Your content..">

        <label for="status">Status</label>
        <select name="status">
            <option value="0">--Status--</option>
            <option value="1">read</option>
            <option value="2">unread</option>
        </select>

        <label for="createdAt">Created Date</label>
        <input type="date"  name="createdAt">

        <button>Send feedback</button>
    </form>
</div>

</body>
</html>


