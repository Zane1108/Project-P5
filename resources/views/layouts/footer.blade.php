<!DOCTYPE html>
<html lang="en">

<head>
    <title>CSS Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Style the header */


        /* Create two columns/boxes that floats next to each other */
        /* article */
        article {
            float: left;
            padding: 20px;
            width: 100%;
            background-color: #f1f1f1;
            height: 200px;
            /* only for demonstration, should be removed */
        }

        /* Style the list inside the menu */
        /* Clear floats after the columns */
        section::after {
            content: "";
            display: table;
            clear: both;
        }

        /* Style the footer */
        footer {
            background-color: #777;
            padding: 10px;
            text-align: center;
            color: white;
        }

        /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
        @media (max-width: 600px) {}
    </style>
</head>

<body>

    <section>
        <article>
            <h1>International school</h1>
            <p> sekolah ini mendukung pendidikan internasional dalam lingkungan internasional, baik dengan menerapkan kurikulum seperti International Baccalaureate, Edexcel, atau Cambridge International Examinations atau dengan mengikuti kurikulum nasional yang berbeda dari negara tempat sekolah.</p>
        </article>
    </section>


    <footer>
        <p>@Coppyright International school</p>
    </footer>

</body>

</html>
