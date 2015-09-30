<?php
namespace libs;

class DBModel
{
    protected $connection;

    public function __construct()
    {
        $this->connection = DBConnector::getConnection();
    }
    public function tableData ($room,$price,$period,$name)
    {
        $sql = "INSERT INTO `PaidForInternet`(Room, Period, Price, Name) VALUES (:Room,:Period,:Price,:Name)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':Room',$room);
        $stmt->bindParam(':Price',$price);
        $stmt->bindParam(':Period',$period);
        $stmt->bindParam(':Name',$name);
        $stmt->execute();
    }

    public function delete($dataDelete, $roomDelete)
    {
        $sql = "DELETE FROM `paidforinternet` WHERE period = :period AND room=:room";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':period', $dataDelete);
        $stmt->bindParam(':room', $roomDelete);
        $stmt->execute();
    }
}