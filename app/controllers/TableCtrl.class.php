<?php
namespace app\controllers;

class TableCtrl {
 
    private $records;

    public function action_showTable() {
        try {
            $this -> records = getDB() -> select("table_calc", [
                "ID",
                "amount",
                "interest",
                "years",
                "result",
                "date"
            ]);
        } catch (\PDOException $ex) {
            getMessages() -> addError("DB Error: ".$ex -> getMessage());
        }
        $this -> generate_view();
    }

    public function generate_view() {
        getSmarty() -> assign('user',unserialize($_SESSION['user']));
        getSmarty() -> assign('records', $this -> records);
        getSmarty() -> display('TableView.tpl');
    }
}