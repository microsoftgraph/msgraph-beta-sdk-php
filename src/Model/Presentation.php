<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Presentation File
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
* Presentation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Presentation extends Entity
{

     /** 
     * Gets the comments
     *
     * @return DocumentComment[]|null The comments
     */
    public function getComments()
    {
        if (array_key_exists('comments', $this->_propDict) && !is_null($this->_propDict['comments'])) {
           $comments = [];
           if (count($this->_propDict['comments']) > 0 && is_a($this->_propDict['comments'][0], 'DocumentComment')) {
              return $this->_propDict['comments'];
           }
           foreach ($this->_propDict['comments'] as $singleValue) {
              $comments []= new DocumentComment($singleValue);
           }
           $this->_propDict['comments'] = $comments;
           return $this->_propDict['comments'];
        }
        return null;
    }
    
    /** 
    * Sets the comments
    *
    * @param DocumentComment[] $val The comments
    *
    * @return Presentation
    */
    public function setComments($val)
    {
        $this->_propDict["comments"] = $val;
        return $this;
    }
    
}
