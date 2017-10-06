<?php
    function getTable($dims) {
        $output .= "<table>";

        $output .= "<th>";
        for ($a = 1; $a < $dims; $a++) {
            $output .= "<th>" . $a . "</th>";
        }
        $output .= "</th>";

        for ($i = 1; $i < $dims; $i++) {
            $output .= "<tr>";
            $output .= "<td>" . $i . "</td>";
            for ($j = 1; $j < $dims; $j++) {
                // if ($j == 1) {
                //     $output .= $i;
                // }
                $output .= "<td>" . ($i * $j) . "</td>";
            }
            $output .= "</tr>";
        }
        $output .= "</table>";

        return $output;
    }
    echo getTable(100);
?>
