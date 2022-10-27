<?php

function validateUserName($nameBox)
{
    if($nameBox == null)
    {
        return 'Key in username and click submit';
    }
    else if (!preg_match('/^[abc]$/',$nameBox))
    {
        return 'Verified';
    }
    else
    {
        return 'Error';
    }

}
?>
