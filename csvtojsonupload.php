<?php

$error = '';

if (isset($_POST["upload_file"])) {
    if ($_FILES['file']['name']) {
        $file_array = explode(".", $_FILES['file']['name']);

        $file_name = $file_array[0];

        $extension = end($file_array);

        if ($extension == 'csv') {
            $column_name = array();

            $final_data = array();

            $file_data = file_get_contents($_FILES['file']['tmp_name']);

            $data_array = array_map("str_getcsv", explode("\n", $file_data));

            $labels = array_shift($data_array);

            foreach ($labels as $label) {
                $column_name[] = $label;
            }

            $count = count($data_array) - 1;

            for ($j = 0; $j < $count; $j++) {
                $data = array_combine($column_name, $data_array[$j]);

                $final_data[$j] = $data;
            }

            header('Content-disposition: attachment; filename=' . $file_name . '.json');

            header('Content-type: application/json');

            echo json_encode($final_data);

            exit;
        } else {
            $error = 'Only <b>.csv</b> file allowed';
        }
    } else {
        $error = 'Please Select CSV File';
    }
}
