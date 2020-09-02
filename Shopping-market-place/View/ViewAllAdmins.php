<?php
require_once(__ROOT__ . "View/View.php");

class ViewAllAdmins extends View
{
    public function output()
    {
        $str = "";
        
        foreach($this->model->getUserss() as $user)
        {
            $str= $str. ' <tr>
            <td>' .$user->getID(). '</td>
            <td>' .$user->getUserName(). '</td>
            <td>' .$user->getCreatedAt(). '</td>
            <td><a href="deleteAdmins.php?id='. $user->getID() .'">Delete</a></td>
            </tr>';
        }
        return $str;
    }
}?>