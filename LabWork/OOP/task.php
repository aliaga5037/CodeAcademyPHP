<?php
    class Telebe {
        public $ad, $soyad;
        public function qarsila() {
            echo "Salam " . $this->ad . " " . $this->soyad . ".";
            return $this;
        }
        public function qeydiyyataAl() {
            $this->qarsila();
            return $this;
        }
        public function melumatlandir() {
            echo "Sizin müraciteniz qeyde alındı ve size email gönderildi. Teşekkürler";

        }
    }

    $telebe01 = new Telebe();
    $telebe01->ad = "Memmed";
    $telebe01->soyad = "Hesenov";
    $telebe01->qeydiyyataAl()->melumatlandir();