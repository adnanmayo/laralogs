<?php

namespace Adnanmayo\Laralogs;

use Monolog\Logger;
use Monolog\Handler\AbstractProcessingHandler;
use Pusher\Pusher;


/**
 * Class LaralogHandler
 * @package Adnanmayo\Laralog
 */
class LaralogsHandler extends AbstractProcessingHandler
{

    /**
     * LaralogsHandler constructor.
     * @param int $level
     * @param bool $bubble
     */
    public function __construct($level = Logger::DEBUG, $bubble = true)
    {
        parent::__construct($level, $bubble);
    }

    /**
     * @param array $record
     */
    protected function write(array $record)
    {

        $key = config('laralogs.pusher.key');
        $secret = config('laralogs.pusher.secret');
        $app_id = config('laralogs.pusher.app_id');
        $options = config('laralogs.pusher.options');
        $pusher = new Pusher($key, $secret, $app_id, $options);
        $pusher->trigger('laralog-channel', 'LaraLog', $record);

    }

}
