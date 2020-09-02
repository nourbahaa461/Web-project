<?php
require_once(__ROOT__ . "View/View.php");

class ViewAllMessages extends View
{
    public function output()
    {
        $str = "";
        
        foreach($this->model->getmessages() as $message)
        {
            $str= $str . '<div class="divTableRow">'.
            '<div class="divTableCell"> ' . $message->getName() . " </div> ".
            '<div class="divTableCell"> ' . $message->getPhone() . " </div> ".
            '<div class="divTableCell"> ' . $message->getMessage() . " </div> ".
            '<div class="divTableCell"><a href="deleteMessage.php?id='. $message->getID() .'">Delete</a></div> '.
            '</div>';
        }
        return $str;
    }
}?>