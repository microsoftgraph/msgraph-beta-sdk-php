<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DocumentComment File
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
* DocumentComment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DocumentComment extends Entity
{
    /**
    * Gets the content
    *
    * @return string|null The content
    */
    public function getContent()
    {
        if (array_key_exists("content", $this->_propDict)) {
            return $this->_propDict["content"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the content
    *
    * @param string $val The content
    *
    * @return DocumentComment
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
        return $this;
    }
    

     /** 
     * Gets the replies
     *
     * @return DocumentCommentReply[]|null The replies
     */
    public function getReplies()
    {
        if (array_key_exists('replies', $this->_propDict) && !is_null($this->_propDict['replies'])) {
           $replies = [];
           if (count($this->_propDict['replies']) > 0 && is_a($this->_propDict['replies'][0], 'DocumentCommentReply')) {
              return $this->_propDict['replies'];
           }
           foreach ($this->_propDict['replies'] as $singleValue) {
              $replies []= new DocumentCommentReply($singleValue);
           }
           $this->_propDict['replies'] = $replies;
           return $this->_propDict['replies'];
        }
        return null;
    }
    
    /** 
    * Sets the replies
    *
    * @param DocumentCommentReply[] $val The replies
    *
    * @return DocumentComment
    */
    public function setReplies($val)
    {
        $this->_propDict["replies"] = $val;
        return $this;
    }
    
}
