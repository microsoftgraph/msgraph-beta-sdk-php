<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Company File
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
* Company class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Company extends Entity
{
    /**
    * Gets the businessProfileId
    *
    * @return string|null The businessProfileId
    */
    public function getBusinessProfileId()
    {
        if (array_key_exists("businessProfileId", $this->_propDict)) {
            return $this->_propDict["businessProfileId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the businessProfileId
    *
    * @param string $val The businessProfileId
    *
    * @return Company
    */
    public function setBusinessProfileId($val)
    {
        $this->_propDict["businessProfileId"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    *
    * @param string $val The displayName
    *
    * @return Company
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the name
    *
    * @return string|null The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the name
    *
    * @param string $val The name
    *
    * @return Company
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the systemVersion
    *
    * @return string|null The systemVersion
    */
    public function getSystemVersion()
    {
        if (array_key_exists("systemVersion", $this->_propDict)) {
            return $this->_propDict["systemVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the systemVersion
    *
    * @param string $val The systemVersion
    *
    * @return Company
    */
    public function setSystemVersion($val)
    {
        $this->_propDict["systemVersion"] = $val;
        return $this;
    }
    

     /** 
     * Gets the accounts
     *
     * @return Account[]|null The accounts
     */
    public function getAccounts()
    {
        if (array_key_exists('accounts', $this->_propDict) && !is_null($this->_propDict['accounts'])) {
           $accounts = [];
           if (count($this->_propDict['accounts']) > 0 && is_a($this->_propDict['accounts'][0], 'Account')) {
              return $this->_propDict['accounts'];
           }
           foreach ($this->_propDict['accounts'] as $singleValue) {
              $accounts []= new Account($singleValue);
           }
           $this->_propDict['accounts'] = $accounts;
           return $this->_propDict['accounts'];
        }
        return null;
    }
    
    /** 
    * Sets the accounts
    *
    * @param Account[] $val The accounts
    *
    * @return Company
    */
    public function setAccounts($val)
    {
        $this->_propDict["accounts"] = $val;
        return $this;
    }
    

     /** 
     * Gets the agedAccountsPayable
     *
     * @return AgedAccountsPayable[]|null The agedAccountsPayable
     */
    public function getAgedAccountsPayable()
    {
        if (array_key_exists('agedAccountsPayable', $this->_propDict) && !is_null($this->_propDict['agedAccountsPayable'])) {
           $agedAccountsPayable = [];
           if (count($this->_propDict['agedAccountsPayable']) > 0 && is_a($this->_propDict['agedAccountsPayable'][0], 'AgedAccountsPayable')) {
              return $this->_propDict['agedAccountsPayable'];
           }
           foreach ($this->_propDict['agedAccountsPayable'] as $singleValue) {
              $agedAccountsPayable []= new AgedAccountsPayable($singleValue);
           }
           $this->_propDict['agedAccountsPayable'] = $agedAccountsPayable;
           return $this->_propDict['agedAccountsPayable'];
        }
        return null;
    }
    
    /** 
    * Sets the agedAccountsPayable
    *
    * @param AgedAccountsPayable[] $val The agedAccountsPayable
    *
    * @return Company
    */
    public function setAgedAccountsPayable($val)
    {
        $this->_propDict["agedAccountsPayable"] = $val;
        return $this;
    }
    

     /** 
     * Gets the agedAccountsReceivable
     *
     * @return AgedAccountsReceivable[]|null The agedAccountsReceivable
     */
    public function getAgedAccountsReceivable()
    {
        if (array_key_exists('agedAccountsReceivable', $this->_propDict) && !is_null($this->_propDict['agedAccountsReceivable'])) {
           $agedAccountsReceivable = [];
           if (count($this->_propDict['agedAccountsReceivable']) > 0 && is_a($this->_propDict['agedAccountsReceivable'][0], 'AgedAccountsReceivable')) {
              return $this->_propDict['agedAccountsReceivable'];
           }
           foreach ($this->_propDict['agedAccountsReceivable'] as $singleValue) {
              $agedAccountsReceivable []= new AgedAccountsReceivable($singleValue);
           }
           $this->_propDict['agedAccountsReceivable'] = $agedAccountsReceivable;
           return $this->_propDict['agedAccountsReceivable'];
        }
        return null;
    }
    
    /** 
    * Sets the agedAccountsReceivable
    *
    * @param AgedAccountsReceivable[] $val The agedAccountsReceivable
    *
    * @return Company
    */
    public function setAgedAccountsReceivable($val)
    {
        $this->_propDict["agedAccountsReceivable"] = $val;
        return $this;
    }
    

     /** 
     * Gets the companyInformation
     *
     * @return CompanyInformation[]|null The companyInformation
     */
    public function getCompanyInformation()
    {
        if (array_key_exists('companyInformation', $this->_propDict) && !is_null($this->_propDict['companyInformation'])) {
           $companyInformation = [];
           if (count($this->_propDict['companyInformation']) > 0 && is_a($this->_propDict['companyInformation'][0], 'CompanyInformation')) {
              return $this->_propDict['companyInformation'];
           }
           foreach ($this->_propDict['companyInformation'] as $singleValue) {
              $companyInformation []= new CompanyInformation($singleValue);
           }
           $this->_propDict['companyInformation'] = $companyInformation;
           return $this->_propDict['companyInformation'];
        }
        return null;
    }
    
    /** 
    * Sets the companyInformation
    *
    * @param CompanyInformation[] $val The companyInformation
    *
    * @return Company
    */
    public function setCompanyInformation($val)
    {
        $this->_propDict["companyInformation"] = $val;
        return $this;
    }
    

     /** 
     * Gets the countriesRegions
     *
     * @return CountryRegion[]|null The countriesRegions
     */
    public function getCountriesRegions()
    {
        if (array_key_exists('countriesRegions', $this->_propDict) && !is_null($this->_propDict['countriesRegions'])) {
           $countriesRegions = [];
           if (count($this->_propDict['countriesRegions']) > 0 && is_a($this->_propDict['countriesRegions'][0], 'CountryRegion')) {
              return $this->_propDict['countriesRegions'];
           }
           foreach ($this->_propDict['countriesRegions'] as $singleValue) {
              $countriesRegions []= new CountryRegion($singleValue);
           }
           $this->_propDict['countriesRegions'] = $countriesRegions;
           return $this->_propDict['countriesRegions'];
        }
        return null;
    }
    
    /** 
    * Sets the countriesRegions
    *
    * @param CountryRegion[] $val The countriesRegions
    *
    * @return Company
    */
    public function setCountriesRegions($val)
    {
        $this->_propDict["countriesRegions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the currencies
     *
     * @return Currency[]|null The currencies
     */
    public function getCurrencies()
    {
        if (array_key_exists('currencies', $this->_propDict) && !is_null($this->_propDict['currencies'])) {
           $currencies = [];
           if (count($this->_propDict['currencies']) > 0 && is_a($this->_propDict['currencies'][0], 'Currency')) {
              return $this->_propDict['currencies'];
           }
           foreach ($this->_propDict['currencies'] as $singleValue) {
              $currencies []= new Currency($singleValue);
           }
           $this->_propDict['currencies'] = $currencies;
           return $this->_propDict['currencies'];
        }
        return null;
    }
    
    /** 
    * Sets the currencies
    *
    * @param Currency[] $val The currencies
    *
    * @return Company
    */
    public function setCurrencies($val)
    {
        $this->_propDict["currencies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the customerPaymentJournals
     *
     * @return CustomerPaymentJournal[]|null The customerPaymentJournals
     */
    public function getCustomerPaymentJournals()
    {
        if (array_key_exists('customerPaymentJournals', $this->_propDict) && !is_null($this->_propDict['customerPaymentJournals'])) {
           $customerPaymentJournals = [];
           if (count($this->_propDict['customerPaymentJournals']) > 0 && is_a($this->_propDict['customerPaymentJournals'][0], 'CustomerPaymentJournal')) {
              return $this->_propDict['customerPaymentJournals'];
           }
           foreach ($this->_propDict['customerPaymentJournals'] as $singleValue) {
              $customerPaymentJournals []= new CustomerPaymentJournal($singleValue);
           }
           $this->_propDict['customerPaymentJournals'] = $customerPaymentJournals;
           return $this->_propDict['customerPaymentJournals'];
        }
        return null;
    }
    
    /** 
    * Sets the customerPaymentJournals
    *
    * @param CustomerPaymentJournal[] $val The customerPaymentJournals
    *
    * @return Company
    */
    public function setCustomerPaymentJournals($val)
    {
        $this->_propDict["customerPaymentJournals"] = $val;
        return $this;
    }
    

     /** 
     * Gets the customerPayments
     *
     * @return CustomerPayment[]|null The customerPayments
     */
    public function getCustomerPayments()
    {
        if (array_key_exists('customerPayments', $this->_propDict) && !is_null($this->_propDict['customerPayments'])) {
           $customerPayments = [];
           if (count($this->_propDict['customerPayments']) > 0 && is_a($this->_propDict['customerPayments'][0], 'CustomerPayment')) {
              return $this->_propDict['customerPayments'];
           }
           foreach ($this->_propDict['customerPayments'] as $singleValue) {
              $customerPayments []= new CustomerPayment($singleValue);
           }
           $this->_propDict['customerPayments'] = $customerPayments;
           return $this->_propDict['customerPayments'];
        }
        return null;
    }
    
    /** 
    * Sets the customerPayments
    *
    * @param CustomerPayment[] $val The customerPayments
    *
    * @return Company
    */
    public function setCustomerPayments($val)
    {
        $this->_propDict["customerPayments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the customers
     *
     * @return Customer[]|null The customers
     */
    public function getCustomers()
    {
        if (array_key_exists('customers', $this->_propDict) && !is_null($this->_propDict['customers'])) {
           $customers = [];
           if (count($this->_propDict['customers']) > 0 && is_a($this->_propDict['customers'][0], 'Customer')) {
              return $this->_propDict['customers'];
           }
           foreach ($this->_propDict['customers'] as $singleValue) {
              $customers []= new Customer($singleValue);
           }
           $this->_propDict['customers'] = $customers;
           return $this->_propDict['customers'];
        }
        return null;
    }
    
    /** 
    * Sets the customers
    *
    * @param Customer[] $val The customers
    *
    * @return Company
    */
    public function setCustomers($val)
    {
        $this->_propDict["customers"] = $val;
        return $this;
    }
    

     /** 
     * Gets the dimensions
     *
     * @return Dimension[]|null The dimensions
     */
    public function getDimensions()
    {
        if (array_key_exists('dimensions', $this->_propDict) && !is_null($this->_propDict['dimensions'])) {
           $dimensions = [];
           if (count($this->_propDict['dimensions']) > 0 && is_a($this->_propDict['dimensions'][0], 'Dimension')) {
              return $this->_propDict['dimensions'];
           }
           foreach ($this->_propDict['dimensions'] as $singleValue) {
              $dimensions []= new Dimension($singleValue);
           }
           $this->_propDict['dimensions'] = $dimensions;
           return $this->_propDict['dimensions'];
        }
        return null;
    }
    
    /** 
    * Sets the dimensions
    *
    * @param Dimension[] $val The dimensions
    *
    * @return Company
    */
    public function setDimensions($val)
    {
        $this->_propDict["dimensions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the dimensionValues
     *
     * @return DimensionValue[]|null The dimensionValues
     */
    public function getDimensionValues()
    {
        if (array_key_exists('dimensionValues', $this->_propDict) && !is_null($this->_propDict['dimensionValues'])) {
           $dimensionValues = [];
           if (count($this->_propDict['dimensionValues']) > 0 && is_a($this->_propDict['dimensionValues'][0], 'DimensionValue')) {
              return $this->_propDict['dimensionValues'];
           }
           foreach ($this->_propDict['dimensionValues'] as $singleValue) {
              $dimensionValues []= new DimensionValue($singleValue);
           }
           $this->_propDict['dimensionValues'] = $dimensionValues;
           return $this->_propDict['dimensionValues'];
        }
        return null;
    }
    
    /** 
    * Sets the dimensionValues
    *
    * @param DimensionValue[] $val The dimensionValues
    *
    * @return Company
    */
    public function setDimensionValues($val)
    {
        $this->_propDict["dimensionValues"] = $val;
        return $this;
    }
    

     /** 
     * Gets the employees
     *
     * @return Employee[]|null The employees
     */
    public function getEmployees()
    {
        if (array_key_exists('employees', $this->_propDict) && !is_null($this->_propDict['employees'])) {
           $employees = [];
           if (count($this->_propDict['employees']) > 0 && is_a($this->_propDict['employees'][0], 'Employee')) {
              return $this->_propDict['employees'];
           }
           foreach ($this->_propDict['employees'] as $singleValue) {
              $employees []= new Employee($singleValue);
           }
           $this->_propDict['employees'] = $employees;
           return $this->_propDict['employees'];
        }
        return null;
    }
    
    /** 
    * Sets the employees
    *
    * @param Employee[] $val The employees
    *
    * @return Company
    */
    public function setEmployees($val)
    {
        $this->_propDict["employees"] = $val;
        return $this;
    }
    

     /** 
     * Gets the generalLedgerEntries
     *
     * @return GeneralLedgerEntry[]|null The generalLedgerEntries
     */
    public function getGeneralLedgerEntries()
    {
        if (array_key_exists('generalLedgerEntries', $this->_propDict) && !is_null($this->_propDict['generalLedgerEntries'])) {
           $generalLedgerEntries = [];
           if (count($this->_propDict['generalLedgerEntries']) > 0 && is_a($this->_propDict['generalLedgerEntries'][0], 'GeneralLedgerEntry')) {
              return $this->_propDict['generalLedgerEntries'];
           }
           foreach ($this->_propDict['generalLedgerEntries'] as $singleValue) {
              $generalLedgerEntries []= new GeneralLedgerEntry($singleValue);
           }
           $this->_propDict['generalLedgerEntries'] = $generalLedgerEntries;
           return $this->_propDict['generalLedgerEntries'];
        }
        return null;
    }
    
    /** 
    * Sets the generalLedgerEntries
    *
    * @param GeneralLedgerEntry[] $val The generalLedgerEntries
    *
    * @return Company
    */
    public function setGeneralLedgerEntries($val)
    {
        $this->_propDict["generalLedgerEntries"] = $val;
        return $this;
    }
    

     /** 
     * Gets the itemCategories
     *
     * @return ItemCategory[]|null The itemCategories
     */
    public function getItemCategories()
    {
        if (array_key_exists('itemCategories', $this->_propDict) && !is_null($this->_propDict['itemCategories'])) {
           $itemCategories = [];
           if (count($this->_propDict['itemCategories']) > 0 && is_a($this->_propDict['itemCategories'][0], 'ItemCategory')) {
              return $this->_propDict['itemCategories'];
           }
           foreach ($this->_propDict['itemCategories'] as $singleValue) {
              $itemCategories []= new ItemCategory($singleValue);
           }
           $this->_propDict['itemCategories'] = $itemCategories;
           return $this->_propDict['itemCategories'];
        }
        return null;
    }
    
    /** 
    * Sets the itemCategories
    *
    * @param ItemCategory[] $val The itemCategories
    *
    * @return Company
    */
    public function setItemCategories($val)
    {
        $this->_propDict["itemCategories"] = $val;
        return $this;
    }
    

     /** 
     * Gets the items
     *
     * @return Item[]|null The items
     */
    public function getItems()
    {
        if (array_key_exists('items', $this->_propDict) && !is_null($this->_propDict['items'])) {
           $items = [];
           if (count($this->_propDict['items']) > 0 && is_a($this->_propDict['items'][0], 'Item')) {
              return $this->_propDict['items'];
           }
           foreach ($this->_propDict['items'] as $singleValue) {
              $items []= new Item($singleValue);
           }
           $this->_propDict['items'] = $items;
           return $this->_propDict['items'];
        }
        return null;
    }
    
    /** 
    * Sets the items
    *
    * @param Item[] $val The items
    *
    * @return Company
    */
    public function setItems($val)
    {
        $this->_propDict["items"] = $val;
        return $this;
    }
    

     /** 
     * Gets the journalLines
     *
     * @return JournalLine[]|null The journalLines
     */
    public function getJournalLines()
    {
        if (array_key_exists('journalLines', $this->_propDict) && !is_null($this->_propDict['journalLines'])) {
           $journalLines = [];
           if (count($this->_propDict['journalLines']) > 0 && is_a($this->_propDict['journalLines'][0], 'JournalLine')) {
              return $this->_propDict['journalLines'];
           }
           foreach ($this->_propDict['journalLines'] as $singleValue) {
              $journalLines []= new JournalLine($singleValue);
           }
           $this->_propDict['journalLines'] = $journalLines;
           return $this->_propDict['journalLines'];
        }
        return null;
    }
    
    /** 
    * Sets the journalLines
    *
    * @param JournalLine[] $val The journalLines
    *
    * @return Company
    */
    public function setJournalLines($val)
    {
        $this->_propDict["journalLines"] = $val;
        return $this;
    }
    

     /** 
     * Gets the journals
     *
     * @return Journal[]|null The journals
     */
    public function getJournals()
    {
        if (array_key_exists('journals', $this->_propDict) && !is_null($this->_propDict['journals'])) {
           $journals = [];
           if (count($this->_propDict['journals']) > 0 && is_a($this->_propDict['journals'][0], 'Journal')) {
              return $this->_propDict['journals'];
           }
           foreach ($this->_propDict['journals'] as $singleValue) {
              $journals []= new Journal($singleValue);
           }
           $this->_propDict['journals'] = $journals;
           return $this->_propDict['journals'];
        }
        return null;
    }
    
    /** 
    * Sets the journals
    *
    * @param Journal[] $val The journals
    *
    * @return Company
    */
    public function setJournals($val)
    {
        $this->_propDict["journals"] = $val;
        return $this;
    }
    

     /** 
     * Gets the paymentMethods
     *
     * @return PaymentMethod[]|null The paymentMethods
     */
    public function getPaymentMethods()
    {
        if (array_key_exists('paymentMethods', $this->_propDict) && !is_null($this->_propDict['paymentMethods'])) {
           $paymentMethods = [];
           if (count($this->_propDict['paymentMethods']) > 0 && is_a($this->_propDict['paymentMethods'][0], 'PaymentMethod')) {
              return $this->_propDict['paymentMethods'];
           }
           foreach ($this->_propDict['paymentMethods'] as $singleValue) {
              $paymentMethods []= new PaymentMethod($singleValue);
           }
           $this->_propDict['paymentMethods'] = $paymentMethods;
           return $this->_propDict['paymentMethods'];
        }
        return null;
    }
    
    /** 
    * Sets the paymentMethods
    *
    * @param PaymentMethod[] $val The paymentMethods
    *
    * @return Company
    */
    public function setPaymentMethods($val)
    {
        $this->_propDict["paymentMethods"] = $val;
        return $this;
    }
    

     /** 
     * Gets the paymentTerms
     *
     * @return PaymentTerm[]|null The paymentTerms
     */
    public function getPaymentTerms()
    {
        if (array_key_exists('paymentTerms', $this->_propDict) && !is_null($this->_propDict['paymentTerms'])) {
           $paymentTerms = [];
           if (count($this->_propDict['paymentTerms']) > 0 && is_a($this->_propDict['paymentTerms'][0], 'PaymentTerm')) {
              return $this->_propDict['paymentTerms'];
           }
           foreach ($this->_propDict['paymentTerms'] as $singleValue) {
              $paymentTerms []= new PaymentTerm($singleValue);
           }
           $this->_propDict['paymentTerms'] = $paymentTerms;
           return $this->_propDict['paymentTerms'];
        }
        return null;
    }
    
    /** 
    * Sets the paymentTerms
    *
    * @param PaymentTerm[] $val The paymentTerms
    *
    * @return Company
    */
    public function setPaymentTerms($val)
    {
        $this->_propDict["paymentTerms"] = $val;
        return $this;
    }
    

     /** 
     * Gets the picture
     *
     * @return Picture[]|null The picture
     */
    public function getPicture()
    {
        if (array_key_exists('picture', $this->_propDict) && !is_null($this->_propDict['picture'])) {
           $picture = [];
           if (count($this->_propDict['picture']) > 0 && is_a($this->_propDict['picture'][0], 'Picture')) {
              return $this->_propDict['picture'];
           }
           foreach ($this->_propDict['picture'] as $singleValue) {
              $picture []= new Picture($singleValue);
           }
           $this->_propDict['picture'] = $picture;
           return $this->_propDict['picture'];
        }
        return null;
    }
    
    /** 
    * Sets the picture
    *
    * @param Picture[] $val The picture
    *
    * @return Company
    */
    public function setPicture($val)
    {
        $this->_propDict["picture"] = $val;
        return $this;
    }
    

     /** 
     * Gets the purchaseInvoiceLines
     *
     * @return PurchaseInvoiceLine[]|null The purchaseInvoiceLines
     */
    public function getPurchaseInvoiceLines()
    {
        if (array_key_exists('purchaseInvoiceLines', $this->_propDict) && !is_null($this->_propDict['purchaseInvoiceLines'])) {
           $purchaseInvoiceLines = [];
           if (count($this->_propDict['purchaseInvoiceLines']) > 0 && is_a($this->_propDict['purchaseInvoiceLines'][0], 'PurchaseInvoiceLine')) {
              return $this->_propDict['purchaseInvoiceLines'];
           }
           foreach ($this->_propDict['purchaseInvoiceLines'] as $singleValue) {
              $purchaseInvoiceLines []= new PurchaseInvoiceLine($singleValue);
           }
           $this->_propDict['purchaseInvoiceLines'] = $purchaseInvoiceLines;
           return $this->_propDict['purchaseInvoiceLines'];
        }
        return null;
    }
    
    /** 
    * Sets the purchaseInvoiceLines
    *
    * @param PurchaseInvoiceLine[] $val The purchaseInvoiceLines
    *
    * @return Company
    */
    public function setPurchaseInvoiceLines($val)
    {
        $this->_propDict["purchaseInvoiceLines"] = $val;
        return $this;
    }
    

     /** 
     * Gets the purchaseInvoices
     *
     * @return PurchaseInvoice[]|null The purchaseInvoices
     */
    public function getPurchaseInvoices()
    {
        if (array_key_exists('purchaseInvoices', $this->_propDict) && !is_null($this->_propDict['purchaseInvoices'])) {
           $purchaseInvoices = [];
           if (count($this->_propDict['purchaseInvoices']) > 0 && is_a($this->_propDict['purchaseInvoices'][0], 'PurchaseInvoice')) {
              return $this->_propDict['purchaseInvoices'];
           }
           foreach ($this->_propDict['purchaseInvoices'] as $singleValue) {
              $purchaseInvoices []= new PurchaseInvoice($singleValue);
           }
           $this->_propDict['purchaseInvoices'] = $purchaseInvoices;
           return $this->_propDict['purchaseInvoices'];
        }
        return null;
    }
    
    /** 
    * Sets the purchaseInvoices
    *
    * @param PurchaseInvoice[] $val The purchaseInvoices
    *
    * @return Company
    */
    public function setPurchaseInvoices($val)
    {
        $this->_propDict["purchaseInvoices"] = $val;
        return $this;
    }
    

     /** 
     * Gets the salesCreditMemoLines
     *
     * @return SalesCreditMemoLine[]|null The salesCreditMemoLines
     */
    public function getSalesCreditMemoLines()
    {
        if (array_key_exists('salesCreditMemoLines', $this->_propDict) && !is_null($this->_propDict['salesCreditMemoLines'])) {
           $salesCreditMemoLines = [];
           if (count($this->_propDict['salesCreditMemoLines']) > 0 && is_a($this->_propDict['salesCreditMemoLines'][0], 'SalesCreditMemoLine')) {
              return $this->_propDict['salesCreditMemoLines'];
           }
           foreach ($this->_propDict['salesCreditMemoLines'] as $singleValue) {
              $salesCreditMemoLines []= new SalesCreditMemoLine($singleValue);
           }
           $this->_propDict['salesCreditMemoLines'] = $salesCreditMemoLines;
           return $this->_propDict['salesCreditMemoLines'];
        }
        return null;
    }
    
    /** 
    * Sets the salesCreditMemoLines
    *
    * @param SalesCreditMemoLine[] $val The salesCreditMemoLines
    *
    * @return Company
    */
    public function setSalesCreditMemoLines($val)
    {
        $this->_propDict["salesCreditMemoLines"] = $val;
        return $this;
    }
    

     /** 
     * Gets the salesCreditMemos
     *
     * @return SalesCreditMemo[]|null The salesCreditMemos
     */
    public function getSalesCreditMemos()
    {
        if (array_key_exists('salesCreditMemos', $this->_propDict) && !is_null($this->_propDict['salesCreditMemos'])) {
           $salesCreditMemos = [];
           if (count($this->_propDict['salesCreditMemos']) > 0 && is_a($this->_propDict['salesCreditMemos'][0], 'SalesCreditMemo')) {
              return $this->_propDict['salesCreditMemos'];
           }
           foreach ($this->_propDict['salesCreditMemos'] as $singleValue) {
              $salesCreditMemos []= new SalesCreditMemo($singleValue);
           }
           $this->_propDict['salesCreditMemos'] = $salesCreditMemos;
           return $this->_propDict['salesCreditMemos'];
        }
        return null;
    }
    
    /** 
    * Sets the salesCreditMemos
    *
    * @param SalesCreditMemo[] $val The salesCreditMemos
    *
    * @return Company
    */
    public function setSalesCreditMemos($val)
    {
        $this->_propDict["salesCreditMemos"] = $val;
        return $this;
    }
    

     /** 
     * Gets the salesInvoiceLines
     *
     * @return SalesInvoiceLine[]|null The salesInvoiceLines
     */
    public function getSalesInvoiceLines()
    {
        if (array_key_exists('salesInvoiceLines', $this->_propDict) && !is_null($this->_propDict['salesInvoiceLines'])) {
           $salesInvoiceLines = [];
           if (count($this->_propDict['salesInvoiceLines']) > 0 && is_a($this->_propDict['salesInvoiceLines'][0], 'SalesInvoiceLine')) {
              return $this->_propDict['salesInvoiceLines'];
           }
           foreach ($this->_propDict['salesInvoiceLines'] as $singleValue) {
              $salesInvoiceLines []= new SalesInvoiceLine($singleValue);
           }
           $this->_propDict['salesInvoiceLines'] = $salesInvoiceLines;
           return $this->_propDict['salesInvoiceLines'];
        }
        return null;
    }
    
    /** 
    * Sets the salesInvoiceLines
    *
    * @param SalesInvoiceLine[] $val The salesInvoiceLines
    *
    * @return Company
    */
    public function setSalesInvoiceLines($val)
    {
        $this->_propDict["salesInvoiceLines"] = $val;
        return $this;
    }
    

     /** 
     * Gets the salesInvoices
     *
     * @return SalesInvoice[]|null The salesInvoices
     */
    public function getSalesInvoices()
    {
        if (array_key_exists('salesInvoices', $this->_propDict) && !is_null($this->_propDict['salesInvoices'])) {
           $salesInvoices = [];
           if (count($this->_propDict['salesInvoices']) > 0 && is_a($this->_propDict['salesInvoices'][0], 'SalesInvoice')) {
              return $this->_propDict['salesInvoices'];
           }
           foreach ($this->_propDict['salesInvoices'] as $singleValue) {
              $salesInvoices []= new SalesInvoice($singleValue);
           }
           $this->_propDict['salesInvoices'] = $salesInvoices;
           return $this->_propDict['salesInvoices'];
        }
        return null;
    }
    
    /** 
    * Sets the salesInvoices
    *
    * @param SalesInvoice[] $val The salesInvoices
    *
    * @return Company
    */
    public function setSalesInvoices($val)
    {
        $this->_propDict["salesInvoices"] = $val;
        return $this;
    }
    

     /** 
     * Gets the salesOrderLines
     *
     * @return SalesOrderLine[]|null The salesOrderLines
     */
    public function getSalesOrderLines()
    {
        if (array_key_exists('salesOrderLines', $this->_propDict) && !is_null($this->_propDict['salesOrderLines'])) {
           $salesOrderLines = [];
           if (count($this->_propDict['salesOrderLines']) > 0 && is_a($this->_propDict['salesOrderLines'][0], 'SalesOrderLine')) {
              return $this->_propDict['salesOrderLines'];
           }
           foreach ($this->_propDict['salesOrderLines'] as $singleValue) {
              $salesOrderLines []= new SalesOrderLine($singleValue);
           }
           $this->_propDict['salesOrderLines'] = $salesOrderLines;
           return $this->_propDict['salesOrderLines'];
        }
        return null;
    }
    
    /** 
    * Sets the salesOrderLines
    *
    * @param SalesOrderLine[] $val The salesOrderLines
    *
    * @return Company
    */
    public function setSalesOrderLines($val)
    {
        $this->_propDict["salesOrderLines"] = $val;
        return $this;
    }
    

     /** 
     * Gets the salesOrders
     *
     * @return SalesOrder[]|null The salesOrders
     */
    public function getSalesOrders()
    {
        if (array_key_exists('salesOrders', $this->_propDict) && !is_null($this->_propDict['salesOrders'])) {
           $salesOrders = [];
           if (count($this->_propDict['salesOrders']) > 0 && is_a($this->_propDict['salesOrders'][0], 'SalesOrder')) {
              return $this->_propDict['salesOrders'];
           }
           foreach ($this->_propDict['salesOrders'] as $singleValue) {
              $salesOrders []= new SalesOrder($singleValue);
           }
           $this->_propDict['salesOrders'] = $salesOrders;
           return $this->_propDict['salesOrders'];
        }
        return null;
    }
    
    /** 
    * Sets the salesOrders
    *
    * @param SalesOrder[] $val The salesOrders
    *
    * @return Company
    */
    public function setSalesOrders($val)
    {
        $this->_propDict["salesOrders"] = $val;
        return $this;
    }
    

     /** 
     * Gets the salesQuoteLines
     *
     * @return SalesQuoteLine[]|null The salesQuoteLines
     */
    public function getSalesQuoteLines()
    {
        if (array_key_exists('salesQuoteLines', $this->_propDict) && !is_null($this->_propDict['salesQuoteLines'])) {
           $salesQuoteLines = [];
           if (count($this->_propDict['salesQuoteLines']) > 0 && is_a($this->_propDict['salesQuoteLines'][0], 'SalesQuoteLine')) {
              return $this->_propDict['salesQuoteLines'];
           }
           foreach ($this->_propDict['salesQuoteLines'] as $singleValue) {
              $salesQuoteLines []= new SalesQuoteLine($singleValue);
           }
           $this->_propDict['salesQuoteLines'] = $salesQuoteLines;
           return $this->_propDict['salesQuoteLines'];
        }
        return null;
    }
    
    /** 
    * Sets the salesQuoteLines
    *
    * @param SalesQuoteLine[] $val The salesQuoteLines
    *
    * @return Company
    */
    public function setSalesQuoteLines($val)
    {
        $this->_propDict["salesQuoteLines"] = $val;
        return $this;
    }
    

     /** 
     * Gets the salesQuotes
     *
     * @return SalesQuote[]|null The salesQuotes
     */
    public function getSalesQuotes()
    {
        if (array_key_exists('salesQuotes', $this->_propDict) && !is_null($this->_propDict['salesQuotes'])) {
           $salesQuotes = [];
           if (count($this->_propDict['salesQuotes']) > 0 && is_a($this->_propDict['salesQuotes'][0], 'SalesQuote')) {
              return $this->_propDict['salesQuotes'];
           }
           foreach ($this->_propDict['salesQuotes'] as $singleValue) {
              $salesQuotes []= new SalesQuote($singleValue);
           }
           $this->_propDict['salesQuotes'] = $salesQuotes;
           return $this->_propDict['salesQuotes'];
        }
        return null;
    }
    
    /** 
    * Sets the salesQuotes
    *
    * @param SalesQuote[] $val The salesQuotes
    *
    * @return Company
    */
    public function setSalesQuotes($val)
    {
        $this->_propDict["salesQuotes"] = $val;
        return $this;
    }
    

     /** 
     * Gets the shipmentMethods
     *
     * @return ShipmentMethod[]|null The shipmentMethods
     */
    public function getShipmentMethods()
    {
        if (array_key_exists('shipmentMethods', $this->_propDict) && !is_null($this->_propDict['shipmentMethods'])) {
           $shipmentMethods = [];
           if (count($this->_propDict['shipmentMethods']) > 0 && is_a($this->_propDict['shipmentMethods'][0], 'ShipmentMethod')) {
              return $this->_propDict['shipmentMethods'];
           }
           foreach ($this->_propDict['shipmentMethods'] as $singleValue) {
              $shipmentMethods []= new ShipmentMethod($singleValue);
           }
           $this->_propDict['shipmentMethods'] = $shipmentMethods;
           return $this->_propDict['shipmentMethods'];
        }
        return null;
    }
    
    /** 
    * Sets the shipmentMethods
    *
    * @param ShipmentMethod[] $val The shipmentMethods
    *
    * @return Company
    */
    public function setShipmentMethods($val)
    {
        $this->_propDict["shipmentMethods"] = $val;
        return $this;
    }
    

     /** 
     * Gets the taxAreas
     *
     * @return TaxArea[]|null The taxAreas
     */
    public function getTaxAreas()
    {
        if (array_key_exists('taxAreas', $this->_propDict) && !is_null($this->_propDict['taxAreas'])) {
           $taxAreas = [];
           if (count($this->_propDict['taxAreas']) > 0 && is_a($this->_propDict['taxAreas'][0], 'TaxArea')) {
              return $this->_propDict['taxAreas'];
           }
           foreach ($this->_propDict['taxAreas'] as $singleValue) {
              $taxAreas []= new TaxArea($singleValue);
           }
           $this->_propDict['taxAreas'] = $taxAreas;
           return $this->_propDict['taxAreas'];
        }
        return null;
    }
    
    /** 
    * Sets the taxAreas
    *
    * @param TaxArea[] $val The taxAreas
    *
    * @return Company
    */
    public function setTaxAreas($val)
    {
        $this->_propDict["taxAreas"] = $val;
        return $this;
    }
    

     /** 
     * Gets the taxGroups
     *
     * @return TaxGroup[]|null The taxGroups
     */
    public function getTaxGroups()
    {
        if (array_key_exists('taxGroups', $this->_propDict) && !is_null($this->_propDict['taxGroups'])) {
           $taxGroups = [];
           if (count($this->_propDict['taxGroups']) > 0 && is_a($this->_propDict['taxGroups'][0], 'TaxGroup')) {
              return $this->_propDict['taxGroups'];
           }
           foreach ($this->_propDict['taxGroups'] as $singleValue) {
              $taxGroups []= new TaxGroup($singleValue);
           }
           $this->_propDict['taxGroups'] = $taxGroups;
           return $this->_propDict['taxGroups'];
        }
        return null;
    }
    
    /** 
    * Sets the taxGroups
    *
    * @param TaxGroup[] $val The taxGroups
    *
    * @return Company
    */
    public function setTaxGroups($val)
    {
        $this->_propDict["taxGroups"] = $val;
        return $this;
    }
    

     /** 
     * Gets the unitsOfMeasure
     *
     * @return UnitOfMeasure[]|null The unitsOfMeasure
     */
    public function getUnitsOfMeasure()
    {
        if (array_key_exists('unitsOfMeasure', $this->_propDict) && !is_null($this->_propDict['unitsOfMeasure'])) {
           $unitsOfMeasure = [];
           if (count($this->_propDict['unitsOfMeasure']) > 0 && is_a($this->_propDict['unitsOfMeasure'][0], 'UnitOfMeasure')) {
              return $this->_propDict['unitsOfMeasure'];
           }
           foreach ($this->_propDict['unitsOfMeasure'] as $singleValue) {
              $unitsOfMeasure []= new UnitOfMeasure($singleValue);
           }
           $this->_propDict['unitsOfMeasure'] = $unitsOfMeasure;
           return $this->_propDict['unitsOfMeasure'];
        }
        return null;
    }
    
    /** 
    * Sets the unitsOfMeasure
    *
    * @param UnitOfMeasure[] $val The unitsOfMeasure
    *
    * @return Company
    */
    public function setUnitsOfMeasure($val)
    {
        $this->_propDict["unitsOfMeasure"] = $val;
        return $this;
    }
    

     /** 
     * Gets the vendors
     *
     * @return Vendor[]|null The vendors
     */
    public function getVendors()
    {
        if (array_key_exists('vendors', $this->_propDict) && !is_null($this->_propDict['vendors'])) {
           $vendors = [];
           if (count($this->_propDict['vendors']) > 0 && is_a($this->_propDict['vendors'][0], 'Vendor')) {
              return $this->_propDict['vendors'];
           }
           foreach ($this->_propDict['vendors'] as $singleValue) {
              $vendors []= new Vendor($singleValue);
           }
           $this->_propDict['vendors'] = $vendors;
           return $this->_propDict['vendors'];
        }
        return null;
    }
    
    /** 
    * Sets the vendors
    *
    * @param Vendor[] $val The vendors
    *
    * @return Company
    */
    public function setVendors($val)
    {
        $this->_propDict["vendors"] = $val;
        return $this;
    }
    
}
