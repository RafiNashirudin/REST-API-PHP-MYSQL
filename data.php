<?php

    require_once('connection.php');

    if (empty($_GET)) {
        $query = mysqli_query( $connection, "SELECT * FROM characters" );

        $result = array();
        while($row = mysqli_fetch_array($query)) {
            array_push( $result, array (
                'id' => $row['id'],
                'images' => $row['images'],
                'name' => $row['name'],
                'name_kanji' => $row['name_kanji'],
                'about' => $row['about'],
                'favorites' => $row['favorites']
            ) );
        }

        echo json_encode (
            array( 'result' => $result )
        );
        
    } else {

        $query = mysqli_query( $connection, "SELECT * FROM characters WHERE id=". $_GET['id'] );

        $result = array();
            while($row = $query->fetch_assoc()) {
                $result = array (
                    'id' => $row['id'],
                    'images' => $row['images'],
                    'name' => $row['name'],
                    'name_kanji' => $row['name_kanji'],
                    'about' => $row['about'],
                    'favorites' => $row['favorites']
                );

                echo json_encode (
                    $result
                );

        }
    }

?>