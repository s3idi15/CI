<?php

echo form_open_multipart();

echo form_upload('file');

echo form_submit('submit','upload');

echo $result;