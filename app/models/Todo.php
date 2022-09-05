<?php

class Todo
{
    public function get()
    {
        return json_decode(
            file_get_contents(STORAGE_FILE),
            true
        );
    }
}
