<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SearchEntity File
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
* SearchEntity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SearchEntity extends Entity
{

     /** 
     * Gets the acronyms
     *
     * @return \Beta\Microsoft\Graph\Search\Model\Acronym[]|null The acronyms
     */
    public function getAcronyms()
    {
        if (array_key_exists('acronyms', $this->_propDict) && !is_null($this->_propDict['acronyms'])) {
           $acronyms = [];
           if (count($this->_propDict['acronyms']) > 0 && is_a($this->_propDict['acronyms'][0], '\Beta\Microsoft\Graph\Search\Model\Acronym')) {
              return $this->_propDict['acronyms'];
           }
           foreach ($this->_propDict['acronyms'] as $singleValue) {
              $acronyms []= new \Beta\Microsoft\Graph\Search\Model\Acronym($singleValue);
           }
           $this->_propDict['acronyms'] = $acronyms;
           return $this->_propDict['acronyms'];
        }
        return null;
    }
    
    /** 
    * Sets the acronyms
    *
    * @param \Beta\Microsoft\Graph\Search\Model\Acronym[] $val The acronyms
    *
    * @return SearchEntity
    */
    public function setAcronyms($val)
    {
        $this->_propDict["acronyms"] = $val;
        return $this;
    }
    

     /** 
     * Gets the bookmarks
     *
     * @return \Beta\Microsoft\Graph\Search\Model\Bookmark[]|null The bookmarks
     */
    public function getBookmarks()
    {
        if (array_key_exists('bookmarks', $this->_propDict) && !is_null($this->_propDict['bookmarks'])) {
           $bookmarks = [];
           if (count($this->_propDict['bookmarks']) > 0 && is_a($this->_propDict['bookmarks'][0], '\Beta\Microsoft\Graph\Search\Model\Bookmark')) {
              return $this->_propDict['bookmarks'];
           }
           foreach ($this->_propDict['bookmarks'] as $singleValue) {
              $bookmarks []= new \Beta\Microsoft\Graph\Search\Model\Bookmark($singleValue);
           }
           $this->_propDict['bookmarks'] = $bookmarks;
           return $this->_propDict['bookmarks'];
        }
        return null;
    }
    
    /** 
    * Sets the bookmarks
    *
    * @param \Beta\Microsoft\Graph\Search\Model\Bookmark[] $val The bookmarks
    *
    * @return SearchEntity
    */
    public function setBookmarks($val)
    {
        $this->_propDict["bookmarks"] = $val;
        return $this;
    }
    

     /** 
     * Gets the qnas
     *
     * @return \Beta\Microsoft\Graph\Search\Model\Qna[]|null The qnas
     */
    public function getQnas()
    {
        if (array_key_exists('qnas', $this->_propDict) && !is_null($this->_propDict['qnas'])) {
           $qnas = [];
           if (count($this->_propDict['qnas']) > 0 && is_a($this->_propDict['qnas'][0], '\Beta\Microsoft\Graph\Search\Model\Qna')) {
              return $this->_propDict['qnas'];
           }
           foreach ($this->_propDict['qnas'] as $singleValue) {
              $qnas []= new \Beta\Microsoft\Graph\Search\Model\Qna($singleValue);
           }
           $this->_propDict['qnas'] = $qnas;
           return $this->_propDict['qnas'];
        }
        return null;
    }
    
    /** 
    * Sets the qnas
    *
    * @param \Beta\Microsoft\Graph\Search\Model\Qna[] $val The qnas
    *
    * @return SearchEntity
    */
    public function setQnas($val)
    {
        $this->_propDict["qnas"] = $val;
        return $this;
    }
    
}
