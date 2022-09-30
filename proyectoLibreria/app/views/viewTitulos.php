<?php   
class titulosView {
    function showHome(){
        $html = '
            <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Biblioteca de Brandon Sanderson</title>
        </head>
        <body>
            <a href="home/">HOME</a>
            <a href="listado_libros/">VER LIBROS</a>
        </body>
        </html>
        ';
        echo $html;
    }

    function showBooks($books){
       echo "
       <h1>Listado de libros</h1>

            <table>
                <thead>
                        <td>Titulo</td>
                        <td>Sinopsis</td>
                        <td>Género</td>
                        <td>Fecha de publicacion</td>
                </thead>
                <tbody>";
                foreach($books as $book){
                    echo"<tr>
                        <td bgcolor='#D8FE3F'>".$book->Titulo."</td>
                        <td>".$book->Sinopsis."</td>
                        <td>".$book->Género."</td>
                        <td>".$book->Fecha_pub."</td>
                    </tr>";
                }

               echo" </tbody>

            </table>";

    }

}