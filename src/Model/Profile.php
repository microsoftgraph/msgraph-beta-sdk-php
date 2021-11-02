<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Profile File
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
* Profile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Profile extends Entity
{

     /** 
     * Gets the account
     *
     * @return UserAccountInformation[]|null The account
     */
    public function getAccount()
    {
        if (array_key_exists('account', $this->_propDict) && !is_null($this->_propDict['account'])) {
           $account = [];
           if (count($this->_propDict['account']) > 0 && is_a($this->_propDict['account'][0], 'UserAccountInformation')) {
              return $this->_propDict['account'];
           }
           foreach ($this->_propDict['account'] as $singleValue) {
              $account []= new UserAccountInformation($singleValue);
           }
           $this->_propDict['account'] = $account;
           return $this->_propDict['account'];
        }
        return null;
    }
    
    /** 
    * Sets the account
    *
    * @param UserAccountInformation[] $val The account
    *
    * @return Profile
    */
    public function setAccount($val)
    {
        $this->_propDict["account"] = $val;
        return $this;
    }
    

     /** 
     * Gets the addresses
    * Represents details of addresses associated with the user.
     *
     * @return ItemAddress[]|null The addresses
     */
    public function getAddresses()
    {
        if (array_key_exists('addresses', $this->_propDict) && !is_null($this->_propDict['addresses'])) {
           $addresses = [];
           if (count($this->_propDict['addresses']) > 0 && is_a($this->_propDict['addresses'][0], 'ItemAddress')) {
              return $this->_propDict['addresses'];
           }
           foreach ($this->_propDict['addresses'] as $singleValue) {
              $addresses []= new ItemAddress($singleValue);
           }
           $this->_propDict['addresses'] = $addresses;
           return $this->_propDict['addresses'];
        }
        return null;
    }
    
    /** 
    * Sets the addresses
    * Represents details of addresses associated with the user.
    *
    * @param ItemAddress[] $val The addresses
    *
    * @return Profile
    */
    public function setAddresses($val)
    {
        $this->_propDict["addresses"] = $val;
        return $this;
    }
    

     /** 
     * Gets the anniversaries
    * Represents the details of meaningful dates associated with a person.
     *
     * @return PersonAnnualEvent[]|null The anniversaries
     */
    public function getAnniversaries()
    {
        if (array_key_exists('anniversaries', $this->_propDict) && !is_null($this->_propDict['anniversaries'])) {
           $anniversaries = [];
           if (count($this->_propDict['anniversaries']) > 0 && is_a($this->_propDict['anniversaries'][0], 'PersonAnnualEvent')) {
              return $this->_propDict['anniversaries'];
           }
           foreach ($this->_propDict['anniversaries'] as $singleValue) {
              $anniversaries []= new PersonAnnualEvent($singleValue);
           }
           $this->_propDict['anniversaries'] = $anniversaries;
           return $this->_propDict['anniversaries'];
        }
        return null;
    }
    
    /** 
    * Sets the anniversaries
    * Represents the details of meaningful dates associated with a person.
    *
    * @param PersonAnnualEvent[] $val The anniversaries
    *
    * @return Profile
    */
    public function setAnniversaries($val)
    {
        $this->_propDict["anniversaries"] = $val;
        return $this;
    }
    

     /** 
     * Gets the awards
    * Represents the details of awards or honors associated with a person.
     *
     * @return PersonAward[]|null The awards
     */
    public function getAwards()
    {
        if (array_key_exists('awards', $this->_propDict) && !is_null($this->_propDict['awards'])) {
           $awards = [];
           if (count($this->_propDict['awards']) > 0 && is_a($this->_propDict['awards'][0], 'PersonAward')) {
              return $this->_propDict['awards'];
           }
           foreach ($this->_propDict['awards'] as $singleValue) {
              $awards []= new PersonAward($singleValue);
           }
           $this->_propDict['awards'] = $awards;
           return $this->_propDict['awards'];
        }
        return null;
    }
    
    /** 
    * Sets the awards
    * Represents the details of awards or honors associated with a person.
    *
    * @param PersonAward[] $val The awards
    *
    * @return Profile
    */
    public function setAwards($val)
    {
        $this->_propDict["awards"] = $val;
        return $this;
    }
    

     /** 
     * Gets the certifications
    * Represents the details of certifications associated with a person.
     *
     * @return PersonCertification[]|null The certifications
     */
    public function getCertifications()
    {
        if (array_key_exists('certifications', $this->_propDict) && !is_null($this->_propDict['certifications'])) {
           $certifications = [];
           if (count($this->_propDict['certifications']) > 0 && is_a($this->_propDict['certifications'][0], 'PersonCertification')) {
              return $this->_propDict['certifications'];
           }
           foreach ($this->_propDict['certifications'] as $singleValue) {
              $certifications []= new PersonCertification($singleValue);
           }
           $this->_propDict['certifications'] = $certifications;
           return $this->_propDict['certifications'];
        }
        return null;
    }
    
    /** 
    * Sets the certifications
    * Represents the details of certifications associated with a person.
    *
    * @param PersonCertification[] $val The certifications
    *
    * @return Profile
    */
    public function setCertifications($val)
    {
        $this->_propDict["certifications"] = $val;
        return $this;
    }
    

     /** 
     * Gets the educationalActivities
    * Represents data that a user has supplied related to undergraduate, graduate, postgraduate or other educational activities.
     *
     * @return EducationalActivity[]|null The educationalActivities
     */
    public function getEducationalActivities()
    {
        if (array_key_exists('educationalActivities', $this->_propDict) && !is_null($this->_propDict['educationalActivities'])) {
           $educationalActivities = [];
           if (count($this->_propDict['educationalActivities']) > 0 && is_a($this->_propDict['educationalActivities'][0], 'EducationalActivity')) {
              return $this->_propDict['educationalActivities'];
           }
           foreach ($this->_propDict['educationalActivities'] as $singleValue) {
              $educationalActivities []= new EducationalActivity($singleValue);
           }
           $this->_propDict['educationalActivities'] = $educationalActivities;
           return $this->_propDict['educationalActivities'];
        }
        return null;
    }
    
    /** 
    * Sets the educationalActivities
    * Represents data that a user has supplied related to undergraduate, graduate, postgraduate or other educational activities.
    *
    * @param EducationalActivity[] $val The educationalActivities
    *
    * @return Profile
    */
    public function setEducationalActivities($val)
    {
        $this->_propDict["educationalActivities"] = $val;
        return $this;
    }
    

     /** 
     * Gets the emails
    * Represents detailed information about email addresses associated with the user.
     *
     * @return ItemEmail[]|null The emails
     */
    public function getEmails()
    {
        if (array_key_exists('emails', $this->_propDict) && !is_null($this->_propDict['emails'])) {
           $emails = [];
           if (count($this->_propDict['emails']) > 0 && is_a($this->_propDict['emails'][0], 'ItemEmail')) {
              return $this->_propDict['emails'];
           }
           foreach ($this->_propDict['emails'] as $singleValue) {
              $emails []= new ItemEmail($singleValue);
           }
           $this->_propDict['emails'] = $emails;
           return $this->_propDict['emails'];
        }
        return null;
    }
    
    /** 
    * Sets the emails
    * Represents detailed information about email addresses associated with the user.
    *
    * @param ItemEmail[] $val The emails
    *
    * @return Profile
    */
    public function setEmails($val)
    {
        $this->_propDict["emails"] = $val;
        return $this;
    }
    

     /** 
     * Gets the interests
    * Provides detailed information about interests the user has associated with themselves in various services.
     *
     * @return PersonInterest[]|null The interests
     */
    public function getInterests()
    {
        if (array_key_exists('interests', $this->_propDict) && !is_null($this->_propDict['interests'])) {
           $interests = [];
           if (count($this->_propDict['interests']) > 0 && is_a($this->_propDict['interests'][0], 'PersonInterest')) {
              return $this->_propDict['interests'];
           }
           foreach ($this->_propDict['interests'] as $singleValue) {
              $interests []= new PersonInterest($singleValue);
           }
           $this->_propDict['interests'] = $interests;
           return $this->_propDict['interests'];
        }
        return null;
    }
    
    /** 
    * Sets the interests
    * Provides detailed information about interests the user has associated with themselves in various services.
    *
    * @param PersonInterest[] $val The interests
    *
    * @return Profile
    */
    public function setInterests($val)
    {
        $this->_propDict["interests"] = $val;
        return $this;
    }
    

     /** 
     * Gets the languages
    * Represents detailed information about languages that a user has added to their profile.
     *
     * @return LanguageProficiency[]|null The languages
     */
    public function getLanguages()
    {
        if (array_key_exists('languages', $this->_propDict) && !is_null($this->_propDict['languages'])) {
           $languages = [];
           if (count($this->_propDict['languages']) > 0 && is_a($this->_propDict['languages'][0], 'LanguageProficiency')) {
              return $this->_propDict['languages'];
           }
           foreach ($this->_propDict['languages'] as $singleValue) {
              $languages []= new LanguageProficiency($singleValue);
           }
           $this->_propDict['languages'] = $languages;
           return $this->_propDict['languages'];
        }
        return null;
    }
    
    /** 
    * Sets the languages
    * Represents detailed information about languages that a user has added to their profile.
    *
    * @param LanguageProficiency[] $val The languages
    *
    * @return Profile
    */
    public function setLanguages($val)
    {
        $this->_propDict["languages"] = $val;
        return $this;
    }
    

     /** 
     * Gets the names
    * Represents the names a user has added to their profile.
     *
     * @return PersonName[]|null The names
     */
    public function getNames()
    {
        if (array_key_exists('names', $this->_propDict) && !is_null($this->_propDict['names'])) {
           $names = [];
           if (count($this->_propDict['names']) > 0 && is_a($this->_propDict['names'][0], 'PersonName')) {
              return $this->_propDict['names'];
           }
           foreach ($this->_propDict['names'] as $singleValue) {
              $names []= new PersonName($singleValue);
           }
           $this->_propDict['names'] = $names;
           return $this->_propDict['names'];
        }
        return null;
    }
    
    /** 
    * Sets the names
    * Represents the names a user has added to their profile.
    *
    * @param PersonName[] $val The names
    *
    * @return Profile
    */
    public function setNames($val)
    {
        $this->_propDict["names"] = $val;
        return $this;
    }
    

     /** 
     * Gets the notes
    * Represents notes that a user has added to their profile.
     *
     * @return PersonAnnotation[]|null The notes
     */
    public function getNotes()
    {
        if (array_key_exists('notes', $this->_propDict) && !is_null($this->_propDict['notes'])) {
           $notes = [];
           if (count($this->_propDict['notes']) > 0 && is_a($this->_propDict['notes'][0], 'PersonAnnotation')) {
              return $this->_propDict['notes'];
           }
           foreach ($this->_propDict['notes'] as $singleValue) {
              $notes []= new PersonAnnotation($singleValue);
           }
           $this->_propDict['notes'] = $notes;
           return $this->_propDict['notes'];
        }
        return null;
    }
    
    /** 
    * Sets the notes
    * Represents notes that a user has added to their profile.
    *
    * @param PersonAnnotation[] $val The notes
    *
    * @return Profile
    */
    public function setNotes($val)
    {
        $this->_propDict["notes"] = $val;
        return $this;
    }
    

     /** 
     * Gets the patents
    * Represents patents that a user has added to their profile.
     *
     * @return ItemPatent[]|null The patents
     */
    public function getPatents()
    {
        if (array_key_exists('patents', $this->_propDict) && !is_null($this->_propDict['patents'])) {
           $patents = [];
           if (count($this->_propDict['patents']) > 0 && is_a($this->_propDict['patents'][0], 'ItemPatent')) {
              return $this->_propDict['patents'];
           }
           foreach ($this->_propDict['patents'] as $singleValue) {
              $patents []= new ItemPatent($singleValue);
           }
           $this->_propDict['patents'] = $patents;
           return $this->_propDict['patents'];
        }
        return null;
    }
    
    /** 
    * Sets the patents
    * Represents patents that a user has added to their profile.
    *
    * @param ItemPatent[] $val The patents
    *
    * @return Profile
    */
    public function setPatents($val)
    {
        $this->_propDict["patents"] = $val;
        return $this;
    }
    

     /** 
     * Gets the phones
    * Represents detailed information about phone numbers associated with a user in various services.
     *
     * @return ItemPhone[]|null The phones
     */
    public function getPhones()
    {
        if (array_key_exists('phones', $this->_propDict) && !is_null($this->_propDict['phones'])) {
           $phones = [];
           if (count($this->_propDict['phones']) > 0 && is_a($this->_propDict['phones'][0], 'ItemPhone')) {
              return $this->_propDict['phones'];
           }
           foreach ($this->_propDict['phones'] as $singleValue) {
              $phones []= new ItemPhone($singleValue);
           }
           $this->_propDict['phones'] = $phones;
           return $this->_propDict['phones'];
        }
        return null;
    }
    
    /** 
    * Sets the phones
    * Represents detailed information about phone numbers associated with a user in various services.
    *
    * @param ItemPhone[] $val The phones
    *
    * @return Profile
    */
    public function setPhones($val)
    {
        $this->_propDict["phones"] = $val;
        return $this;
    }
    

     /** 
     * Gets the positions
    * Represents detailed information about work positions associated with a user's profile.
     *
     * @return WorkPosition[]|null The positions
     */
    public function getPositions()
    {
        if (array_key_exists('positions', $this->_propDict) && !is_null($this->_propDict['positions'])) {
           $positions = [];
           if (count($this->_propDict['positions']) > 0 && is_a($this->_propDict['positions'][0], 'WorkPosition')) {
              return $this->_propDict['positions'];
           }
           foreach ($this->_propDict['positions'] as $singleValue) {
              $positions []= new WorkPosition($singleValue);
           }
           $this->_propDict['positions'] = $positions;
           return $this->_propDict['positions'];
        }
        return null;
    }
    
    /** 
    * Sets the positions
    * Represents detailed information about work positions associated with a user's profile.
    *
    * @param WorkPosition[] $val The positions
    *
    * @return Profile
    */
    public function setPositions($val)
    {
        $this->_propDict["positions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the projects
    * Represents detailed information about projects associated with a user.
     *
     * @return ProjectParticipation[]|null The projects
     */
    public function getProjects()
    {
        if (array_key_exists('projects', $this->_propDict) && !is_null($this->_propDict['projects'])) {
           $projects = [];
           if (count($this->_propDict['projects']) > 0 && is_a($this->_propDict['projects'][0], 'ProjectParticipation')) {
              return $this->_propDict['projects'];
           }
           foreach ($this->_propDict['projects'] as $singleValue) {
              $projects []= new ProjectParticipation($singleValue);
           }
           $this->_propDict['projects'] = $projects;
           return $this->_propDict['projects'];
        }
        return null;
    }
    
    /** 
    * Sets the projects
    * Represents detailed information about projects associated with a user.
    *
    * @param ProjectParticipation[] $val The projects
    *
    * @return Profile
    */
    public function setProjects($val)
    {
        $this->_propDict["projects"] = $val;
        return $this;
    }
    

     /** 
     * Gets the publications
    * Represents details of any publications a user has added to their profile.
     *
     * @return ItemPublication[]|null The publications
     */
    public function getPublications()
    {
        if (array_key_exists('publications', $this->_propDict) && !is_null($this->_propDict['publications'])) {
           $publications = [];
           if (count($this->_propDict['publications']) > 0 && is_a($this->_propDict['publications'][0], 'ItemPublication')) {
              return $this->_propDict['publications'];
           }
           foreach ($this->_propDict['publications'] as $singleValue) {
              $publications []= new ItemPublication($singleValue);
           }
           $this->_propDict['publications'] = $publications;
           return $this->_propDict['publications'];
        }
        return null;
    }
    
    /** 
    * Sets the publications
    * Represents details of any publications a user has added to their profile.
    *
    * @param ItemPublication[] $val The publications
    *
    * @return Profile
    */
    public function setPublications($val)
    {
        $this->_propDict["publications"] = $val;
        return $this;
    }
    

     /** 
     * Gets the skills
    * Represents detailed information about skills associated with a user in various services.
     *
     * @return SkillProficiency[]|null The skills
     */
    public function getSkills()
    {
        if (array_key_exists('skills', $this->_propDict) && !is_null($this->_propDict['skills'])) {
           $skills = [];
           if (count($this->_propDict['skills']) > 0 && is_a($this->_propDict['skills'][0], 'SkillProficiency')) {
              return $this->_propDict['skills'];
           }
           foreach ($this->_propDict['skills'] as $singleValue) {
              $skills []= new SkillProficiency($singleValue);
           }
           $this->_propDict['skills'] = $skills;
           return $this->_propDict['skills'];
        }
        return null;
    }
    
    /** 
    * Sets the skills
    * Represents detailed information about skills associated with a user in various services.
    *
    * @param SkillProficiency[] $val The skills
    *
    * @return Profile
    */
    public function setSkills($val)
    {
        $this->_propDict["skills"] = $val;
        return $this;
    }
    

     /** 
     * Gets the webAccounts
    * Represents web accounts the user has indicated they use or has added to their user profile.
     *
     * @return WebAccount[]|null The webAccounts
     */
    public function getWebAccounts()
    {
        if (array_key_exists('webAccounts', $this->_propDict) && !is_null($this->_propDict['webAccounts'])) {
           $webAccounts = [];
           if (count($this->_propDict['webAccounts']) > 0 && is_a($this->_propDict['webAccounts'][0], 'WebAccount')) {
              return $this->_propDict['webAccounts'];
           }
           foreach ($this->_propDict['webAccounts'] as $singleValue) {
              $webAccounts []= new WebAccount($singleValue);
           }
           $this->_propDict['webAccounts'] = $webAccounts;
           return $this->_propDict['webAccounts'];
        }
        return null;
    }
    
    /** 
    * Sets the webAccounts
    * Represents web accounts the user has indicated they use or has added to their user profile.
    *
    * @param WebAccount[] $val The webAccounts
    *
    * @return Profile
    */
    public function setWebAccounts($val)
    {
        $this->_propDict["webAccounts"] = $val;
        return $this;
    }
    

     /** 
     * Gets the websites
    * Represents detailed information about websites associated with a user in various services.
     *
     * @return PersonWebsite[]|null The websites
     */
    public function getWebsites()
    {
        if (array_key_exists('websites', $this->_propDict) && !is_null($this->_propDict['websites'])) {
           $websites = [];
           if (count($this->_propDict['websites']) > 0 && is_a($this->_propDict['websites'][0], 'PersonWebsite')) {
              return $this->_propDict['websites'];
           }
           foreach ($this->_propDict['websites'] as $singleValue) {
              $websites []= new PersonWebsite($singleValue);
           }
           $this->_propDict['websites'] = $websites;
           return $this->_propDict['websites'];
        }
        return null;
    }
    
    /** 
    * Sets the websites
    * Represents detailed information about websites associated with a user in various services.
    *
    * @param PersonWebsite[] $val The websites
    *
    * @return Profile
    */
    public function setWebsites($val)
    {
        $this->_propDict["websites"] = $val;
        return $this;
    }
    
}
