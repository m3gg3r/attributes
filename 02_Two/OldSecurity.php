<?php
class Controller
{
    public function index()
    {
        $this->authorize(); // Prüft Benutzerrechte
    }

    private function authorize()
    {
        // Prüft Berechtigungen
    }
}
