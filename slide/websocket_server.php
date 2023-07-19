<?php
$server = new WebSocketServer('localhost', 8080);

class WebSocketServer
{
    private $clients = [];

    public function __construct($host, $port)
    {
        set_time_limit(0);
        ob_implicit_flush();

        $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
        socket_set_option($socket, SOL_SOCKET, SO_REUSEADDR, 1);
        socket_bind($socket, $host, $port);
        socket_listen($socket);

        $this->clients[] = $socket;

        echo "WebSocket Server started on $host:$port\n";

        while (true) {
            $sockets = $this->clients;
            $write = null;
            $except = null;
            socket_select($sockets, $write, $except, null);

            foreach ($sockets as $socket) {
                if ($socket == $this->clients[0]) {
                    $client = socket_accept($socket);
                    $this->clients[] = $client;
                    echo "Client connected\n";
                } else {
                    $bytes = @socket_recv($socket, $buffer, 2048, 0);

                    if ($bytes === 0) {
                        $index = array_search($socket, $this->clients);
                        unset($this->clients[$index]);
                        socket_close($socket);
                        echo "Client disconnected\n";
                    } else {
                        $data = json_decode($buffer, true);
                        $this->broadcastData($data);
                    }
                }
            }
        }
    }

    private function broadcastData($data)
    {
        $message = json_encode($data);

        foreach ($this->clients as $client) {
            if ($client !== $this->clients[0]) {
                socket_write($client, $message, strlen($message));
            }
        }
    }
}
