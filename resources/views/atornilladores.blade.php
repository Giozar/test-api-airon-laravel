<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atornilladores</title>
</head>

<body>

    <!-- **Wrapper** -->
    <div class="wrapper">
        <div class="inner-wrapper">

            <!-- **Main - Starts** -->
            <div id="main">

                <div class="full-width-section">
                    <div class="dt-sc-margin65"></div>
                    <div class="container">
                        <table class="table table-condensed tablaproductos">
                            <thead>
                                <tr>
                                    <th><strong>Imagen</strong></th>
                                    <th><strong>Nombre</strong> </th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $apiUrl = 'https://torquealto.com/h2actualizado/h2/public/api/herramientas/atornilladores';
                                $curl = curl_init($apiUrl);
                                curl_setopt($curl, CURLOPT_ENCODING, "");
                                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                                $json = curl_exec($curl);




                                $array = (json_decode($json, true));
                                $temporal = "";
                                ?>
                                <?php foreach ($array as $key => $val) {
                                    echo "<tr>";
                                    echo "<td>";
                                    echo '<a href="/productos/' . $val['url'] . '">';
                                    echo '<img src="' . $val['url_image'] . '" width="75">';
                                    echo "</a>";
                                    echo "</td>";
                                    echo "<td>";
                                    echo '<a href="/productos/' . $val['url'] . '">';
                                    echo $val['nombre'];
                                    echo "</a>";
                                    echo "</td>";
                                    echo "</tr>";
                                }

                                curl_close($curl);
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>


            </div> <!-- **Main - Ends** -->

            <!-- **Footer** -->

        </div><!-- **inner-wrapper - End** -->

    </div><!-- **Wrapper - End** -->




</body>

</html>