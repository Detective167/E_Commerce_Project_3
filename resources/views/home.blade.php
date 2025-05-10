@extends('layouts.app')
@section('title','Home')
@section('content')

    <style>
        .the_image{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
            padding: 15px;
        }
        .the_image img {
            cursor: pointer;
            flex-basis: calc(20% - 20px);
            height: calc(400px - 10px);
            border: 2px solid white;
            border-radius: 8px;
            padding: 5px;
        }
        .the_image img:hover{
            border: 2px solid yellow;
        }
        a{
            text-decoration: none;
        }
    </style>

    <h2>Home</h2>
    <?php $current = 'home'; ?>

    <div class="the_image" id="the_img">
        <a href="?id=im1"><img id="im1" src="https://mobaco.com/wp-content/uploads/2025/01/ST427_0198_1-300x300.jpg" alt="Image 1"></a>
        <a href="?id=im2"><img id="im2" src="https://mobaco.com/wp-content/uploads/2025/02/ST420_0447_1-300x300.jpg" alt="Image 2"></a>
        <a href="?id=im3"><img id="im3" src="https://mobaco.com/wp-content/uploads/2025/02/ST408_0020_1-300x300.jpg" alt="Image 3"></a>
        <a href="?id=im4"><img id="im4" src="https://mobaco.com/wp-content/uploads/2025/01/ST407_0070_1-300x300.jpg" alt="Image 4"></a>
        <a href="?id=im5"><img id="im5" src="https://mobaco.com/wp-content/uploads/2025/02/ST387_0126_1-300x300.jpg" alt="Image 5"></a>
        <a href="?id=im6"><img id="im6" src="https://mobaco.com/wp-content/uploads/2025/02/ST394_070A_1-300x300.jpg" alt="Image 6"></a>
    </div>

    <?php
        if (request()->has('id')) {

            $clickedId = request()->get('id');
            $id_num = (int)preg_replace('/\D/', '', $clickedId);
            $price = $id_num *100;

            echo '
            <style>
                
            .the_image{
                display: none;
            }
            table {
                border-radius: 10px;
                border-collapse: collapse;
                width: 50%;
                margin: 20px auto;
                text-decoration: none;
                color: white;
            }
            table, th, td {
                border: 1px solid #ccc;
                padding: 10px;
                text-align: center;
            }

            </style>';

            echo "
            <table>
                <caption>Product Data</caption>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Price</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>$id_num</td>
                        <td>$price</td>
                        <td>Relaxed Fit T-Shirt</td>
                    </tr>
                </tbody>
        </table>";
        }
    ?>

@endsection