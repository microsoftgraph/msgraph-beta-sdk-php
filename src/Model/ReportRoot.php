<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ReportRoot File
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
* ReportRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ReportRoot extends Entity
{

     /** 
     * Gets the applicationSignInDetailedSummary
     *
     * @return ApplicationSignInDetailedSummary[]|null The applicationSignInDetailedSummary
     */
    public function getApplicationSignInDetailedSummary()
    {
        if (array_key_exists('applicationSignInDetailedSummary', $this->_propDict) && !is_null($this->_propDict['applicationSignInDetailedSummary'])) {
           $applicationSignInDetailedSummary = [];
           if (count($this->_propDict['applicationSignInDetailedSummary']) > 0 && is_a($this->_propDict['applicationSignInDetailedSummary'][0], 'ApplicationSignInDetailedSummary')) {
              return $this->_propDict['applicationSignInDetailedSummary'];
           }
           foreach ($this->_propDict['applicationSignInDetailedSummary'] as $singleValue) {
              $applicationSignInDetailedSummary []= new ApplicationSignInDetailedSummary($singleValue);
           }
           $this->_propDict['applicationSignInDetailedSummary'] = $applicationSignInDetailedSummary;
           return $this->_propDict['applicationSignInDetailedSummary'];
        }
        return null;
    }
    
    /** 
    * Sets the applicationSignInDetailedSummary
    *
    * @param ApplicationSignInDetailedSummary[] $val The applicationSignInDetailedSummary
    *
    * @return ReportRoot
    */
    public function setApplicationSignInDetailedSummary($val)
    {
        $this->_propDict["applicationSignInDetailedSummary"] = $val;
        return $this;
    }
    
    /**
    * Gets the authenticationMethods
    *
    * @return AuthenticationMethodsRoot|null The authenticationMethods
    */
    public function getAuthenticationMethods()
    {
        if (array_key_exists("authenticationMethods", $this->_propDict) && !is_null($this->_propDict["authenticationMethods"])) {
            if (is_a($this->_propDict["authenticationMethods"], "\Beta\Microsoft\Graph\Model\AuthenticationMethodsRoot")) {
                return $this->_propDict["authenticationMethods"];
            } else {
                $this->_propDict["authenticationMethods"] = new AuthenticationMethodsRoot($this->_propDict["authenticationMethods"]);
                return $this->_propDict["authenticationMethods"];
            }
        }
        return null;
    }
    
    /**
    * Sets the authenticationMethods
    *
    * @param AuthenticationMethodsRoot $val The authenticationMethods
    *
    * @return ReportRoot
    */
    public function setAuthenticationMethods($val)
    {
        $this->_propDict["authenticationMethods"] = $val;
        return $this;
    }
    

     /** 
     * Gets the credentialUserRegistrationDetails
     *
     * @return CredentialUserRegistrationDetails[]|null The credentialUserRegistrationDetails
     */
    public function getCredentialUserRegistrationDetails()
    {
        if (array_key_exists('credentialUserRegistrationDetails', $this->_propDict) && !is_null($this->_propDict['credentialUserRegistrationDetails'])) {
           $credentialUserRegistrationDetails = [];
           if (count($this->_propDict['credentialUserRegistrationDetails']) > 0 && is_a($this->_propDict['credentialUserRegistrationDetails'][0], 'CredentialUserRegistrationDetails')) {
              return $this->_propDict['credentialUserRegistrationDetails'];
           }
           foreach ($this->_propDict['credentialUserRegistrationDetails'] as $singleValue) {
              $credentialUserRegistrationDetails []= new CredentialUserRegistrationDetails($singleValue);
           }
           $this->_propDict['credentialUserRegistrationDetails'] = $credentialUserRegistrationDetails;
           return $this->_propDict['credentialUserRegistrationDetails'];
        }
        return null;
    }
    
    /** 
    * Sets the credentialUserRegistrationDetails
    *
    * @param CredentialUserRegistrationDetails[] $val The credentialUserRegistrationDetails
    *
    * @return ReportRoot
    */
    public function setCredentialUserRegistrationDetails($val)
    {
        $this->_propDict["credentialUserRegistrationDetails"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userCredentialUsageDetails
     *
     * @return UserCredentialUsageDetails[]|null The userCredentialUsageDetails
     */
    public function getUserCredentialUsageDetails()
    {
        if (array_key_exists('userCredentialUsageDetails', $this->_propDict) && !is_null($this->_propDict['userCredentialUsageDetails'])) {
           $userCredentialUsageDetails = [];
           if (count($this->_propDict['userCredentialUsageDetails']) > 0 && is_a($this->_propDict['userCredentialUsageDetails'][0], 'UserCredentialUsageDetails')) {
              return $this->_propDict['userCredentialUsageDetails'];
           }
           foreach ($this->_propDict['userCredentialUsageDetails'] as $singleValue) {
              $userCredentialUsageDetails []= new UserCredentialUsageDetails($singleValue);
           }
           $this->_propDict['userCredentialUsageDetails'] = $userCredentialUsageDetails;
           return $this->_propDict['userCredentialUsageDetails'];
        }
        return null;
    }
    
    /** 
    * Sets the userCredentialUsageDetails
    *
    * @param UserCredentialUsageDetails[] $val The userCredentialUsageDetails
    *
    * @return ReportRoot
    */
    public function setUserCredentialUsageDetails($val)
    {
        $this->_propDict["userCredentialUsageDetails"] = $val;
        return $this;
    }
    

     /** 
     * Gets the dailyPrintUsageByPrinter
     *
     * @return PrintUsageByPrinter[]|null The dailyPrintUsageByPrinter
     */
    public function getDailyPrintUsageByPrinter()
    {
        if (array_key_exists('dailyPrintUsageByPrinter', $this->_propDict) && !is_null($this->_propDict['dailyPrintUsageByPrinter'])) {
           $dailyPrintUsageByPrinter = [];
           if (count($this->_propDict['dailyPrintUsageByPrinter']) > 0 && is_a($this->_propDict['dailyPrintUsageByPrinter'][0], 'PrintUsageByPrinter')) {
              return $this->_propDict['dailyPrintUsageByPrinter'];
           }
           foreach ($this->_propDict['dailyPrintUsageByPrinter'] as $singleValue) {
              $dailyPrintUsageByPrinter []= new PrintUsageByPrinter($singleValue);
           }
           $this->_propDict['dailyPrintUsageByPrinter'] = $dailyPrintUsageByPrinter;
           return $this->_propDict['dailyPrintUsageByPrinter'];
        }
        return null;
    }
    
    /** 
    * Sets the dailyPrintUsageByPrinter
    *
    * @param PrintUsageByPrinter[] $val The dailyPrintUsageByPrinter
    *
    * @return ReportRoot
    */
    public function setDailyPrintUsageByPrinter($val)
    {
        $this->_propDict["dailyPrintUsageByPrinter"] = $val;
        return $this;
    }
    

     /** 
     * Gets the dailyPrintUsageByUser
     *
     * @return PrintUsageByUser[]|null The dailyPrintUsageByUser
     */
    public function getDailyPrintUsageByUser()
    {
        if (array_key_exists('dailyPrintUsageByUser', $this->_propDict) && !is_null($this->_propDict['dailyPrintUsageByUser'])) {
           $dailyPrintUsageByUser = [];
           if (count($this->_propDict['dailyPrintUsageByUser']) > 0 && is_a($this->_propDict['dailyPrintUsageByUser'][0], 'PrintUsageByUser')) {
              return $this->_propDict['dailyPrintUsageByUser'];
           }
           foreach ($this->_propDict['dailyPrintUsageByUser'] as $singleValue) {
              $dailyPrintUsageByUser []= new PrintUsageByUser($singleValue);
           }
           $this->_propDict['dailyPrintUsageByUser'] = $dailyPrintUsageByUser;
           return $this->_propDict['dailyPrintUsageByUser'];
        }
        return null;
    }
    
    /** 
    * Sets the dailyPrintUsageByUser
    *
    * @param PrintUsageByUser[] $val The dailyPrintUsageByUser
    *
    * @return ReportRoot
    */
    public function setDailyPrintUsageByUser($val)
    {
        $this->_propDict["dailyPrintUsageByUser"] = $val;
        return $this;
    }
    

     /** 
     * Gets the dailyPrintUsageSummariesByPrinter
     *
     * @return PrintUsageByPrinter[]|null The dailyPrintUsageSummariesByPrinter
     */
    public function getDailyPrintUsageSummariesByPrinter()
    {
        if (array_key_exists('dailyPrintUsageSummariesByPrinter', $this->_propDict) && !is_null($this->_propDict['dailyPrintUsageSummariesByPrinter'])) {
           $dailyPrintUsageSummariesByPrinter = [];
           if (count($this->_propDict['dailyPrintUsageSummariesByPrinter']) > 0 && is_a($this->_propDict['dailyPrintUsageSummariesByPrinter'][0], 'PrintUsageByPrinter')) {
              return $this->_propDict['dailyPrintUsageSummariesByPrinter'];
           }
           foreach ($this->_propDict['dailyPrintUsageSummariesByPrinter'] as $singleValue) {
              $dailyPrintUsageSummariesByPrinter []= new PrintUsageByPrinter($singleValue);
           }
           $this->_propDict['dailyPrintUsageSummariesByPrinter'] = $dailyPrintUsageSummariesByPrinter;
           return $this->_propDict['dailyPrintUsageSummariesByPrinter'];
        }
        return null;
    }
    
    /** 
    * Sets the dailyPrintUsageSummariesByPrinter
    *
    * @param PrintUsageByPrinter[] $val The dailyPrintUsageSummariesByPrinter
    *
    * @return ReportRoot
    */
    public function setDailyPrintUsageSummariesByPrinter($val)
    {
        $this->_propDict["dailyPrintUsageSummariesByPrinter"] = $val;
        return $this;
    }
    

     /** 
     * Gets the dailyPrintUsageSummariesByUser
     *
     * @return PrintUsageByUser[]|null The dailyPrintUsageSummariesByUser
     */
    public function getDailyPrintUsageSummariesByUser()
    {
        if (array_key_exists('dailyPrintUsageSummariesByUser', $this->_propDict) && !is_null($this->_propDict['dailyPrintUsageSummariesByUser'])) {
           $dailyPrintUsageSummariesByUser = [];
           if (count($this->_propDict['dailyPrintUsageSummariesByUser']) > 0 && is_a($this->_propDict['dailyPrintUsageSummariesByUser'][0], 'PrintUsageByUser')) {
              return $this->_propDict['dailyPrintUsageSummariesByUser'];
           }
           foreach ($this->_propDict['dailyPrintUsageSummariesByUser'] as $singleValue) {
              $dailyPrintUsageSummariesByUser []= new PrintUsageByUser($singleValue);
           }
           $this->_propDict['dailyPrintUsageSummariesByUser'] = $dailyPrintUsageSummariesByUser;
           return $this->_propDict['dailyPrintUsageSummariesByUser'];
        }
        return null;
    }
    
    /** 
    * Sets the dailyPrintUsageSummariesByUser
    *
    * @param PrintUsageByUser[] $val The dailyPrintUsageSummariesByUser
    *
    * @return ReportRoot
    */
    public function setDailyPrintUsageSummariesByUser($val)
    {
        $this->_propDict["dailyPrintUsageSummariesByUser"] = $val;
        return $this;
    }
    

     /** 
     * Gets the monthlyPrintUsageByPrinter
     *
     * @return PrintUsageByPrinter[]|null The monthlyPrintUsageByPrinter
     */
    public function getMonthlyPrintUsageByPrinter()
    {
        if (array_key_exists('monthlyPrintUsageByPrinter', $this->_propDict) && !is_null($this->_propDict['monthlyPrintUsageByPrinter'])) {
           $monthlyPrintUsageByPrinter = [];
           if (count($this->_propDict['monthlyPrintUsageByPrinter']) > 0 && is_a($this->_propDict['monthlyPrintUsageByPrinter'][0], 'PrintUsageByPrinter')) {
              return $this->_propDict['monthlyPrintUsageByPrinter'];
           }
           foreach ($this->_propDict['monthlyPrintUsageByPrinter'] as $singleValue) {
              $monthlyPrintUsageByPrinter []= new PrintUsageByPrinter($singleValue);
           }
           $this->_propDict['monthlyPrintUsageByPrinter'] = $monthlyPrintUsageByPrinter;
           return $this->_propDict['monthlyPrintUsageByPrinter'];
        }
        return null;
    }
    
    /** 
    * Sets the monthlyPrintUsageByPrinter
    *
    * @param PrintUsageByPrinter[] $val The monthlyPrintUsageByPrinter
    *
    * @return ReportRoot
    */
    public function setMonthlyPrintUsageByPrinter($val)
    {
        $this->_propDict["monthlyPrintUsageByPrinter"] = $val;
        return $this;
    }
    

     /** 
     * Gets the monthlyPrintUsageByUser
     *
     * @return PrintUsageByUser[]|null The monthlyPrintUsageByUser
     */
    public function getMonthlyPrintUsageByUser()
    {
        if (array_key_exists('monthlyPrintUsageByUser', $this->_propDict) && !is_null($this->_propDict['monthlyPrintUsageByUser'])) {
           $monthlyPrintUsageByUser = [];
           if (count($this->_propDict['monthlyPrintUsageByUser']) > 0 && is_a($this->_propDict['monthlyPrintUsageByUser'][0], 'PrintUsageByUser')) {
              return $this->_propDict['monthlyPrintUsageByUser'];
           }
           foreach ($this->_propDict['monthlyPrintUsageByUser'] as $singleValue) {
              $monthlyPrintUsageByUser []= new PrintUsageByUser($singleValue);
           }
           $this->_propDict['monthlyPrintUsageByUser'] = $monthlyPrintUsageByUser;
           return $this->_propDict['monthlyPrintUsageByUser'];
        }
        return null;
    }
    
    /** 
    * Sets the monthlyPrintUsageByUser
    *
    * @param PrintUsageByUser[] $val The monthlyPrintUsageByUser
    *
    * @return ReportRoot
    */
    public function setMonthlyPrintUsageByUser($val)
    {
        $this->_propDict["monthlyPrintUsageByUser"] = $val;
        return $this;
    }
    

     /** 
     * Gets the monthlyPrintUsageSummariesByPrinter
     *
     * @return PrintUsageByPrinter[]|null The monthlyPrintUsageSummariesByPrinter
     */
    public function getMonthlyPrintUsageSummariesByPrinter()
    {
        if (array_key_exists('monthlyPrintUsageSummariesByPrinter', $this->_propDict) && !is_null($this->_propDict['monthlyPrintUsageSummariesByPrinter'])) {
           $monthlyPrintUsageSummariesByPrinter = [];
           if (count($this->_propDict['monthlyPrintUsageSummariesByPrinter']) > 0 && is_a($this->_propDict['monthlyPrintUsageSummariesByPrinter'][0], 'PrintUsageByPrinter')) {
              return $this->_propDict['monthlyPrintUsageSummariesByPrinter'];
           }
           foreach ($this->_propDict['monthlyPrintUsageSummariesByPrinter'] as $singleValue) {
              $monthlyPrintUsageSummariesByPrinter []= new PrintUsageByPrinter($singleValue);
           }
           $this->_propDict['monthlyPrintUsageSummariesByPrinter'] = $monthlyPrintUsageSummariesByPrinter;
           return $this->_propDict['monthlyPrintUsageSummariesByPrinter'];
        }
        return null;
    }
    
    /** 
    * Sets the monthlyPrintUsageSummariesByPrinter
    *
    * @param PrintUsageByPrinter[] $val The monthlyPrintUsageSummariesByPrinter
    *
    * @return ReportRoot
    */
    public function setMonthlyPrintUsageSummariesByPrinter($val)
    {
        $this->_propDict["monthlyPrintUsageSummariesByPrinter"] = $val;
        return $this;
    }
    

     /** 
     * Gets the monthlyPrintUsageSummariesByUser
     *
     * @return PrintUsageByUser[]|null The monthlyPrintUsageSummariesByUser
     */
    public function getMonthlyPrintUsageSummariesByUser()
    {
        if (array_key_exists('monthlyPrintUsageSummariesByUser', $this->_propDict) && !is_null($this->_propDict['monthlyPrintUsageSummariesByUser'])) {
           $monthlyPrintUsageSummariesByUser = [];
           if (count($this->_propDict['monthlyPrintUsageSummariesByUser']) > 0 && is_a($this->_propDict['monthlyPrintUsageSummariesByUser'][0], 'PrintUsageByUser')) {
              return $this->_propDict['monthlyPrintUsageSummariesByUser'];
           }
           foreach ($this->_propDict['monthlyPrintUsageSummariesByUser'] as $singleValue) {
              $monthlyPrintUsageSummariesByUser []= new PrintUsageByUser($singleValue);
           }
           $this->_propDict['monthlyPrintUsageSummariesByUser'] = $monthlyPrintUsageSummariesByUser;
           return $this->_propDict['monthlyPrintUsageSummariesByUser'];
        }
        return null;
    }
    
    /** 
    * Sets the monthlyPrintUsageSummariesByUser
    *
    * @param PrintUsageByUser[] $val The monthlyPrintUsageSummariesByUser
    *
    * @return ReportRoot
    */
    public function setMonthlyPrintUsageSummariesByUser($val)
    {
        $this->_propDict["monthlyPrintUsageSummariesByUser"] = $val;
        return $this;
    }
    
}
