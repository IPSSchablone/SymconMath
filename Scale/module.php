<?
	/** Scale
	* @author Martin Heinzel
	* @date 07.12.2018
	* @version 0.0.1
	*
	* Description: 
    * This function scales a value according to the form:
	*
    *       (( InValue - InLL )                      ) 
    * Out = (------------------- x ( OutUL - OutLL ) ) + OutLL 
    *       ( ( InUL - InLL )                        ) 
	*
	*
	* Changing
	* ----------
	* @date tt.mm.jjjj
	* @version x.y.z
	*
	* Beschreibung:
	*
	*/
	
    class Scale extends IPSModule {

		/** Scaling
		* @param[in] InValue Input value (to be scaled)
		* @param[in] InLL Input lower limit
		* @param[in] InUL Input upper limit
		* @param[in] OutLL Output lower limit
		* @param[in] OutUL Output upper limit
		* @return ready scaled value
		*/

        public function Scaling(float $InValue, float $InLL, float $InUL, float $OutLL, float $OutUL) {
            return ($InValue - $InLL) / ($InUL - $InLL) * ($OutUL - $OutLL) + $OutLL; 
        }
    }
?>