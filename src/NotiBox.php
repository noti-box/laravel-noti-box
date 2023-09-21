<?php

namespace NotiBox;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;
use NotiBox\Exceptions\ChannelNotSetException;
use NotiBox\Exceptions\NoMessageException;

class NotiBox
{
    public function __construct(protected string $message = '', protected string $channel = '')
    {
    }

    public function channel(string $channel): static
    {
        $this->channel = $channel;

        return $this;
    }

    public function message($message): static
    {
        $this->message = $message;

        return $this;
    }

    public function send(): bool
    {
        if (empty($this->channel)) {
            throw new ChannelNotSetException('Channel is not set');
        }

        if (empty($this->message)) {
            throw new NoMessageException('Message is not set');
        }

        $endpoint = sprintf(config('noti-box.api_url').'/channel/%s/message', $this->channel);

        try {
            $response = Http::post($endpoint, [
                'content' => $this->message,
            ]);
        } catch (ConnectionException|RequestException $e) {
            throw new Exceptions\ConnectionException($e->getMessage());
        }

        return $response->successful();
    }
}
