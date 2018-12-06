<?
    // Klassendefinition
    class Scale extends IPSModule {

        // Überschreibt die interne IPS_Create($id) Funktion
        public function Create() {
            // Diese Zeile nicht löschen.
            parent::Create();
			
			$this->RegisterPropertyInteger("SourceID", 0);
	        $this->RegisterVariableFloat("Value", "Value", "~Temperature");

        }

        /**
        * Die folgenden Funktionen stehen automatisch zur Verfügung, wenn das Modul über die "Module Control" eingefügt wurden.
        * Die Funktionen werden, mit dem selbst eingerichteten Prefix, in PHP und JSON-RPC wiefolgt zur Verfügung gestellt:
        *
        * ABC_MeineErsteEigeneFunktion($id);
        *
        */
        public function MeineErsteEigeneFunktion(float $InValue, float $InLL, float $InUL, float $OutLL, float $OutUL) {
            echo $InValue;
        }
    }
?>