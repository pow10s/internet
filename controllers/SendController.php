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
    }
}