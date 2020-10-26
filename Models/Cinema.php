<?php
    namespace Models;

    class Cinema{
        private $id_Cinema;
        private $name;
        private $address;
        private $capacity;
        private $ticketValue;

        public function __construct($id, $name, $address, $capacity, $ticketValue) {
            $this->id_Cinema = $id;
            $this->name = $name;
            $this->address = $address;
            $this->capacity = $capacity;
            $this->ticketValue = $ticketValue;
        }

        public function getId_Cinema() { return $this->id_Cinema; }

        public function setId_Cinema($id_Cinema) { $this->id_Cinema = $id_Cinema; }

        public function getName() { return $this->name; }

        public function setName($name) { $this->name = $name; }

        public function getAddress() { return $this->address; }

        public function setAddress($address) { $this->address = $address; }

        public function getCapacity() { return $this->capacity; }

        public function setCapacity($capacity) { $this->capacity = $capacity; }

        public function getTicketValue() { return $this->ticketValue; }

        public function setTicketValue($ticketValue) { $this->ticketValue = $ticketValue; }
    }
?>