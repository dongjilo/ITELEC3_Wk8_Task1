<?php
class Message{
    private $id;
    private $sender;
    private $receiver;
    private $message;
    private $datetime;

    /**
     * Message constructor.
     *
     * @param string $sender The sender of the message.
     * @param string $receiver The recipient of the message.
     * @param string $message The content of the message.
     */
    public function __construct($sender, $receiver, $message)
    {
        $this->id = uniqid();
        $this->sender = $sender;
        $this->receiver = $receiver;
        $this->message = $message;
        $this->datetime = date('d/m/Y, h:i A');
    }

    public function getDatetime()
    {
        echo $this->datetime;
    }

    public function getSender()
    {
        echo $this->sender;
    }

    public function getReceiver()
    {
        echo $this->receiver;
    }

    public function sendMessage(){
        echo "MSG ID: {$this->id} <br> Message sent from {$this->sender} to {$this->receiver} at {$this->datetime}: <br>{$this->message}<br>";
    }

    public function retrieveMessage(){
        echo "MSG ID: {$this->id} <br> Message retrieved by {$this->receiver} from {$this->sender} at {$this->datetime}: <br>{$this->message}<br>";
    }

}
