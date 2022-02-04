<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AttackSimulationRoot File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* AttackSimulationRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AttackSimulationRoot extends Entity
{

     /**
     * Gets the simulationAutomations
     *
     * @return SimulationAutomation[]|null The simulationAutomations
     */
    public function getSimulationAutomations()
    {
        if (array_key_exists('simulationAutomations', $this->_propDict) && !is_null($this->_propDict['simulationAutomations'])) {
            $simulationAutomations = [];
            if (count($this->_propDict['simulationAutomations']) > 0 && is_a($this->_propDict['simulationAutomations'][0], 'SimulationAutomation')) {
                return $this->_propDict['simulationAutomations'];
            }
            foreach ($this->_propDict['simulationAutomations'] as $singleValue) {
                $simulationAutomations []= new SimulationAutomation($singleValue);
            }
            $this->_propDict['simulationAutomations'] = $simulationAutomations;
            return $this->_propDict['simulationAutomations'];
        }
        return null;
    }

    /**
    * Sets the simulationAutomations
    *
    * @param SimulationAutomation[] $val The simulationAutomations
    *
    * @return AttackSimulationRoot
    */
    public function setSimulationAutomations($val)
    {
        $this->_propDict["simulationAutomations"] = $val;
        return $this;
    }


     /**
     * Gets the simulations
    * Represent attack simulation and training campaign of a tenant.
     *
     * @return Simulation[]|null The simulations
     */
    public function getSimulations()
    {
        if (array_key_exists('simulations', $this->_propDict) && !is_null($this->_propDict['simulations'])) {
            $simulations = [];
            if (count($this->_propDict['simulations']) > 0 && is_a($this->_propDict['simulations'][0], 'Simulation')) {
                return $this->_propDict['simulations'];
            }
            foreach ($this->_propDict['simulations'] as $singleValue) {
                $simulations []= new Simulation($singleValue);
            }
            $this->_propDict['simulations'] = $simulations;
            return $this->_propDict['simulations'];
        }
        return null;
    }

    /**
    * Sets the simulations
    * Represent attack simulation and training campaign of a tenant.
    *
    * @param Simulation[] $val The simulations
    *
    * @return AttackSimulationRoot
    */
    public function setSimulations($val)
    {
        $this->_propDict["simulations"] = $val;
        return $this;
    }

}
