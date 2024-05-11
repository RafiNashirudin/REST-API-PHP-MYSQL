<?php

    require_once('connection.php');

    if (empty($_GET)) {
        $query = mysqli_query( $connection, "SELECT * FROM recommendations" );

        $result = array();
        while($row = mysqli_fetch_array($query)) {
            array_push( $result, array (
                'id' => $row['id'],
                'images' => $row['images'],
                'title' => $row['title'],
                'content' => $row['content'],
                'date' => $row['date']
            ) );
        }

        echo json_encode (
            array( 'result' => $result )
        );
        
    } else {

        $query = mysqli_query( $connection, "SELECT * FROM recommendations WHERE id=". $_GET['id'] );

        $result = array();
            while($row = $query->fetch_assoc()) {
                $result = array (
                    'id' => $row['id'],
                    'images' => $row['images'],
                    'title' => $row['title'],
                    'content' => $row['content'],
                    'date' => $row['date']
                );

                echo json_encode (
                    $result
                );

        }
    }

?>