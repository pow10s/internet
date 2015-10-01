<?php
class SendController
{
    public function actionSend()
    {
        $view = new \libs\View();
        $view->renderPartial('addDataView');
        $obj = new \libs\DBModel();
        if (isset($_POST['send_btn'])) {
            $obj->tableData($_POST['room_snd'],$_POST['price_snd'],$_POST['period_snd'],$_POST['name_snd']);
        }

        if (isset($_POST['send_data_btn'])) {
            $obj->delete($_POST['data_delete'],$_POST['data_room_delete']);
        }

        if (isset($_POST['view_data_btn'])){
            $result =  $obj->view();
            echo "<table border = 1>" . "<tr>" . "<th>" . "Room" . "</th>" . "<th>" . "Price" . "</th>" ."</th>" . "<th>" . "Period" . "</th>"."</th>" . "<th>" . "Name" . "</th>". "</tr>";
            foreach ($result as $key => $value) {
                echo "<tr>" . "<td>" . $value['Room'] . "</td>" . "<td>" . $value['Price'] . "</td>" ."<td>" . $value['Period'] . "</td>" ."<td>" . $value['Name'] . "</td>" . "</tr>";
            }

            echo "</table>";
        }
    }
}