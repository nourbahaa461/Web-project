<?php
require_once(__ROOT__ . "View/View.php");

class ViewAllUsers extends View
{
    public function output()
    {
        $str = "";
        
        foreach($this->model->getUsers() as $user)
        {
//            $str= $str .'<div class="divTableRow">'.
//            '<div class="divTableCell"> ' . $user->getID() . " </div> ".
//            '<div class="divTableCell"> ' . $user->getUserName() . " </div> ".
//            '<div class="divTableCell"> ' . $user->getCreatedAt() . " </div> ".
//            '<div class="divTableCell"><a href="deleteUser.php?id='. $user->getID() .'">Delete</a></div> '.
//            '</div>';
            $str= $str. ' <tr>
            <td>' .$user->getID(). '</td>
            <td>' .$user->getUserName(). '</td>
            <td>' .$user->getCreatedAt(). '</td>
            <td><a href="deleteUser.php?id='. $user->getID() .'">Delete</a></td>
            </tr>';
        }
        return $str;
    }
}?>