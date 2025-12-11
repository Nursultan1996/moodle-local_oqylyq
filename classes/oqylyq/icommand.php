<?php

namespace quizaccess_oqylyq\oqylyq;

interface ICommand {
    public function getRequestUrl() : string;
    public function getRequestMethod() : string;
    public function getRequestData() : array;
    public function getRequestQuery() : array;
    public function getRequestHeaders() : array;
}
